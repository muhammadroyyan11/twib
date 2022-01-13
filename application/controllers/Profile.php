<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	/**
	 * Index Page for this Profilecontroller.
	 *
	 * Author : Muhammad Royyan Zamzami
	 * Github : muhammadroyyan11
	 */
	public function index()
	{
        $data['tittle'] = 'Profile';
		// var_dump(userdata('id_user'));
        $this->template->load('template/userTemp', 'setting/profile', $data);
	}
}
