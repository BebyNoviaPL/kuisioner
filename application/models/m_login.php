<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
	private $primary_key='id';
	private $table_name='mahasiswa';

	public function __construct()
	{
		parent::__construct();
	}

	public function checklogin($username,$password){
		 $this->db->select('*');
		   $this->db->from('mahasiswa');
		   $this->db->join('kuisioner','mahasiswa.id = kuisioner.id_mahasiswa','LEFT');
		   $this->db->where('username', $username);
		   $this->db->where('password', $password);
		   $this->db->limit(1);
		   $query = $this->db->get();
		   if($query->num_rows() == 1)
		   {
		     return $query->result();
		   }
		   else
		   {
		     return false;
		   }
	}
}

/* End of file m_login.php */
/* Location: ./application/models/m_login.php */