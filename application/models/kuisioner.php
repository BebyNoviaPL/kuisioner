<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuisioner extends CI_Model {

	private $primary_key='id_kuisioner';
	private $table_name='kuisioner';

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getAll(){
		return $this->db->get($this->table_name);
	}
	public function getById($id){
		return $this->db->get_where('kuisioner',
                          array('id_kuisioner'=>$id
                          		))->row();
	}
	public function insert($isi,$saran){
			$data['id_kuisioner']='';
			$data['id_mahasiswa']=$this->session->userdata['id'];
			$data['isi']=$isi;
			$data['saran']=$saran;
			$this->db->insert('kuisioner', $data);
			return true;

	}
	public function update($id){
			$data['id_mahasiswa']=$this->input->post('id_mahasiswa');
			$data['isi']=$this->input->post('isi');
			$data['saran']=$this->input->post('saran');
			$this->db->where('id_kuisioner',$id);
			$this->db->update('kuisioner', $data);
	}
	public function delete($id){
		$this->db->where($this->primary_key, $id);
		$this->db->delete($this->table_name);
	}		

}

/* End of file kuisioner.php */
/* Location: ./application/models/kuisioner.php */