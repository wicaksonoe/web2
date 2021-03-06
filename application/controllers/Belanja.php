<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belanja extends CI_Controller {

  public $total_belanja;

  public function __construct()
  {
    parent::__construct();

    // Load form validation library
    $this->load->library('form_validation');

    // Load session library
    $this->load->library('session');

    // Load model
    $this->load->model('Belanja_model');

    //use to flush model array
    $this->model = $this->Belanja_model;

    // Load grocery_CRUD
    $this->load->library('grocery_CRUD');
  }

  public function index()
  {
    $caridata = $this->input->post('cari_data');
    if (isset($caridata)) {

      $userid = $this->input->post('userid');
      
      $this->model->userid = $userid;
      if ($this->model->cek_data() == TRUE) {
        $direct = '/belanja/view/'.$userid;
        redirect($direct);
      }else{
        $this->session->set_flashdata('erroruserid', $this->model->error_userid);
        redirect('belanja');
      }

    //Load First
    }else{
      $erroruserid = $this->session->flashdata('erroruserid');
      $this->load->view('Belanja_home_view', ['erroruserid' => $erroruserid]);
    }
  }

	public function view($userid=NULL)
	{
    $this->model->userid = $userid;

    //declare variable for each button
    $checkout   = $this->input->post('checkout');
    $konfirmasi = $this->input->post('konfirmasi');
    $checkout   = $this->input->post('checkout');
    $batal      = $this->input->post('batal');
    
    //after click Belanja
    if (isset($checkout)) {
      $this->checkout();

    //after click Konfirmasi
    }elseif (isset($konfirmasi)) {
      $this->konfirmasi();

    //after click Batal
    }elseif (isset($batal)) {
      $this->model->cek_data();
      redirect('/belanja/view/'.$this->model->userid);

    //firstload
    }else{
      if ($this->model->cek_data() == TRUE) {
        $this->history();
        $output = $this->history->render();
        $errormessage = $this->session->flashdata('errormessage');
        $this->load->view('Belanja_view_head', [
          'message'       => $errormessage,
          'data'          => $this->model->saldo_sisa,
          'nama_keluarga' => $this->model->nama_keluarga,
        ]);
        $this->load->view('Belanja_view_foot', $output);
      }else{
        $this->session->set_flashdata('erroruserid', $this->model->error_userid);
        redirect('belanja');
      }
    }
	}

  public function checkout()
  {
    $this->model->cek_data();
    $this->model->total_belanja = $this->input->post('total_belanja');
    $this->model->nama_toko     = $this->input->post('nama_toko');
		
		$saldo = $this->model->saldo_sisa;
		$belanja = $this->model->total_belanja;
		
		// Rule to check saldo first step.
		if ($saldo - $belanja < 0){
			$message = array('saldo' => 'Saldo tidak mencukupi !');
			$this->session->set_flashdata('errormessage', $message);
      redirect('belanja/view/'.$this->model->userid);
		}else{
	    $this->load->view('Belanja_konfirmasi_view', [
      'data_saldo'    => $this->model->saldo_sisa,
      'data_belanja'  => $this->model->total_belanja,
      'nama_keluarga' => $this->model->nama_keluarga,
      'nama_toko'     => $this->model->nama_toko,
    ]);
		}

  }

  public function konfirmasi()
  {
		//Flush Var and Check Var DATA
    $this->model->total_belanja  = $this->input->post('total_belanja');
		$this->model->nama_toko      = $this->input->post('nama_toko');
		$this->model->cek_data();
		
		//SET Link
    $uploadnota  = $this->model->upload_nota();
    $updatesaldo = $this->model->update_saldo();
		
    if ($updatesaldo['result'] == "success" && $uploadnota['result'] == "success")  //Check Function $upload_nota AND $uploadnota BOTH SUCCESS
    {   // IF TRUE
			//Start Function update_record
      $this->model->update_record($uploadnota);      
      redirect('/belanja/view/'.$this->model->userid);
		}else{   // IF FALSE
			//DELETE Uploaded Image		
			if($uploadnota['result'] == "success"){
				$name = $uploadnota['file']['file_name'];
				unlink('./assets/res/nota/'.$name);
			}
			//Set FLASH DATA for EROOR MSG and Redirect to belanja/view/$userid
			$error_array = array(
				$saldo_error 	= $updatesaldo['error'],
				$upload_error	= $uploadnota['error'],
			);
      $this->session->set_flashdata('errormessage', $error_array);
      redirect('/belanja/view/'.$this->model->userid);
    }
  }

  public function history()
  {
    $userid = $this->model->userid;

    $this->history = new grocery_CRUD();

    $crud = $this->history;

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

    $crud->where('userid', $userid);

		$crud->unset_add();
		$crud->unset_edit();
		$crud->unset_delete();
  }
}
