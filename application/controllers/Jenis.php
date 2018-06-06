<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Jenis extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
		}
	
		function tambah(){
			$jenis = $this->input->post('jenis');
			$status = $this->input->post('status');

			$data = array(
				'nama_jenis' => $jenis,
				'status_jenis' => $status,
			);

			$this->m_jenis->create($data,'jenis_event');
			redirect('admin/jenis_event');
		}

		function edit($id){
			$where = array('id_jenis' => $id);
			$data['jenis'] = $this->m_jenis->get($where,'jenis_event')->result();
			$this->load->view('dashboard/sidebar');
			$this->load->view('dashboard/event/master/jenis/edit',$data);
			$this->load->view('dashboard/footer');
		}

		function update(){
			$id = $this->input->post('id');
			$jenis = $this->input->post('jenis');
			$status = $this->input->post('status');

			$where = array('id_jenis' => $id);
			$data = array(
				'nama_jenis' => $jenis,
				'status_jenis'=> $status,
			);

			$this->m_jenis->replace($where,$data,'jenis_event');
			redirect('admin/jenis_event');
		}

		function hapus($id){
			$where = array('id_jenis' => $id);
			$this->m_jenis->trash($where,'jenis_event');
			redirect('admin/jenis_event');
		}
	
	}
	
	/* End of file Jenis.php */
	/* Location: ./application/controllers/Jenis.php */
?>