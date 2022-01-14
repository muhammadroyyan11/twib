<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

	/**
	 * Index Page for this Profilecontroller.
	 *
	 * Author : Muhammad Royyan Zamzami
	 * Github : muhammadroyyan11
	 */
	// private function _config()
	// {
	//     $config['upload_path']      = "./assets/img/avatar";
	//     $config['allowed_types']    = 'gif|jpg|jpeg|png';
	//     $config['encrypt_name']     = TRUE;
	//     $config['max_size']         = '2048';

	//     $this->load->library('upload', $config);
	// }

	public function __construct()
	{
		parent::__construct();
		cek_login();

		$this->load->model('Base_model', 'base');
		$this->load->library('form_validation');

		$userId = $this->session->userdata('login_session')['user'];
		$this->user = $this->base->getUsers('user', ['id_user' => $userId]);
	}

	public function index()
	{
		$data['tittle'] = 'Profile';

		$username = $this->input->post('username', true);
		$email = $this->input->post('email', true);

		$db = $this->base->getUser('user', ['id_user' => $this->input->post('id_user', true)]);
		// $uniq_username = $db['username'] == $username ? '' : '|is_unique[user.username]';
		// $uniq_email = $db['email'] == $email ?  : '|is_unique[user.email]';

		$this->form_validation->set_rules('username', 'Username', 'required|trim|alpha_numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required|trim|numeric');
		// $this->_config();

		$userId = $this->session->userdata('login_session')['user'];


		if ($this->form_validation->run() == false) {
			$data['title'] = "Profile";
			$data['user'] = $this->base->getUser('user', ['id_user' => $userId]);;
			$this->template->load('template/userTemp', 'setting/profile', $data);
		} else {
			$input = $this->input->post(null, true);
			if (empty($_FILES['foto']['name'])) {
				$insert = $this->base->update('user', 'id_user', $input['id_user'], $input);
				if ($insert) {
					set_pesan('perubahan berhasil disimpan.');
				} else {
					set_pesan('perubahan tidak disimpan.');
				}
				redirect('profile/setting');
			} else {
				if ($this->upload->do_upload('foto') == false) {
					echo $this->upload->display_errors();
					die;
				} else {
					if (userdata('foto') != 'user.png') {
						$old_image = FCPATH . 'assets/img/avatar/' . userdata('foto');
						if (!unlink($old_image)) {
							set_pesan('gagal hapus foto lama.');
							redirect('profile/setting');
						}
					}

					$input['foto'] = $this->upload->data('file_name');
					$update = $this->base->update('user', 'id_user', $input['id_user'], $input);
					if ($update) {
						set_pesan('perubahan berhasil disimpan.');
					} else {
						set_pesan('gagal menyimpan perubahan');
					}
					redirect('profile/setting');
				}
			}
		}
	}

	public function changeProfile()
	{
		
	}
}
