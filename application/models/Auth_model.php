<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{

	public function cek_username($username)
	{
		$query = $this->db->get_where('user', ['username' => $username]);
		return $query->num_rows();
	}

	public function cek_email($email)
	{
		$query = $this->db->get_where('user', ['email' => $email]);
		return $query->num_rows();
	}

	public function cek_role()
	{
		$query = $this->db->get_where('user', ['role' => 'admin']);
		return $query->num_rows();
	}

	public function get_password($email)
	{
		$data = $this->db->get_where('user', ['email' => $email])->row_array();
		return $data['password'];
	}

	public function userdata($email)
	{
		return $this->db->get_where('user', ['email' => $email])->row_array();
	}


	// public function addTwibbon()
    //     {
    //     $this->load->library("upload");
    //     $this->load->helper('url');
	// 	$login = userdata('id_user');
		
    //     $slug = url_title($this->input->post('title'),'dash',TRUE);
    //     $config['upload_path'] = 'assets/img/upload/twibbon';
    //         $config['allowed_types'] = 'png';
    //         $this->upload->initialize($config); 
    //         $this->upload->do_upload('pictures');
    //         $image_data = $this->upload->data();
    //         $pictures = $image_data['file_name'];
    //         $data = array(
    //             'tittle_twibbon' => $this->input->post('tittle_twibbon'),
    //             'name_file' => $pictures,
    //             'category' => $this->input->post('category'),
    //             'deskripsi' => $this->input->post('deskripsi'),
                
    //             'slug' => $slug,
    //             'pictures' => $pictures
    //         );
    // return $this->db->insert('news', $data);
    //     } 
}
