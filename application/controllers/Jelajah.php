<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jelajah extends CI_Controller {

	/**
	 * Index Page for this Homecontroller.
	 *
	 * Author : Muhammad Royyan Zamzami
	 * Github : muhammadroyyan11
	 */
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Base_model', 'base');
		$this->load->library('form_validation');
		// $this->load->library('upload');
		// $userId = $this->session->userdata('login_session')['user'];
		// $this->user = $this->base->getUsers('user', ['id_user' => $userId]);
	}

	public function index()
	{
        $data['tittle'] = 'Cari Twibbon';
		// var_dump(userdata('id_user'));
		$data['twibbon'] = $this->base_model->get_join()->result();
        $this->template->load('template/userTemp', 'jelajahi/jelajahi', $data);
	}

	public function edit($id)
	{
		// var_dump($id);
        $data['tittle'] = 'Add Photo';

		$data['twibbon'] = $this->base->getTwibbon('twibbon', ['id_twibbon' => $id]);
		// $data['twibbon'] = $this->base_model->get_join_where(['id_twibbon' => $id])->result();
		// var_dump(userdata('id_user'));
        // $this->template->load('edit/edit', $data);
        $this->load->view('edit/edit', $data);
	}
}
