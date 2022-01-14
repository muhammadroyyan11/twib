<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campaign extends CI_Controller {

	/**
	 * Index Page for this Homecontroller.
	 *
	 * Author : Muhammad Royyan Zamzami
	 * Github : muhammadroyyan11
	 */
	public function index()
	{
        $data['tittle'] = 'Campaign saya';
		// var_dump(userdata('id_user'));
        $this->template->load('template/userTemp', 'campaign/campaign', $data);
	}

    public function add()
    {
        # code...
    }
}
