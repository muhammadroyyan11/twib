<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Author : Muhammad Royyan Zamzami
     * Github : muhammadroyyan11
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
