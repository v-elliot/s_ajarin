<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Profil extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
		}
	
		function change_pict(){
			$id = $this->input->post('id');
			$img = $_FILES['gambar']['name'];
			$config['upload_path'] = './assets/images/dp/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['overwrite'] = TRUE;
			$config['file_name'] = $this->session->userdata('username');
			$config['file_ext_tolower'] = TRUE;
			$config['remove spaces'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->do_upload('gambar');

			$gbr = $this->upload->data();

			$config['img_library'] = 'gd2';
			$config['source_image'] = './assets/images/dp/'.$gbr['file_name'];
			$config['create_thumb'] = FALSE;
			$config['maintain_ratio'] = FALSE;
			$config['quality'] = '50%';
			$config['width'] = 512;
			$config['height'] = 512;
			$config['new_image'] = './assets/images/dp/'.$gbr['file_name'];
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			$this->image_lib->clear();

			if(!$this->image_lib->resize()){
				echo $this->image_lib->display_errors();
			}

			$data = array('path' => $this->upload->data('file_name'));
			$where = array('id_user' => $id);
			$this->m_profil->replace_pict($where,$data,'user');
			$this->session->set_userdata($data);
			$this->load->view('dashboard/sidebar');
			$this->load->view('dashboard/profil',$data);
			$this->load->view('dashboard/footer');
		}

		function update_data(){
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$username = $this->input->post('username');
			$bio = $this->input->post('bio');

			$where = array('id_user' => $id);
			$data = array(
				'nama_user' => $nama,
				'email' => $email,
				'username' => $username,
				'bio' => $bio,
			);
			$this->m_profil->replace_data($where,$data,'user');
			$this->session->set_userdata($data);

			//var_dump($where,$data);
			redirect('dashboard/profil');
		}
	
	}
	
	/* End of file Profil.php */
	/* Location: ./application/controllers/Profil.php */
?>