<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Playws extends MY_Controller 
{
	function __construct()
	{
		parent::__construct();
	}

#####################################################################

	function index()
	{
		$serverData = $this-> server_slot_model->get_alloted_server($this->session->userdata('playerID'));
		$urlSendKey = "http://" . $serverData['ajaxIP'] . "/" .  $serverData['ajaxPHPFile'] . "?sid=" .  $serverData['serverID'] ;
		$player = $this->player_model->get('playerID' , $this->session->userdata('playerID'));

		// print_r($serverData);
		$this->checkLoginSession();
		$this->_checkStatus();

		$this->smarty->assign('serverData',$serverData);
		$this->smarty->assign("urlSendKey", $urlSendKey);
		$this->smarty->assign('playerName',$player['playerName']);

		
		$this->smarty->view('playws/'.$serverData['htmlFile']);
	}

#####################################################################
#####################################################################

	function _checkStatus()
	{
		$player = $this->session_model->get('playerID' , $this->session->userdata('playerID'));

		if(count($player) == 0) {
			redirect('join');
		} 

		switch ($player['status']) {
			case WAIT :
				redirect('wait');
				break;
			case PLAY_TIME_OUT :
				redirect('logout');
				break;
		}
	}

#####################################################################

	function ajx_checkStatus()
	{
		$playerID = $this-> session->userdata('playerID');
		$SID = $this-> session->userdata('SID');

		$this-> session_model->updateTimestamp('SID', $SID);
		$status = $this-> session_model->getStatus('SID', $SID);

		echo json_encode(array(
			// 'playerID' => $playerID,
			'status' => $status
		));
	}

#####################################################################
#####################################################################
}