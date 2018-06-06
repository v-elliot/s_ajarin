<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Home extends CI_Controller {
    
        public function index()
        {
            $this->load->view('index');
        }

        function login(){
            $this->load->view('login');
        }

        function create_captcha(){
            $this->load->helper('captcha');
            $options = array(
                'img_path' => './captcha/',
                'img_url' => base_url('captcha'),
                'img_width' => 300,
                'img_height' => 60,
                'expiration' => 7200,
            );

            $cap = create_captcha($options);
            $image = $cap['image'];

            $this->session->set_userdata('captchaword',$cap['word']);

            return $image;
        }

        function register(){
            $data = array(
                'provinsi' => $this->m_provinsi->list_provinsi()->result(),
                'img' => $this->create_captcha(),
            );
            $this->load->view('register',$data);
        }

        function get_kabupaten(){
            $id = $this->input->post('id');
            $data = $this->m_auth->get_subkategori($id);
            echo json_encode($data);
        }
    
    }
    
    /* End of file Home.php */
    
?>