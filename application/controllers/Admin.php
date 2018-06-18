<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Admin extends CI_Controller {
    
        function provinsi(){
            // $this->load->library('pagination');
            // $jumlah_data = $this->m_provinsi->jumlah_provinsi();
            // $config['base_url'] = base_url('admin/provinsi/');
            // $config['total_rows'] = $jumlah_data;
            // $config['per_page'] = 10;
            // $config['first_link'] = 'First';
            // $config['last_link'] = 'Last';
            // $config['next_link'] = 'Next';
            // $config['prev_link'] = 'Prev';
            // $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            // $config['full_tag_close']   = '</ul></nav></div>';
            // $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            // $config['num_tag_close']    = '</span></li>';
            // $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            // $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            // $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            // $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            // $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            // $config['prev_tagl_close']  = '</span>Next</li>';
            // $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            // $config['first_tagl_close'] = '</span></li>';
            // $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            // $config['last_tagl_close']  = '</span></li>';
            
            // $from = $this->uri->segment(3);
            // $this->pagination->initialize($config);
            // $data['provinsi'] = $this->m_provinsi->data($config['per_page'],$from)->result();
            $data['provinsi'] = $this->m_provinsi->list_provinsi()->result();
            $this->load->view('dashboard/sidebar');
            $this->load->view('dashboard/master/provinsi/index', $data);
            $this->load->view('dashboard/footer');
        }

        function kabupaten(){
            $this->load->library('pagination');
            $jumlah_data = $this->m_kabupaten->jumlah_kabupaten();
            $config['base_url'] = base_url('admin/kabupaten/');
            $config['total_rows'] = $jumlah_data;
            $config['per_page'] = 10;
            $config['first_link'] = 'First';
            $config['last_link'] = 'Last';
            $config['next_link'] = 'Next';
            $config['prev_link'] = 'Prev';
            $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';
            
            $from = $this->uri->segment(3);
            $this->pagination->initialize($config);
            $data = array(
                'kabupaten' => $this->m_kabupaten->data($config['per_page'],$from)->result(),
                'provinsi' => $this->m_provinsi->list_provinsi()->result(),
            );
            $this->load->view('dashboard/sidebar');
            $this->load->view('dashboard/master/kabupaten/index', $data);
            $this->load->view('dashboard/footer');
        }

        function level(){
            $data['level'] = $this->m_level->list_level()->result();
            $this->load->view('dashboard/sidebar');
            $this->load->view('dashboard/master/level/index',$data);
            $this->load->view('dashboard/footer');
        }

        function kategori(){
            $data['kategori'] = $this->m_kategori->list_kategori()->result();
            $this->load->view('dashboard/sidebar');
            $this->load->view('dashboard/master/kategori/index',$data);
            $this->load->view('dashboard/footer');
        }

        function jenis_event(){
            $data['jenis'] = $this->m_jenis->list_jenis()->result();
            $this->load->view('dashboard/sidebar');
            $this->load->view('dashboard/event/master/jenis/index',$data);
            $this->load->view('dashboard/footer');
        }

        function kelola_event(){
            $data = array(
                'event' => $this->m_event->list_event()->result(),
                'jenis' => $this->m_jenis->list_jenis()->result(),
                'level' => $this->m_level->list_level()->result(),
            );
            $this->load->view('dashboard/sidebar');
            $this->load->view('dashboard/event/index',$data);
            $this->load->view('dashboard/footer');
        }

        function partisipasi(){
            $data['partisipasi'] = $this->m_partisipasi->list_partisipasi()->result();
            $this->load->view('dashboard/sidebar');
            $this->load->view('dashboard/event/partisipasi/index',$data);
            $this->load->view('dashboard/footer'); 
        }

        function materi(){
            $data = array(
                'materi' => $this->m_materi->list_materi()->result(),
                'level' => $this->m_level->list_level()->result(),
                'kategori' => $this->m_kategori->list_kategori()->result(),
            );
            $this->load->view('dashboard/sidebar');
            $this->load->view('dashboard/materi/kelola_materi/index',$data);
            $this->load->view('dashboard/footer');
        }

        function soal(){
            $data = array(
                'soal' => $this->m_soal->list_soal()->result(),
                'level' =>$this->m_level->list_level()->result(),
            );
            $this->load->view('dashboard/sidebar');
            $this->load->view('dashboard/quis/soal/index',$data);
            $this->load->view('dashboard/footer');
        }

        function peserta(){
            $this->load->library('pagination');
            $jumlah_data = $this->m_user->jumlah_user();
            $config['base_url'] = base_url('admin/user/');
            $config['total_rows'] = $jumlah_data;
            $config['per_page'] = 10;
            $config['first_link'] = 'First';
            $config['last_link'] = 'Last';
            $config['next_link'] = 'Next';
            $config['prev_link'] = 'Prev';
            $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';
            
            $from = $this->uri->segment(3);
            $this->pagination->initialize($config);
            $data = array(
                'user' => $this->m_user->data_peserta($config['per_page'],$from)->result(),
            );
            $this->load->view('dashboard/sidebar');
            $this->load->view('dashboard/user/peserta/index', $data);
            $this->load->view('dashboard/footer');
        }

        function mentor(){
            $this->load->library('pagination');
            $jumlah_data = $this->m_user->jumlah_mentor();
            $config['base_url'] = base_url('admin/mentor/');
            $config['total_rows'] = $jumlah_data;
            $config['per_page'] = 10;
            $config['first_link'] = 'First';
            $config['last_link'] = 'Last';
            $config['next_link'] = 'Next';
            $config['prev_link'] = 'Prev';
            $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';
            
            $from = $this->uri->segment(3);
            $this->pagination->initialize($config);
            $data = array(
                'user' => $this->m_user->data_mentor($config['per_page'],$from)->result(),
                'provinsi' => $this->m_provinsi->list_provinsi()->result(),
            );
            $this->load->view('dashboard/sidebar');
            $this->load->view('dashboard/user/mentor/index', $data);
            $this->load->view('dashboard/footer');
        }

        function laporan(){
            $this->load->view('dashboard/sidebar');
            $this->load->view('dashboard/laporan');
            $this->load->view('dashboard/footer');
        }
    
    }
    
    /* End of file Admin.php */
    
?>