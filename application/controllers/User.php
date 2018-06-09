<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class User extends CI_Controller {
	
		function tambah_mentor(){
			$nama = $this->input->post('nama');
			$jk = $this->input->post('jk');
			$tgl = $this->input->post('tanggal');
			$nomer = $this->input->post('nomer');
			$asal = $this->input->post('kabupaten');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$email = $this->input->post('email');

			$data = array(
				'nama_user' => $nama,
				'jk' => $jk,
				'tgl_lahir' => $tgl,
				'no_user' => $nomer,
				'id_kabupaten' => $asal,
				'username' => $username,
				'password' => md5($password),
				'email' => $email,
				'path' => "default.png",
				'bio' => "Hi, I'm Join AjarinCode Now",
				'id_level' => 1,
				'status_user' => "Aktif",
				'hak_akses' => "Mentor",
			);

			$this->m_user->create_mentor($data,'user');
			redirect('admin/mentor');
		}

		function edit_mentor($id){
			$where = array('id_user' => $id);
			$data = array(
				'user' => $this->m_user->get_mentor($where,'user')->result(),
				'provinsi' => $this->m_provinsi->list_provinsi()->result(),
				'level' => $this->m_level->list_level()->result(),
			);
			$this->load->view('dashboard/sidebar');
			$this->load->view('dashboard/user/mentor/edit',$data);
			$this->load->view('dashboard/footer');
		}
	
	}
	
	/* End of file User.php */
	/* Location: ./application/controllers/User.php */
?>