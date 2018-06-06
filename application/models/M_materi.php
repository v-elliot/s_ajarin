<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class M_materi extends CI_Model {
	
		function list_materi(){
			$this->db->select('materi.id_materi,level.nama_level,kategori.nama_kategori,materi.judul_materi,materi.link_video,materi.file_lampiran');
			$this->db->join('level','level.id_level=materi.id_level');
			$this->db->join('kategori','kategori.id_kategori=materi.id_kategori');
			return $this->db->get('materi');
		}

		function create($data,$table){
			$this->db->insert($table,$data);
		}

		function get($where,$table){
			$this->db->where($where);
			return $this->db->get($table);
		}
	
	}
	
	/* End of file M_materi.php */
	/* Location: ./application/models/M_materi.php */
?>