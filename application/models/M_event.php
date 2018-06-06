<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class M_event extends CI_Model {
	
		function list_event(){
			$this->db->select('event.id_event,jenis_event.nama_jenis,event.nama_event,event.tgl_mulai,event.tgl_akhir,event.deskripsi_event,event.harga_event,event.status_event');
			$this->db->join('jenis_event','jenis_event.id_jenis=event.id_jenis');
			return $this->db->get('event');
		}

		function create($data,$table){
			$this->db->insert($table,$data);
		}

		function get($where,$table){
			$this->db->where($where);
			return $this->db->get($table);
		}

		function update($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		function trash($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}
	
	}
	
	/* End of file M_event.php */
	/* Location: ./application/models/M_event.php */
?>