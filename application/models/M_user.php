<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class M_user extends CI_Model {
	
		function jumlah_user(){
			$this->db->like('hak_akses','Peserta');
			return $this->db->get('user')->num_rows();
		}

		public function data_peserta($number,$offset){
			$this->db->select('user.id_user,user.username,user.email,user.jk,level.nama_level,kabupaten.nama_kabupaten');
			$this->db->join('level','level.id_level=user.id_level');
			$this->db->join('kabupaten','kabupaten.id_kabupaten=user.id_kabupaten');
			$this->db->like('hak_akses','Peserta');
            return $this->db->get('user',$number,$offset);
        }
	
	}
	
	/* End of file M_user.php */
	/* Location: ./application/models/M_user.php */
?>