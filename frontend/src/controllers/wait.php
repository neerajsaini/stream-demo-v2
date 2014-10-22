<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wait extends MY_Controller 
{
	function __construct()
    {
        parent::__construct();
        $this->setCounterParam();
        $this->smarty->assign('counterParam', $this->counterParam);
    }

	public function index()
	{
        $this->checkLoginSession();
        $this->_checkStatus();

		$this->smarty->view('wait/wait_v2' , $this->data);
	}

	//#####################################################################
	//#####################################################################

	function get_queue_index_data($player)
	{
		$qpos = FALSE;

		if($player['inPQueue']) 
		{
			$qpos = $this->db->from('session')->select('COUNT(SID) AS qpos')
				->where('SID <=', (int)$player['SID'])
				->where('inPQueue', TRUE)
				->where('status', WAIT)
				->get()->row_array();
		}
		else if($player['isPremium']) 
		{
			$qpos = $this->db->from('session')->select('COUNT(SID) AS qpos')
				->where('SID <=', (int)$player['SID'])
				->where('isPremium', TRUE)
				->where('status', WAIT)
				->get()->row_array();
		}

		return $qpos;
	}

    function _checkStatus()
	{
		$player = $this-> session_model->get('playerID' , $this->session->userdata('playerID'));
		$this->data['player'] = $player;

		if(count($player) == 0) {
			redirect('join');
		} 
		else if ($player['status'] == 'PLAY') {
			redirect('playws');
		}
		else {
			$qIndex = $this->get_queue_index_data($player);
			$this->data['qIndex'] = $qIndex;
		}
	}

	function ajx_checkStatus()
	{
		$this-> session_model->updateTimestamp('SID', $this-> session->userdata('SID'));
		$player = $this-> session_model->get('playerID' , $this->session->userdata('playerID'));
		$qIndex = $this->get_queue_index_data($player);

		echo json_encode(array(
			"status" => $player['status'],
			"inPQueue" => (int)$player['inPQueue'],
			"isPremium" => (int)$player['isPremium'],
			"qpos" => (int)$qIndex['qpos']
		));
	}

	//#####################################################################
	//#####################################################################
}