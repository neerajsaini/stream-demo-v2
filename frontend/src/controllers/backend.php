<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends MY_Controller 
{

	function __construct()
    {
        parent::__construct();
        $this->setSystemParam();
        $this->setCounterParam();
    }

	function index()
	{
		$process = 1;
		$links['index'] = site_url('backend/index');
        $links['Allot_Free_Slot'] = site_url('backend/free_slots/'.$process);
        $links['Free_Idle_Slot'] = site_url('backend/idle_slots/'.$process);
        $links['Play_Timeout'] = site_url('backend/timeout_slots/'.$process);
        $links['reset_all'] = site_url('backend/reset_all/'.$process);
        $links['Free_Idle_Players'] = site_url('backend/idle_queue/'.$process);
        $this->tplData['links'] = $links;

        foreach($this->player_model->get_all() as $row){
        	$playerData[$row['playerID']] = array('playerName'=>$row['playerName'], 'isPremium'=>$row['isPremium']);
        }


		$this->tplData['playerData'] = $playerData;
		$this->tplData['sessionData'] = $this->session_model->get_all();
		$this->tplData['sessionLogData'] = $this->session_log_model->get_all();
		$this->tplData['sessionStatusLogData'] = $this->db->from('sessionStatusLog')->order_by('SID,datetime')->get()->result_array();
		$this->tplData['serverSlot'] = $this->server_slot_model->get_all();
		$this->tplData['counterParam'] = $this->counterParam;
		$this->tplData['systemParam'] = $this->systemParam;

		$this->tplData['serverSlotInfo'] = $serverSlotInfo = $this->db->from('serverSlot AS ss')
			->join('server AS s','s.serverID = ss.serverID', 'left')
			->join('player AS p','p.playerID = ss.playerID', 'left')
			->get()->result_array();

		//echo "<pre>" .  print_r($serverSlotInfo,true) . "</pre>";


		$this->smarty->view('backend/backend', $this->tplData);

	}

	function reset_all()
	{
		$this->db->set('val',0)->where('val >', 0)->update('counterParam');
		$this->db->set('playerID',NULL)->where('playerID IS NOT NULL')->update('serverSlot');
		$this->db->where('SID >', 0)->delete('session');
		$this->db->where('SID >', 0)->delete('sessionLog');
		$this->db->where('SID >', 0)->delete('sessionStatusLog');
		redirect('backend');
	}

	function autoProcess()
	{
		$this->smarty->view('backend/autoprocess');
	}
	function ajxAutoProcess()
	{
		$this->free_slots(TRUE);
		$this->timeout_slots(TRUE);
		$this->idle_slots(TRUE);
		$this->idle_queue(TRUE);

		$response['status'] = 'OK';
		echo json_encode($response);
	}

	var $play_timeout  = 300;
	var $play_idleout  = 60;
	var $queue_idleout = 60;

	function check_inPQueue()
	{
		if($this->counterParam[WAIT] < $this->systemParam['MAX_QUEUE_SIZE']) {
			$limit = $this->systemParam['MAX_QUEUE_SIZE'] - $this->counterParam[WAIT] ;
			$players = $this->db->from('session')->limit($limit)->where('inPQueue = 0 AND isPremium = 0')->get()->result_array();

			//echo $this->printpre($players);

			foreach($players as $row) {
				$this->db->where('playerID', $row['playerID'])->update('session', array('inPQueue'=>1));
			}
		}
	}

	function free_slots($process=TRUE)
	{
		if($this->counterParam['WAIT'] > 0)
		{ 
			$freeSlots = $this->server_slot_model->get_free_slots();  
			$noFreeSlots = count($freeSlots);
			if($noFreeSlots > 0)
			{
				$limit = ($this->counterParam[WAIT] <= $noFreeSlots) ? $this->counterParam[WAIT] : $noFreeSlots;
				$players = $this->session_model->get_players_waiting($limit);
				$this->check_inPQueue();

				echo $this->printpre($freeSlots);
				echo $this->printpre($players);

				for($i=0; $i<$limit; $i++)
				{
					$serverID = $freeSlots[$i]['serverID'];
					$slotNo = $freeSlots[$i]['slotNo'];
					$SID = $players[$i]['SID'];
					$playerID = $players[$i]['playerID'];

					//+++++++++
					$this-> server_slot_model->add_player($serverID, $slotNo, $playerID);
					$this-> session_model->updateStatus(PLAY, $playerID);
					$this-> counter_param_model->decrease(WAIT); 
					$this-> counter_param_model->increase(PLAY); 
					$this-> session_status_log_model->insert(array('SID'=>$SID, 'status'=>PLAY, 'datetime' => date('Y-m-d H:i:s')));
				}
			}
		}

		if($process!=FALSE)
		{
			redirect('backend');
		}
	}

	function timeout_slots($process=TRUE)
	{
		$players = $this->session_model->get_players_play_timeout($this->play_timeout); 
		
		if($process==FALSE)
		{
			echo $this->printpre($players);
		}
		else foreach($players as $player)
		{
			if($player['status'] == "PLAY_TIME_OUT") {
				$this->session_model->delete($player['SID']);
				$this->server_slot_model->remove_player($player['playerID']);
				$this->session_status_log_model->insert(array('SID'=>$player['SID'], 'status'=>PLAY_TIME_OUT, 'datetime' => date('Y-m-d H:i:s')));
			}
			else {
				$this-> session_model->updateStatus(PLAY_TIME_OUT, $player['playerID']);
			}
			// $this->session_model->delete($player['SID']);
			// $this->counter_param_model->decrease(PLAY);
			// $this->server_slot_model->remove_player($player['playerID']);
			// $this->session_status_log_model->insert(array('SID'=>$player['SID'], 'status'=>PLAY_TIME_OUT, 'datetime' => date('Y-m-d H:i:s')));
			
		}
		if($process!=FALSE)
		{
			redirect('backend');
		}
	}

	function idle_slots($process=TRUE)
	{
		$players = $this-> session_model->get_players_play_idleout($this->play_idleout); 

		if($process==FALSE)
		{
			echo $this->printpre($players);
		}
		else foreach($players as $player)
		{
			$this-> session_model->delete($player['SID']);
			// $this->counter_param_model->decrease(PLAY);
			$this-> server_slot_model->remove_player($player['playerID']);
			$this-> session_status_log_model->insert(array('SID'=>$player['SID'], 'status'=>PLAY_IDLE_OUT, 'datetime' => date('Y-m-d H:i:s')));
			
		}
		if($process!=FALSE)
		{
			redirect('backend');
		}
	}

	function idle_queue($process=TRUE)
	{
		$players = $this->session_model->get_players_queue_idleout($this->queue_idleout); 

		print_r($players);

		if($process==FALSE)
		{
			echo $this->printpre($players);
		}
		else foreach($players as $player)
		{
			$this-> session_model->delete($player['SID']);
			// $this-> server_slot_model->remove_player($player['playerID']);
			$this-> session_status_log_model->insert(array('SID'=>$player['SID'], 'status'=>QUEUE_IDLE_OUT, 'datetime' => date('Y-m-d H:i:s')));

			if($player['inPQueue']) {
				$this-> counter_param_model->decrease(WAIT); 
			}
		}
		if($process!=FALSE)
		{
			redirect('backend');
		}
	}

}