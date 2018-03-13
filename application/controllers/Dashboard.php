<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->library('grocery_CRUD');
	}

	public function index()
	{
		$this->setrender();
		$output = $this->dashboard->render();
		$this->load->view('Dashboard_view', $output);
	}

	public function setrender()
	{
		$this->dashboard = new grocery_CRUD();

		$crud = $this->dashboard;

		$crud->set_table('trackrecord');

		$crud->set_theme('flexigrid');

		$crud->display_as('Userid', 'User ID');
		$crud->display_as('nama_keluarga', 'Kepala Keluarga');
		$crud->display_as('nama_toko','Nama Toko');
		$crud->display_as('jumlah_belanja','Jumlah Belanja');
		$crud->display_as('foto_nota','Foto Nota');
		$crud->callback_read_field('foto_nota', function ($value , $primary_key){
			$home = base_url();
			return '<img src="'.$home.'/assets/res/nota/'. $value .'" width = 200>';
		});

		$crud->set_field_upload('foto_nota','assets/res/nota');

		$crud->unset_add();
		$crud->unset_edit();
		$crud->unset_delete();
	}
}
