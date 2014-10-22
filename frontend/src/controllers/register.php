<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->checkLoginSession();

        include('securimage/securimage.php');
        $this->smarty->assign('securimage_show_file_path' , site_url('securimage/securimage_show.php'));
    }
    
    #######################################################################
    
    public function index()
    {
    	$this->form_validation->set_rules(array(
            array(
                'field' => 'playerName',
                'label' => 'Player Name',
                'rules' => 'trim|required|min_length[3]|callback_checkPlayerName'
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required|min_length[4]|matches[confirmPassword]'
            ),
            array(
                'field' => 'confirmPassword',
                'label' => 'Confirm Password',
                'rules' => 'required'
            ),
            array(
                'field' => 'captcha_code',
                'label' => 'code',
                'rules' => 'required|callback_check_captcha_code'
            )
        ));

        
        
        if ($this->form_validation->run() != FALSE) 
        {
            $player = array(
                'playerName' => $this->sanitizePlayerName($this->input->post('playerName')),
                'password' => $this->input->post('password'),
                'email' => $this->input->post('email')
            );
            $playerID = $this->player_model->insert($player);
            // $playerID = 9999;

            $playerinfo = array_merge($this->getWebSessionInfo(),array(
            	'playerID' => $playerID ,
                'createDate' => date('Y-m-d H:i:s')
            ));
            $this->playerinfo_model->insert($playerinfo);

            $this->setLoginSessionData(array(
            	'playerID' => $playerID ,
            	'playerName' => $player['playerName']
            ));
            redirect('join');
        }
        
        $this->smarty->view('register/register_v2', $this->tplData);
    }
    
    #######################################################################


    public function check_captcha_code($str) 
    {
        $secureimage = new Securimage();

        if ($secureimage->check($str) == false) {
            $this->form_validation->set_message(__FUNCTION__, 'code is wrong');
            return FALSE;
        } else {
            return TRUE;
        }
    }
    
    public function checkPlayerName($str)
    {
        $str = $this->sanitizePlayerName($str);
        
        if ($this->player_model->playerNameExist($str)) {
            $this->form_validation->set_message(__FUNCTION__, 'This Player Name is already registered');
            return FALSE;
        } else {
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