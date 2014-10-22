<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller 
{
    var $dbLoginData = FALSE;

	function __construct()
	{
		parent::__construct();
		$this->checkLoginSession();

	}

    public function login_form()
    {
        $this->smarty->view("login/login_form");
    }

	public function index()
    {
        $error = true ;
        $errorMsg = "Username or password is wrong";

        $this-> form_validation->set_rules(array(
            array(
                'field' => 'playerName',
                'label' => 'Player Name',
                'rules' => 'trim|required|min_length[3]'
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required|min_length[4]|callback_authPlayerLogin'
            )
        ));

        if($this-> form_validation-> run() !== FALSE)
        {
            $error = FALSE;
            
            $this->session->set_userdata(array(
                'logged_in' => TRUE,
                'playerID' => $this->dbLoginData['playerID'],
                'playerName' => $this->dbLoginData['playerName'],
                'isPremium' => $this->dbLoginData['isPremium']
            ));

            redirect('join');
        }

        $this->smarty->view('login/login_v2' , array('login' => $this->dbLoginData) );
    }



	#######################################################################
    
    public function authPlayerLogin($str)
    {
        $password = $this->input->post('password');
        $playerName = $this->sanitizePlayerName($this->input->post('playerName'));

        $this->dbLoginData = $this->player_model->getLoginData($playerName);

        if(count($this->dbLoginData) == 0 OR $this->dbLoginData['password'] != $password) {
            $this->form_validation->set_message(__FUNCTION__, 'Username or Password is incorrect');
            return FALSE;
        }
        else {
            return TRUE;
        }
        
    }

    #######################################################################
    
    function sanitizePlayerName($str)
    {
        return $this->sanitize->set($str)->remove_multispaces()->trim()->get();
    }

    #######################################################################
}