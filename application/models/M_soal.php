<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class M_soal extends CI_Model {
	
		function list_soal(){
			$this->db->select('level.nama_level,soal.id_soal,soal.pertanyaan,soal.kunci');
			$this->db->join('level','level.id_level=soal.id_level');
			return $this->db->get('soal');
		}

		function create_soal($pertanyaan,$table){
			$this->db->insert($table,$pertanyaan);
			$id = $this->db->insert_id();
			return (isset($id)) ? $id : FALSE;
		}

		function create_jawaban($jawaban,$table){
			$this->db->insert($table,$jawaban);
		}

		function get_soal($where,$table){
			$this->db->where($where);
			return $this->db->get($table);
		}

		function get_jawaban($where,$table){
			$this->db->where($where);
			return $this->db->get($table);
		}

		function replace_soal($where,$pertanyaan,$table){
			$this->db->where($where);
			$this->db->update($table,$pertanyaan);
		}

		function replace_jawaban($where,$jawaban,$table){
			$this->db->where($where);
			$this->db->update($table,$jawaban);
		}

		function trash_soal($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

		function trash_jawaban($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}
	
	}
	
	/* End of file M_soal.php */
	/* Location: ./application/models/M_soal.php */
?>