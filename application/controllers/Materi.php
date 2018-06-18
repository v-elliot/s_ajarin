<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Materi extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
		}
	
		public function create()
		{
			$data = array(
				'kategori' => $this->m_kategori->list_kategori()->result(),
				'level' => $this->m_level->list_level()->result(),
			);
			$this->load->view('dashboard/sidebar');
			$this->load->view('dashboard/materi/kelola_materi/create',$data);
			$this->load->view('dashboard/footer');
		}



		function tambah(){
			$judul = $this->input->post('judul');
			$level = $this->input->post('level');
			$kategori = $this->input->post('kategori');
			$deskripsi = $this->input->post('deskripsi');
			$url = $this->input->post('url');
			$isi = $this->input->post('isi');
			$file = $_FILES['lampiran']['name'];
			$config['upload_path'] = './materi/';
			$config['allowed_types'] = 'pdf|docx|pptx';
			$config['file_ext_tolower'] = TRUE;
			$config['overwrite'] = TRUE;
			$config['file_name'] = $judul;
			$config['remove_spaces'] = TRUE;
			$this->load->library('upload');
			$this->upload->do_upload('lampiran');

			$data = array(
				'id_level' => $level,
				'id_kategori' => $kategori,
				'judul_materi' => $judul,
				'deskripsi_materi' => $deskripsi,
				'isi_materi' => $isi,
				'link_video' => $url,
				'file_lampiran' => $this->upload->data('file_name'),
			) ;

			$this->m_materi->create($data,'materi');
			redirect('admin/materi');
		}

		function edit($id){
			$where = array('id_materi' => $id);
			$data = array(
				'materi' => $this->m_materi->get($where,'materi')->result(),
				'level' => $this->m_level->list_level()->result(),
				'kategori' => $this->m_kategori->list_kategori()->result(),
			);
			$this->load->view('dashboard/sidebar');
			$this->load->view('dashboard/materi/kelola_materi/edit',$data);
			$this->load->view('dashboard/footer');
		}
	
	}
	
	/* End of file Materi.php */
	/* Location: ./application/controllers/Materi.php */
?>