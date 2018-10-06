<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		   $this->load->model('m_mahasiswa');
		   if($this->session->userdata['username']<>'admin'){
			redirect('login');
		}
	}
	 function tambahdata(){
 
        if($this->input->post('submit')){
        	
            $this->m_mahasiswa->insert();
            redirect('mahasiswa/index');
            
        }else{
        	$data['nim']='';
			$data['nama']='';
			$data['jenis_kelamin']='';
			$data['alamat']='';
			$data['nohp']='';
        	$this->load->view('v_mahasiswaadd',$data);
        }
        
      
    }

	public function index()
	{
		//Function yang digunakan untuk menampilkan view 
		$data['mahasiswa'] = $this->m_mahasiswa->getAll(); 
		$this->load->view('menu/header');
		$this->load->view('admin/v_mahasiswa', $data); //menampilkan view 
		$this->load->view('menu/footer');
	}

	public function vmahasiswa(){
		$this->load->view('v_mahasiswaadd');
	}
	public function edit($id){
		if($this->input->post('submit')){
            $this->m_mahasiswa->update($id);
            redirect('mahasiswa/index');
        }else{
        	$data=$this->m_mahasiswa->getById($id);

        	$this->load->view('v_mahasiswaadd',$data);
        }
	}
	public function delete($id){
		$this->m_mahasiswa->delete($id);
            redirect('mahasiswa/index');
	}


}

/* End of file mahasiswa.php */
/* Location: ./application/controllers/mahasiswa.php */