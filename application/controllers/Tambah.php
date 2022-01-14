<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tambah extends CI_Controller
{

    /**
     * Index Page for this Homecontroller.
     *
     * Author : Muhammad Royyan Zamzami
     * Github : muhammadroyyan11
     */

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

        $this->form_validation->set_rules('nama_categori', 'Nama categori', 'required|trim');
        $login = userdata('id_user');

        $data['tittle'] = 'Tambah Twibbon Baru';
        // var_dump(userdata('id_user'));
        $this->template->load('template/userTemp', 'tambah/tambah', $data);
        
        // if ($this->form_validation->run() == false) {
        //     $data['tittle'] = 'Tambah Twibbon Baru';
        //     // var_dump(userdata('id_user'));
        //     $this->template->load('template/userTemp', 'tambah/tambah', $data);
            
        //     $input = $this->input->post(null, true);
        //     $input['id_user'] = $login;
        //     $insert = $this->base_model->insert('twibbon', $input);
        //     if ($insert) {
        //         set_pesan('data berhasil disimpan');
        //         redirect('tambah');
        //     } else {
        //         set_pesan('data gagal disimpan', false);
        //         redirect('tambah/add');
        //     }
        // }
    }
}
