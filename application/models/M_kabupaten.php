<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_kabupaten extends CI_Model {

        public function jumlah_kabupaten(){
            return $this->db->get('kabupaten')->num_rows();
        }

        public function data($number,$offset){
            return $this->db->get('kabupaten',$number,$offset);
        }
    
        function list_kabupaten(){
            return $this->db->get('kabupaten');
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
    
    /* End of file M_kabupaten.php */
    
?>