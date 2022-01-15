<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	/**
	 * Index Page for this Authcontroller.
	 *
	 * Author : Muhammad Royyan Zamzami
	 * Github : muhammadroyyan11
	 */
	public function __construct()
	{
		date_default_timezone_set('Asia/Jakarta');
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Auth_model', 'auth');
		$this->load->model('Base_model', 'base');
	}

	private function _has_login()
	{
		if ($this->session->has_userdata('login_session')) {
			redirect('home');
		}
	}

	public function index()
	{
		$this->_has_login();
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['tittle'] = 'Login Aplikasi';
			$this->template->load('template/authTemp', 'auth/login', $data);
		} else {
			$input = $this->input->post(null, true);

			$cek_email = $this->auth->cek_email($input['email']);
			if ($cek_email > 0) {
				$password = $this->auth->get_password($input['email']);
				if (password_verify($input['password'], $password)) {
					$user_db = $this->auth->userdata($input['email']);
					$userdata = [
						'user'  => $user_db['id_user'],
						'role'  => $user_db['role'],
						'timestamp' => time()
					];
					$this->session->set_userdata('login_session', $userdata);
					redirect('home');
				} else {
					set_pesan('password salah', false);
					redirect('auth');
				}
			} else {
				set_pesan('Akun belum terdaftar', false);
				redirect('auth');
			}
		}
	}

	public function logout()
    {
        $this->session->unset_userdata('login_session');

        set_pesan('anda telah berhasil logout');
        redirect('auth');
    }

	public function register()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|trim');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');

        if ($this->form_validation->run() == false) {
            $data['tittle'] = 'Buat Akun';
			$this->template->load('template/authTemp', 'auth/register', $data);
        } else {
            $input = $this->input->post(null, true);
            unset($input['password2']);
            $input['password']      = password_hash($input['password'], PASSWORD_DEFAULT);
            $input['role']          = 'gudang';
            $input['is_active']     = 1;
            $input['created_at']    = time();

            $query = $this->base->insert('user', $input);
            if ($query) {
                set_pesan('daftar berhasil. Selanjutnya silahkan login ke akun anda.');
                redirect('auth');
            } else {
                set_pesan('gagal menyimpan ke database', false);
                redirect('register');
            }
        }
    }

}
