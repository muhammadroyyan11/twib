<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Campaign extends CI_Controller
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
		// $this->load->library('upload');
		$userId = $this->session->userdata('login_session')['user'];
		$this->user = $this->base->getUsers('user', ['id_user' => $userId]);
	}

	public function index()
	{
		$data['tittle'] = 'Twibbon saya';
		$data['twibbonById'] = $this->base_model->get_join()->result();
		// var_dump(userdata('id_user'));
		$this->template->load('template/userTemp', 'campaign/campaign', $data);
	}

	public function add()
	{
		$data['tittle'] = 'Tambah Twibbon Baru';
		// var_dump(userdata('id_user'));
		$this->template->load('template/userTemp', 'tambah/tambah', $data);
	}


	public function insertdata()
	{
		// $tanggal = date("Y-m-d");
		// $login = userdata('id_user');

		$config['upload_path']          = './assets/img/upload/twibbon/';
		$config['allowed_types']        = 'png';
		$config['max_size']             = 5000;
		$config['max_width']            = 10000;
		$config['max_height']           = 10000;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('userfile')) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Format gambar bukan PNG. </div>');

			redirect('campaign/add');
		} else {
			$gambar = $this->upload->data();
			$gambar = $gambar['file_name'];
			$tittle = $this->input->post('tittle_twibbon', TRUE);
			$deskripsi = $this->input->post('deskripsi', TRUE);
			$date = date("Y-m-d");
			$id_user = userdata('id_user');

			$data = array(
				'tittle_twibbon' => $tittle,
				'gambar' => $gambar,
				'deskripsi' => $deskripsi,
				'date' => $date,
				'id_user' => $id_user
			);

			$this->base_model->insert('twibbon', $data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Data Berhasil Ditambahkan! </div>');

			redirect('campaign');
		}
	}

	public function delete($id){
		$where=array('id_twibbon' => $id);
		$this->base_model->del('twibbon', $where);
		redirect('campaign');
	}

	public function addDukungan() {
        $data = $this->input->post(NULL, TRUE);

        $set = '1';
        $params['dukungan'] = $set;
        $this->db->where(['id_twibbon' => $data['id_twibbon'], 'twibbon' => $data['twibbon']]);
        $result = $this->db->update('twibbon' ,$params);
        
        if ($result) {
            echo 'k';
        }

    }
}
