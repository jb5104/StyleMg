<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Main extends CI_Controller {
	public function index() {
		$this->load->view ( 'main' );
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */