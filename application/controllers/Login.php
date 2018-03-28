<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// Load form validation library
		$this->load->library('form_validation');

		// Load session library
		$this->load->library('session');

		// Load model
		$this->load->model('Login_model');

		//use to flush model array
		$this->model = $this->Login_model;

	}

	public function index() {
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');

		if (isset($_POST['login'])) {

			  if ($this->form_validation->run() == FALSE) {
			      if(isset($this->session->userdata['logged_in'])){

							//kode disini untuk auto redirect after SESSION Available

												echo 'sudah ada session';
												echo '<br>';
												$hasilsession = $this->session->userdata();

												foreach($hasilsession as $result) {
														echo $result.'<br>';
												}
												//$this->load->view('admin_page');

							//END Block CODE

			      } else {

							//kode disini untuk auto redirect after SESSION NOT Available & FORM NOT VALID

												echo 'gagal validasi';
												echo '<br>';
												//$this->load->view('login_form');

							//END Block CODE
			      }
				} else {
						$this->model->username = $_POST['username'];
						$this->model->password = md5($_POST['password']);
						//$this->model->cek_login();

						if ($this->model->cek_login() == TRUE) {

							//kode disini untuk auto redirect after SESSION NOT Available & FORM VALID & Username / Password TRUE

												echo 'sukses login stts dari controler';
												echo '<br>';

							//END Block CODE

							$this->session->set_userdata('logged_in', $this->model->username);

						}else{

							//kode disini untuk auto redirect after SESSION NOT Available & FORM VALID & Username / Password FALSE

												echo 'gagal login stts dari controler';
												echo '<br>';

							//END Block CODE
						}
				}
		}	else{
			$this->load->view('Login_view');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
