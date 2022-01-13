<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jelajah extends CI_Controller {

	/**
	 * Index Page for this Homecontroller.
	 *
	 * Author : Muhammad Royyan Zamzami
	 * Github : muhammadroyyan11
	 */
	public function index()
	{
        $data['tittle'] = 'Cari Twibbon';
		// var_dump(userdata('id_user'));
        $this->template->load('template/userTemp', 'jelajahi/jelajahi', $data);
	}
}
