<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class M_level extends CI_Model {
	
		function list_level(){
			return $this->db->get('level');
		}

		function create($data,$table){
			$this->db->insert($table,$data);
		}

		function get($where,$table){
			$this->db->where($where);
			return $this->db->get($table);
		}

		function replace($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		function trash($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}
	
	}
	
	/* End of file M_level.php */
	/* Location: ./application/models/M_level.php */
?>