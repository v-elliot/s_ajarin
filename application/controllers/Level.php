<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Level extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
		}

		function tambah(){
			$level = $this->input->post('level');
			$status = $this->input->post('status');

			$data = array(
				'nama_level' => $level,
				'status_level' => $status,
			);

			$this->m_level->create($data,'level');
			redirect('admin/level');
		}

		function edit($id){
			$where = array('id_level' => $id);
			$data['level'] = $this->m_level->get($where,'level')->result();
			$this->load->view('dashboard/sidebar');
			$this->load->view('dashboard/master/level/edit', $data);
			$this->load->view('dashboard/footer');
		}

		function update(){
			$id = $this->input->post('id');
			$level = $this->input->post('level');
			$status = $this->input->post('status');

			$where = array('id_level' => $id);
			$data = array(
				'nama_level' => $level,
				'status_level' => $status,
			);

			$this->m_level->replace($where,$data,'level');
			redirect('admin/level');
		}
	
		function hapus($id){
			$where = array('id_level' => $id);
			$this->m_level->trash($where,'level');
			redirect('admin/level');
		}
	
	}
	
	/* End of file Level.php */
	/* Location: ./application/controllers/Level.php */
?>