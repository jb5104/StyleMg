<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Account extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->helper('html');
		$this->load->helper ( 'form' );
		$this->load->helper('url');
	}
	public function index() {
		$this->login();		
	}
	public function login() {
		$this->load->view ( 'Shared/layout_v' );
		$this->load->view ( 'Account/login_v' );
	}
	public function _login() {
		//echo '_login';
		log_message('debug','_login() start');
		$rst_login = 0;
		
		//login validation
		
		if($rst_login = 1)
		{
			//Login success
			log_message('debug','_login() login s');
			//redirect();	
		}
		else
		{
			//Login failed
			log_message('debug','_login() login f');
			//echo "<script>alert('$error');history.back();</script>";
			//exit;
			//$this->load->view ( 'Account/login', $rst_login);
		}
	}
	public function Register() {
		$this->load->view ( 'Shared/layout_v' );
		$this->load->view ( 'Account/register_v' );
	}
	public function _Register() {
		
	}
	
}

/* End of file login.php */
/* Location: ./application/controllers/account.php */