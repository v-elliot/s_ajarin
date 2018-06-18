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
            'posting' => $this->m_profil->post_user()->result(),
          );
          $this->load->view('dashboard/sidebar');
          $this->load->view('dashboard/profil',$data);
          $this->load->view('dashboard/footer');
        }

        function editor_front(){
          $this->load->view('dashboard/sidebar');
          $this->load->view('dashboard/front');
          $this->load->view('dashboard/footer');
        }

        function css_unifier(){
          $this->load->view('dashboard/css_unminifier');
        }

        function cheat(){
          $this->load->view('dashboard/cheat_sheets_emmet');
        }

        function materi(){
          $data['materi'] = $this->m_materi->list_materi()->result();
          $this->load->view('dashboard/sidebar');
          $this->load->view('dashboard/materi/index', $data);
          $this->load->view('dashboard/footer');
        }

        function lini_masa(){
          $data['posting'] = $this->m_lini_masa->show_lini()->result();
          $this->load->view('dashboard/sidebar');
          $this->load->view('dashboard/lini_masa', $data);
          $this->load->view('dashboard/footer');
        }
    
    }
    
    /* End of file Dashboard.php */
    
?>