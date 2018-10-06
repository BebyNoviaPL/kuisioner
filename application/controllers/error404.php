<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller {

	public function index()
	{
		$this->load->view('extra_404');
	}

}

/* End of file file404.php */
/* Location: ./application/controllers/file404.php */