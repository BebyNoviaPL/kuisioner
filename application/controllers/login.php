<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		$this->load->model('kuisioner');
		$this->load->model('m_mahasiswa');
	}

	public function index()
	{
		$this->load->view('login');
	}
	public function cek_login()
	{
		
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$check2=$this->kuisioner->getAll();
		$check3=$this->m_mahasiswa->getAll();
		$result = $this->m_login->checklogin($username,$password);
		if($username=='admin'){
			if($password=='adminbem123'){
			$sess_array = array(
					         'id' => 0,
					         'username' => 'admin'
					        );
				       $this->session->set_userdata($sess_array);
				       redirect('menu/index');
			}else{
				redirect('login');
			}
		}else{


		   if($result)
		   {
		     $sess_array = array();
		     foreach($result as $row)
		     {
		     	if($row->id_mahasiswa==""){
		     		$sess_array = array(
					         'id' => $row->id,
					         'username' => $row->username
					        );
				        $this->session->set_userdata($sess_array);
		     		redirect('menu/index');
		     	}else{
		     		redirect('login/index');
		     	}
		     }
		   }
		   else
		   {
		     redirect('login/index');
		   }
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('login/index');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */