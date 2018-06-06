<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Provinsi extends CI_Controller {
    
        function tambah(){
            $data['nama_provinsi'] = $this->input->post('provinsi');
            $this->m_provinsi->create($data,'provinsi');
            redirect('admin/provinsi');
        }

        function edit($id){
            $where = array('id_provinsi' => $id);
            $data['provinsi'] = $this->m_provinsi->get($where,'provinsi')->result();
            $this->load->view('dashboard/sidebar');
            $this->load->view('dashboard/master/provinsi/edit',$data);
            $this->load->view('dashboard/footer');
        }

        function update(){
            $id = $this->input->post('id');
            $provinsi = $this->input->post('provinsi');

            $where = array('id_provinsi' => $id);
            $data = array('nama_provinsi' => $provinsi);

            $this->m_provinsi->replace($where,$data,'provinsi');
            redirect('admin/provinsi');
        }

        function hapus($id){
            $where = array('id_provinsi' => $id);
            $this->m_provinsi->trash($where,'provinsi');
            redirect('admin/provinsi');
        }
    
    }
    
    /* End of file Provinsi.php */
    
?>