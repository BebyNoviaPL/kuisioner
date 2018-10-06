<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	public function __construct()
	{

		parent::__construct();
		$this->load->model('kuisioner');
		$this->load->model('m_bab');
		$this->load->model('m_subbab');
	}

	public function index()
	{
		$this->cekses();
		$data['bab']=$this->m_bab->getAll();	
		$data['subbab']=$this->m_subbab->getAll();
		$this->load->view('menu/header');
		$this->load->view('admin/v_kuisioner',$data);
		$this->load->view('menu/footer');
	}
	public function terima(){
		$this->load->view('menu/header');
		$this->load->view('terima');
		$this->load->view('menu/footer');	
	}
	public function chart(){
		if($this->session->userdata['username']<>'admin'){
			redirect('login');
		}
		for ($i=1; $i <=47 ; $i++) { 
			$data['satu'][$i]=0;
			$data['dua'][$i]=0;
			$data['tiga'][$i]=0;
			$data['empat'][$i]=0;
			$data['lima'][$i]=0;
		}

		$data['persubbab']=$this->m_subbab->getAll();
		$data['kuisioner']=$this->kuisioner->getAll();
		foreach ($data['kuisioner']->result() as $kuis) {
			$arr=explode(",",$kuis->isi);
			foreach ($data['persubbab']->result() as $subbab) {
				if($arr[$subbab->id_subbab]==1){
					$data['satu'][$subbab->id_subbab]+=1;
				}
				if($arr[$subbab->id_subbab]==2){
					$data['dua'][$subbab->id_subbab]+=1;
				}
				if($arr[$subbab->id_subbab]==3){
					$data['tiga'][$subbab->id_subbab]+=1;
				}
				if($arr[$subbab->id_subbab]==4){
					$data['empat'][$subbab->id_subbab]+=1;
				}
				if($arr[$subbab->id_subbab]==5){
					$data['lima'][$subbab->id_subbab]+=1;
				}
			}	
		}
		//var_dump($data['satu'][1]);
		
		
		// $ambil=$datakuisioner->result();
		// //var_dump($ambil[0]->isi);
		// $data['isi'] = explode(',', $ambil[0]->isi);
		$this->load->view('menu/header');
		$this->load->view('chart',$data);
		$this->load->view('menu/footer');
		$this->load->view('menu/footerjs', $data);

	}
	public function save()
	{
		
		
		$isi='';
		$saran='';
		$data = $this->input->post();
		// foreach ($data as $data1) {
		// 	$isi=$isi.",".$data1['r'.$a];
		// 	$a++;
		// }
		var_dump($data);
		for ($a=1; $a < count($data)+1; $a++) { 
			$isi=$isi.",".$data['r'.$a];
			if($a<=3){
				$saran=$saran.",".$data['s'.$a];
			}
		}
		$data= $isi;
		
		$this->kuisioner->insert($data,$saran);
		redirect('menu/terima');
	}

	public function cekses(){
		//var_dump($this->session->userdata('username'));
		if($this->session->userdata('username')=="")
		{
			redirect('login/index');
		}
	}



}

/* End of file menu.php */
/* Location: ./application/controllers/menu.php */