<?php

class Login_model  extends CI_Model  {

	public $username;
	public $password;

	public function __construct()
    {
        parent::__construct();
				$this->load->database();
    }

	public function cek_login()
	{

		$query = $this->db->get_where('users', [
								'username' => $this->username,
								'password' => $this->password
							], 1);

		if ($query->num_rows() == 1) {
				return true;
			} else {
				return false;
			}
		}
}
