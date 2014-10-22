<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Play extends MY_Controller 
{
	function __construct()
	{
		parent::__construct();

		
	}


	public function index()
	{
		$serverData = $this-> server_slot_model->get_alloted_server($this->session->userdata('playerID'));
		$urlSendKey = "http://" . $serverData['ajaxIP'] . "/" .  $serverData['ajaxPHPFile'] . "?sid=" .  $serverData['serverID'] ;
		$player = $this->player_model->get('playerID' , $this->session->userdata('playerID'));

		$this->checkLoginSession();
		$this->_checkStatus();

		$this->smarty->assign('playerName',$player['playerName']);
		$this->smarty->assign('serverData',$serverData);
		$this->smarty->assign("urlSendKey", $urlSendKey);
		$this->smarty->view('play/play');
	}

	//#####################################################################
	//#####################################################################

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

	//#####################################################################
	//#####################################################################

	function sendKey($keyCode)
	{
		$server_ip   = $this->serverData['serverIP'];
		$server_port = $this->serverData['serverPort'];
		$beat_period = 5;
		
		$message = $keyCode;
		$result = false;
		if ($socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP)) {
				socket_sendto($socket, $message, strlen($message), 0, $server_ip, $server_port);
				$result = true;
		} 
		else {
			$result = false;
		}
		return $result;
	}

	function block()
	{
		$block = (int)$_GET['block'];
		$str = $block == 1 ? 'blockInt' : 'unblockInt' ;
		$res = $this->sendKey($str);
	}

	function ajax()
	{
		if(isset($_GET['posx']) && isset($_GET['width'])&& isset($_GET['posy'])&& isset($_GET['height']) )
		{
			$str = "px";
			$str .= $_GET['posx'];
			$str .= "w";
			$str .= $_GET['width'];
			$str .= "y";
			$str .= $_GET['posy'];
			$str .= "h";
			$str .= $_GET['height'];
			$res = $this->sendKey($str);
			//echo json_encode("YESS");
		}

		if(isset($_GET['status']) && isset($_GET['key']) )
		{	
			$msg = $_GET['status'];
			$msg .= $_GET['key'];
			$res = $this->sendKey($msg);
			//echo json_encode("YESS");
		}

		if(isset($_GET['click']) && isset($_GET['posx']) && isset($_GET['width'])&& isset($_GET['posy'])&& isset($_GET['height']))
		{
			$str = $_GET['click'];
			$str .= "x";
			$str .= $_GET['posx'];
			$str .= "w";
			$str .= $_GET['width'];
			$str .= "y";
			$str .= $_GET['posy'];
			$str .= "h";
			$str .= $_GET['height'];
			$res = $this->sendKey($str);
			//echo json_encode("YESS");
		}

		if(isset($_GET['dx']) && isset($_GET['dy']) )
		{
			$str = "mx";
			$str .= $_GET['dx'];
			$str .= "y";
			$str .= $_GET['dy'];
			$res = $this->sendKey($str);
			//echo json_encode("YESS");
		}


		if(isset($_GET['clicks']))
		{
			$str = $_GET['clicks'];
			$res = $this->sendKey($str);
		}


		if(isset($_GET['scroll']) && isset($_GET['amount']) )
		{	
			$msg = $_GET['scroll'];
			$msg .= $_GET['amount'];
			$res = $this->sendKey($msg);
			//echo json_encode("YESS");
		}
	}
}