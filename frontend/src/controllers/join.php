<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Join extends MY_Controller 
{

	function __construct()
    {
        parent::__construct();
        $this->checkLoginSession();
        $this->setSystemParam();
        $this->setCounterParam();
        $this->_checkStatus();
    }

    function _checkStatus()
	{
		$player = $this-> session_model->get('playerID' , $this-> session->userdata('playerID'));

		// player is not yet added to the session table
		if(count($player) == 0) 
		{
			if($this-> session->userdata('isPremium'))
			{
				$this->_add_new_wait_session($inPQueue=false);
			}
			else if($this->counterParam[WAIT] < $this->systemParam['MAX_QUEUE_SIZE']) 
			{
				$this->_add_new_wait_session($inPQueue=true);
			}
			else 
			{
				$this->_add_new_wait_session($inPQueue=false);
			}
			
			redirect('wait');
		} 
		else if ($player['status'] == WAIT) {
			redirect('wait');
		} 
		else if ($player['status'] == PLAY) {
			redirect('playws');
		}
	}

	public function index()
	{
		$this-> smarty->view('join/join' , $this->data);
	}

	public function _add_new_wait_session($inPQueue)
	{
		$session_data = array(
			'playerID' => $this-> session->userdata('playerID'),
			'tokenTimestamp' =>  date('Y-m-d H:i:s'), 
			'status' => WAIT,
			'startTimestamp' => date('Y-m-d H:i:s'), 
			'updateTimestamp' => date('Y-m-d H:i:s'), 
			'isPremium' => $this-> session->userdata('isPremium'),
			'inPQueue' => $inPQueue
		);
		
		$session_log_data = array_merge($this->getWebSessionInfo(), array(
			'playerID' => $this-> session->userdata('playerID'),
		));
		
		$session_status_log_data = array(
			'datetime' => date('Y-m-d H:i:s'), 
			'status' => WAIT
		);
		
		$SID = $this-> session_model->insert($session_data);
		$this-> session->set_userdata('SID',$SID);
		$this-> session_log_model->insert(array_merge($session_log_data, array('SID'=>$SID)));
		$this-> session_status_log_model->insert(array_merge($session_status_log_data, array('SID'=>$SID)));

		$this-> counter_param_model->increase(WAIT);
		
		// ChromePhp::log($session_data);
		// ChromePhp::log($session_data);
		// ChromePhp::log($session_log_data);
		// ChromePhp::log($session_status_log_data);
	}
}