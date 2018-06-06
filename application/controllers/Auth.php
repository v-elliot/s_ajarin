<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Auth extends CI_Controller {
    
        function login(){
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $where = array(
                'username' => $username,
                'password' => md5($password),
            );

            $cek = $this->m_auth->cek_login($where,'user');
            if($cek->num_rows() > 0){
                $row = $cek->row();
                $session = array(
                    'logged_in' => TRUE,
                    'id' => $row->id_user,
                    'nama_user' => $row->nama_user,
                    'jk' => $row->jk,
                    'tgl_lahir' => $row->tgl_lahir,
                    'no_user' => $row->no_user,
                    'asal' => $row->nama_kabupaten,
                    'username' => $username,
                    'password' => md5($password),
                    'email' => $row->email,
                    'path' => $row->path,
                    'bio' => $row->bio,
                    'level' => $row->nama_level,
                    'status' => $row->status_user,
                    'gabung' => $row->tgl_join,
                    'hak_akses' => $row->hak_akses,
                );
                $this->session->set_userdata($session);
                redirect('dashboard');
            }
            else{
                var_dump($where);
            }
        }

        function logout(){
            $this->session->sess_destroy();
            redirect('login');
        }

        function register(){
            $nama = $this->input->post('nama');
            $jk = $this->input->post('jk');
            $tgl = $this->input->post('tanggal');
            $nomer = $this->input->post('nomer');
            $asal = $this->input->post('kabupaten');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $data = array(
                'nama_user' => $nama,
                'jk' => $jk,
                'tgl_lahir' => date("Y-MM-dd", strtotime($tgl)),
                'no_user' => $nomer,
                'id_kabupaten' => $asal,
                'username' => $username,
                'password' => md5($password),
                'email' => $email,
                'path' => "default.png",
                'bio' => "Hello saya sudah bergabung di AjarinCode",
                'id_level' => 1,
                'status_user' => "Aktif",
                'hak_akses' => "Peserta",
            );

            $this->m_auth->daftar($data,'user');
            redirect('login');
        }
    
    }
    
    /* End of file Auth.php */
    
?>