<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$this->load->view('Profile_view');
	}

	public function view($profile_id = NULL)
	{
		$this->load->view('Profile_view', ['profile_id' => $profile_id]);
	}
}
