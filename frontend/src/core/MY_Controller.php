<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{
	var $data ;
	var $tplData ;
	var $systemParam ;
	var $counterParam ;
	
	function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(FALSE);
		
		$this->db = $this->load->database('default' , TRUE);

		$this->load->model(array(
			'my_model', 
			'system_param_model', 'counter_param_model', 
			'player_model', 'playerinfo_model',
			'session_model', 'session_log_model', 'session_status_log_model',
			'server_slot_model'
		));
        $this->load->library(array(
        	'form_validation',
        	'sanitize',
        	'webclient',
        	'browser'
        ));
        $this->load->helper(array(
        	'form'
        ));

        // echo $_SERVER['HTTP_HOST'];
        // $result = $this->db->from('server')->get()->result_array();
        // echo "<pre>".print_r($result)."</pre>";
	}

	#######################################################################

	function setSystemParam()
	{
		$this->systemParam = $this->system_param_model->dropdown('key','val');
		// ChromePhp::log($this->systemParam);
	}
	function setCounterParam()
	{
		$this->counterParam = $this->counter_param_model->dropdown('key','val');
		// ChromePhp::log($this->counterParam);
	}

	#######################################################################

	function checkLoginSession()
	{
		$loggedIn = ($this->session->userdata('logged_in') != FALSE AND $this->session->userdata('playerID') != FALSE) ? TRUE : FALSE ;

		// ChromePhp::log(' ******************************************* ');
		// ChromePhp::log($validSession);
		// ChromePhp::log(' xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ');

		switch(strtolower(get_called_class()))
		{
			case 'join':
			case 'wait':
			case 'play':
			case 'logout':
				if(!$loggedIn) redirect('login');
			break;
			case 'login':
			case 'register':
				if($loggedIn) redirect('wait');
			break;
		}
	}

	#######################################################################

	function setLoginSessionData($data)
	{
		$this->session->set_userdata(array(
			'logged_in' => TRUE,
			'playerID' => $data['playerID'],
			'playerName' => $data['playerName']
		));
	}

	#######################################################################

	function getWebSessionInfo($third_party=TRUE)
	{
		$locationInfo = array();
        $basicInfo = array(
        	'IP'     => $this->webclient->getIP(),
	        'realIP' => $this->webclient->getRealIP(),
	        'browser' => $this->browser->getBrowser(),
	        'browserVer' => $this->browser->getVersion()
        );
        

        if($third_party == TRUE)
        {
        	$geoloc = $this->webclient->third_party();

        	if($geoloc !==FALSE) 
        	{
	        	if ($basicInfo['IP'] == FALSE) $basicInfo['IP'] = @$geoloc->ip;
	        	if ($basicInfo['realIP'] == FALSE) $basicInfo['realIP'] = @$geoloc->ip;

	        	$locationInfo = array(
	        		'countryName' => @$geoloc->country_name,
		            'countryCode' => @$geoloc->country_code,
		            'regionName' => @$geoloc->region_name,
		            'regionCode' => @$geoloc->region_code,
		            'city' => @$geoloc->city,
		            'lat' => @$geoloc->latitude,
		            'lng' => @$geoloc->longitude
	        	);
	        }
        }

        return array_merge($basicInfo, $locationInfo);
	}

	#######################################################################
	## SYNC FUNCTIONS
    #######################################################################



	#######################################################################
	## DEBUGING
    #######################################################################

	function printpre($arr)
	{
		return "<pre>" . print_r($arr,TRUE) . "</pre>" ;
	}

	#######################################################################
}