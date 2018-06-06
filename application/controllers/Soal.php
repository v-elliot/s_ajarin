<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Soal extends CI_Controller {
	
		function tambah(){
			$level = $this->input->post('level');
			$soal = $this->input->post('soal');
			$opsiA = $this->input->post('opsiA');
			$opsiB = $this->input->post('opsiB');
			$opsiC = $this->input->post('opsiC');
			$opsiD = $this->input->post('opsiD');
			$kunci = $this->input->post('kunci');

			$pertanyaan = array(
				'id_level' => $level,
				'pertanyaan' => $soal,
				'kunci' => $kunci,
			);
			$id_soal = $this->m_soal->create_soal($pertanyaan,'soal');
			$jawaban = array(
				'opsiA' => $opsiA,
				'opsiB' => $opsiB,
				'opsiC' => $opsiC,
				'opsiD' => $opsiD,
				'id_soal' => $id_soal,
			);
			$this->m_soal->create_jawaban($jawaban,'opsi');
			redirect('admin/soal');
		}

		function edit($id){
			$where = array('id_soal' => $id);
			$data = array(
				'level' => $this->m_level->list_level()->result(),
				'soal' => $this->m_soal->get_soal($where,'soal')->result(),
				'jawaban' => $this->m_soal->get_jawaban($where,'opsi')->result(),
			);
			$this->load->view('dashboard/sidebar');
			$this->load->view('dashboard/quis/soal/edit',$data);
			$this->load->view('dashboard/footer');
		}

		function update(){
			$id = $this->input->post('id');
			$level = $this->input->post('level');
			$soal = $this->input->post('soal');
			$kunci = $this->input->post('kunci');
			$opsiA = $this->input->post('opsiA');
			$opsiB = $this->input->post('opsiB');
			$opsiC = $this->input->post('opsiC');
			$opsiD = $this->input->post('opsiD');

			$where = array('id_soal' => $id);
			$pertanyaan = array(
				'id_level' => $level,
				'pertanyaan' => $soal,
				'kunci' => $kunci,
			);
			$id_soal = $this->m_soal->replace_soal($where,$pertanyaan,'soal');
			$jawaban = array(
				'opsiA' => $opsiA,
				'opsiB' => $opsiB,
				'opsiC' => $opsiC,
				'opsiD' => $opsiD,
			);
			$this->m_soal->replace_jawaban($where,$jawaban,'opsi');
			redirect('admin/soal');
		}

		function hapus($id){
			$where = array('id_soal' => $id);
			$this->m_soal->trash_soal($where,'soal');
			$this->m_soal->trash_jawaban($where,'opsi');
			redirect('admin/soal');
		}
	}
	
	/* End of file Soal.php */
	/* Location: ./application/controllers/Soal.php */
?>