<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller 
{
	public function index()
	{
		$this->smarty->view("home/home_v2");
	}

	public function home2()
	{
		$this->smarty->view("home/home_v2");
	}
}