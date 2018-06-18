<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Event extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
		}
	
		function tambah(){
			$jenis = $this->input->post('jenis');
			$event = $this->input->post('event');
			$mulai = $this->input->post('mulai');
			$akhir = $this->input->post('akhir');
			$deskripsi = $this->input->post('deskripsi');
			$harga = $this->input->post('harga');
			$status = $this->input->post('status');
			$level = $this->input->post('level');
			$partisipan = implode(",", $level);
			$gambar = $_FILES['path']['name'];
			$config['upload_path'] = './assets/event/image';
			$config['allowed_types'] = 'jpg|png';
			$config['overwrite'] = TRUE;
			$config['file_name'] = $event;
			$config['file_ext_tolower'] = TRUE;
			$this->load->library('upload',$config);
			$this->upload->do_upload('path');

			$data = array(
				'id_jenis' => $jenis,
				'id_level' => $partisipan,
				'nama_event' => $event,
				'tgl_mulai' => $mulai,
				'tgl_akhir' => $akhir,
				'deskripsi_event' => $deskripsi,
				'harga_event' => $harga,
				'path_event' => $this->upload->data('file_name'),
				'status_event' => $status,
			);

			$this->m_event->create($data,'event');
			redirect('admin/kelola_event');
		}

		function edit($id){
			$where = array('id_event' => $id);
			$data = array(
				'event' => $this->m_event->get($where,'event')->result(),
				'jenis' => $this->m_jenis->list_jenis()->result(),
			);
			$this->load->view('dashboard/sidebar');
			$this->load->view('dashboard/event/edit',$data);
			$this->load->view('dashboard/footer');
		}

		function update(){
			$id = $this->input->post('id');
			$jenis = $this->input->post('jenis');
			$event = $this->input->post('event');
			$mulai = $this->input->post('mulai');
			$akhir = $this->input->post('akhir');
			$deskripsi = $this->input->post('deskripsi');
			$harga = $this->input->post('harga');
			$status = $this->input->post('status');
			$gambar = $_FILES['path']['name'];
			$config['upload_path'] = './assets/event/image';
			$config['allowed_types'] = 'jpg|png';
			$config['overwrite'] = TRUE;
			$config['file_name'] = $event;
			$config['file_ext_tolower'] = TRUE;
			$this->load->library('upload');
			$this->upload->do_upload('path');

			$where = array('id_event' => $id);
			$data = array(
				'nama_event' => $event,
				'id_jenis' => $jenis,
				'tgl_mulai' => $mulai,
				'tgl_akhir' => $akhir,
				'deskripsi_event' => $deskripsi,
				'harga_event' => $harga,
				'path_event' => $this->upload->data('file_name'),
				'status_event' => $status,
			);

			$this->m_event->replace($where,$data,'event');
			redirect('admin/kelola_event');
		}

		function hapus($id){
			$where = array('id_event' => $id);
			$this->m_event->trash($where,'event');
			redirect('admin/kelola_event');
		}
	
	}
	
	/* End of file Event.php */
	/* Location: ./application/controllers/Event.php */
?>