<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Model {
	private $primary_key='id';
	private $table_name='mahasiswa';

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getAll(){
		return $this->db->query('select * from mahasiswa left JOIN kuisioner ON mahasiswa.id=kuisioner.id_mahasiswa');
	}
	public function getById($id){
		return $this->db->get_where('mahasiswa',
                          array('id'=>$id
                          		))->row();
	}
	public function insert($data){
			$data['id']='';
			$data['username']=$this->input->post('username');
			$data['password']=$this->input->post('password');
			$data['jurusan']=$this->input->post('jurusan');
			$this->db->insert('mahasiswa', $data);
			return true;

	}
	public function update($id){
			$data['username']=$this->input->post('username');
			$data['password']=$this->input->post('password');
			$data['jurusan']=$this->input->post('jurusan');
		$this->db->where('id',$id);
		$this->db->update('mahasiswa', $data);
	}
	public function delete($id){
			$data['id']=$this->input->post('id');
		$this->db->where($this->primary_key, $id);
		$this->db->delete($this->table_name);
	}

	

}

/* End of file m_mahasiswa.php */
/* Location: ./application/models/m_mahasiswa.php */