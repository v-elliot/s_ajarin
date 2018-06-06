<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class M_jenis extends CI_Model {
	
		function list_jenis(){
			return $this->db->get('jenis_event');
		}

		function create($data,$table){
			$this->db->insert($table,$data);
		}

		function get($where,$table){
			$this->db->where($where);
			return $this->db->get($table);
		}

		function repalce($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		function trash($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}
	}
	
	/* End of file M_jenis.php */
	/* Location: ./application/models/M_jenis.php */
?>