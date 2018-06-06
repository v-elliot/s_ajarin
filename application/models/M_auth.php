<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_auth extends CI_Model {
    
        function cek_login($where,$table){
            $this->db->select('user.id_user,user.nama_user,user.jk,user.tgl_lahir,user.no_user,kabupaten.nama_kabupaten,user.username,user.password,user.email,user.path,user.bio,level.nama_level,user.status_user,user.tgl_join,user.hak_akses');
            $this->db->join('kabupaten','kabupaten.id_kabupaten=user.id_kabupaten');
            $this->db->join('level','level.id_level=user.id_level');
            $this->db->where($where);
            return $this->db->get($table);
        }   

        function get_subkategori($id){
            $hasil=$this->db->query("SELECT * FROM kabupaten WHERE id_provinsi='$id'");
            return $hasil->result();
        } 

        function daftar($data,$table){
            $this->db->insert($table,$data);
        }
    
    }
    
    /* End of file M_auth.php */
    
?>