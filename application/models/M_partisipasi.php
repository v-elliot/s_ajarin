<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class M_partisipasi extends CI_Model {
	
		function list_partisipasi(){
			$this->db->select('user.username,event.nama_event,participant.status_participant');
			$this->db->join('user','user.id_user=participant.id_user');
			$this->db->join('event','event.id_event=participant.id_event');
			return $this->db->get('participant');
		}
	
	}
	
	/* End of file M_partisipasi.php */
	/* Location: ./application/models/M_partisipasi.php */
?>