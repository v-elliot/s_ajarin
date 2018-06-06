<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_provinsi extends CI_Model {

        public function jumlah_provinsi(){
            return $this->db->get('provinsi')->num_rows();
        }

        public function data($number,$offset){
            return $this->db->get('provinsi',$number,$offset);
        }
    
        function list_provinsi(){
            return $this->db->get('provinsi');
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
    
    }
    
    /* End of file M_provinsi.php */
    
?>