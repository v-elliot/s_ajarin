<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Kategori extends CI_Controller {
	
		function tambah(){
			$kategori = $this->input->post('kategori');
			$status = $this->input->post('status');

			$data = array(
				'nama_kategori' => $kategori,
				'status_kategori' => $status,
			);

			$this->m_kategori->create($data,'kategori');
			redirect('admin/kategori');
		}

		function edit($id){
			$where = array('id_kategori' => $id);
			$data['kategori'] = $this->m_kategori->get($where,'kategori')->result();
			$this->load->view('dashboard/sidebar');
			$this->load->view('dashboard/master/kategori/edit',$data);
			$this->load->view('dashboard/footer');
		}

		function update(){
			$id = $this->input->post('id');
			$kategori = $this->input->post('kategori');
			$status = $this->input->post('status');

			$where = array('id_kategori' => $id);
			$data = array(
				'nama_kategori' => $kategori,
				'status_kategori' => $status,
			);

			$this->m_kategori->replace($where,$data,'kategori');
			redirect('admin/kategori');
		}

		function hapus($id){
			$where = array('id_kategori' => $id);
			$this->m_kategori->trash($where,'kategori');
			redirect('admin/kategori');
		}
	
	}
	
	/* End of file Kategori.php */
	/* Location: ./application/controllers/Kategori.php */
?>