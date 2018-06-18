<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class M_lini_masa extends CI_Model {
	
		function show_lini(){
			$this->db->select('user.username,user.path,timeline.isi_timeline,timeline.tgl_timeline');
			$this->db->join('user','user.id_user=timeline.id_user');
			return $this->db->get('timeline');
		}
	
	}
	
	/* End of file M_lini_masa.php */
	/* Location: ./application/models/M_lini_masa.php */
?>