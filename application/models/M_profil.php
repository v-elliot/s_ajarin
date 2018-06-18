<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class M_profil extends CI_Model {
	
		function replace_pict($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		function replace_data($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		function post_user(){
			return $this->db->get('timeline');
		}

		function create_post($data,$table){
			$this->db->insert($table,$data);
		}
	
	}
	
	/* End of file M_profil.php */
	/* Location: ./application/models/M_profil.php */
?>