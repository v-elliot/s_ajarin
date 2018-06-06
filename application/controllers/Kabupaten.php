<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Kabupaten extends CI_Controller {
    
        function tambah(){
        	$provinsi = $this->input->post('provinsi');
        	$kabupaten = $this->input->post('kabupaten');

        	$data = array(
        		'id_provinsi' => $provinsi,
        		'nama_kabupaten' => $kabupaten,
        	);

            $save = $this->m_kabupaten->create($data,'kabupaten');

            if($save){
                $this->session->set_flashdata('sukses','Data Berhasil Disimpan');
                redirect('admin/kabupaten');
            }
            else{
                $this->session->set_flashdata('gagal','Data Gagal Disimpan');
                redirect('admin/kabupaten');
            }
        }

        function edit($id){
        	$where = array('id_kabupaten' => $id);
        	$data = array(
        		'kabupaten' => $this->m_kabupaten->get($where,'kabupaten')->result(),
        		'provinsi' => $this->m_provinsi->list_provinsi()->result(),
        	);
        	$this->load->view('dashboard/sidebar');
        	$this->load->view('dashboard/master/kabupaten/edit',$data);
        	$this->load->view('dashboard/footer');
        }

        function update(){
        	$id = $this->input->post('id');
        	$provinsi = $this->input->post('provinsi');
        	$kabupaten = $this->input->post('kabupaten');

        	$where = array('id_kabupaten' => $id);
        	$data = array(
        		'id_provinsi' => $provinsi,
        		'nama_kabupaten' => $kabupaten,
        	);
        	$this->m_kabupaten->replace($where,$data,'kabupaten');
        	redirect('admin/kabupaten');
        }

        function hapus($id){
        	$where = array('id_kabupaten' => $id);
        	$this->db->trash($where,'kabupaten');
        	redirect('admin/kabupaten');
        }
    
    }
    
    /* End of file Kabupaten.php */
    
?>