<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_subbab extends CI_Model {

	
	private $primary_key='id_subbab';
	private $table_name='subbab';

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getAll(){
		return $this->db->query('select * from subbab');
	}
	public function getById($id){
		return $this->db->query("select * from subbab where id_bab=".$id);
	}
	public function insert($data){
			$data['id_subbab']='';
			$data['id_bab']=$this->input->post('id_bab');
			$data['sub_bab']=$this->input->post('sub_bab');
			$this->db->insert('subbab', $data);
			return true;

	}
	public function update($id){
			$data['id_bab']=$this->input->post('id_bab');
			$data['sub_bab']=$this->input->post('sub_bab');
		$this->db->where('id_subbab',$id);
		$this->db->update('subbab', $data);
	}
	public function delete($id){
			$data['id']=$this->input->post('id_subbab');
		$this->db->where($this->primary_key, $id);
		$this->db->delete($this->table_name);
	}	

}

/* End of file m_subbab.php */
/* Location: ./application/models/m_subbab.php */