<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

	/**
	 * Index Page for this Homecontroller.
	 *
	 * Author : Muhammad Royyan Zamzami
	 * Github : muhammadroyyan11
	 */
	public function index()
	{
        $data['tittle'] = 'Add Photo';
		// var_dump(userdata('id_user'));
        // $this->template->load('edit/edit', $data);
        $this->load->view('edit/edit', $data);
	}
}
