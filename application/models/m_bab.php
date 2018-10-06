<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bab extends CI_Model {

	private $primary_key='id_bab';
	private $table_name='bab';

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getAll(){
		return $this->db->query('select * from bab');
	}
	public function getById($id){
		return $this->db->get_where('bab',
                          array('id_bab'=>$id
                          		))->row();
	}
	public function insert($data){
			$data['id_bab']='';
			$data['bab']=$this->input->post('bab');
			$this->db->insert('bab', $data);
			return true;

	}
	public function update($id){
			$data['bab']=$this->input->post('bab');
		$this->db->where('id_bab',$id);
		$this->db->update('bab', $data);
	}
	public function delete($id){
			$data['id']=$this->input->post('id_bab');
		$this->db->where($this->primary_key, $id);
		$this->db->delete($this->table_name);
	}	

}

/* End of file m_bab.php */
/* Location: ./application/models/m_bab.php */