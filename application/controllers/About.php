<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	/**
	 * Index Page for this Homecontroller.
	 *
	 * Author : Muhammad Royyan Zamzami
	 * Github : muhammadroyyan11
	 */
	public function index()
	{
        $data['tittle'] = 'Tentang Kami';
		// var_dump(userdata('id_user'));
		// $data['twibbon'] = $this->base_model->get_join_limit()->result();
        $this->template->load('template/userTemp', 'about/about', $data);
	}
}
