<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Dashboard extends CI_Controller {
    
        public function index()
        {
           $this->load->view('dashboard/sidebar');
           $this->load->view('dashboard/index');
           $this->load->view('dashboard/footer'); 
        }

        function profil(){
          $data = array(
            'provinsi' => $this->m_provinsi->list_provinsi()->result(),
          );
          $this->load->view('dashboard/sidebar');
          $this->load->view('dashboard/profil',$data);
          $this->load->view('dashboard/footer');
        }
    
    }
    
    /* End of file Dashboard.php */
    
?>