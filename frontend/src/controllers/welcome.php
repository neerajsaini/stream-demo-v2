<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller 
{
	public function index()
	{
		echo site_url('hallo');
		$this->load->view('welcome_message');
	}

	public function test_flowplayer()
	{
		$serverData['videoID'] = 'clipURL' ;
		$serverData['videoID'] = '1234';
		
		$serverData['videoServerIP'] = '109.230.230.10' ;
		$serverData['videoServerPort'] = '1935' ;
		$serverData['applicationID'] = 'playint' ;

		//-----------------------------------------------------
		$playerStyle['default'] = " 
			width:400px; height:400px; 
			margin:0 auto;
			overflow: hidden;
		";
		$playerStyle['fillWindow'] = " 
			position:absolute;  
			margin: 0;
			width:100%; height:100%; 
			left:0; right:0; bottom:0; top:0;
			overflow: hidden;
		";

		//-----------------------------------------------------

		$this->smarty->assign('serverData', $serverData);
		$this->smarty->assign('playerStyle', $playerStyle);
		$this->smarty->view('test/flowplayer');
	}
}