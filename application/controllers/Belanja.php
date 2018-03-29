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

  }

  public function index()
  {
    // Form Validation set
    $this->form_validation->set_rules('userid', 'User ID', 'required|numeric',
          array('numeric'   => 'Kolom User ID Hanya Boleh Diisi Angka',
                'required'  => 'Kolom User ID Tidak Boleh Kosong'
          )
    );

    $caridata = $this->input->post('cari_data');

    if (isset($caridata) && $this->form_validation->run() == TRUE) {

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
      $this->load->view('belanja/Belanja_home_view', ['erroruserid' => $erroruserid]);
    }
  }

	public function view($userid = NULL)
	{
    // Form validation rule
    $this->form_validation->set_rules('total_belanja', '', 'required|numeric',
          array('numeric'   => 'Kolom Total Belanja Hanya Boleh Diisi Angka',
                'required'  => 'Kolom Total Belanja Tidak Boleh Kosong'
          )
    );
    $this->form_validation->set_rules('nama_toko', '', 'required|alpha_dash|min_length[3]',
          array('alpha_dash'  => 'Kolom Nama Toko Hanya Boleh Diisi Huruf dan Angka',
                'required'    => 'Kolom Nama Toko Tidak Boleh Kosong',
                'min_length'  => 'Kolom Nama Toko Minimal Berisi 3 Karakter'
          )
    );

    $this->model->userid = $userid;

    //declare variable for each button
    $checkout   = $this->input->post('checkout');
    $konfirmasi = $this->input->post('konfirmasi');
    $checkout   = $this->input->post('checkout');
    $batal      = $this->input->post('batal');

    //after click Belanja
    if (isset($checkout) && $this->form_validation->run() == TRUE) {
        $this->checkout();

    //after click Konfirmasi
    }elseif (isset($konfirmasi)) {
      $this->konfirmasi();

    //after click Batal
    }elseif (isset($batal)) {
      redirect('/belanja/view/'.$this->model->userid);

    //firstload
    }else{
      if ($this->model->cek_data() == TRUE) {
        $array = array(
          'message'       => $this->session->flashdata('errormessage'),
          'data'          => $this->model->saldo_sisa,
          'nama_keluarga' => $this->model->nama_keluarga,
          'user_history'  => $this->Belanja_model->cek_user()->result()
        );
        $this->load->view('belanja/Belanja_view', $array);
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
	    $this->load->view('belanja/Belanja_konfirmasi_view', [
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

  public function details($notaid = NULL)
  {
    $this->Belanja_model->notaid = $notaid;

    $kembali = $this->input->post('kembali');

    if ($this->Belanja_model->cek_nota()->result() == !NULL){
      $this->load->view('belanja/Belanja_nota_view',['nota' => $this->Belanja_model->cek_nota()->row()]);
    }else{
      $this->session->set_flashdata('erroruserid', 'Data Yang Anda Cari Tidak Dapat Ditemukan');
      redirect('belanja'.$this->Belanja_model->userid);
    }
  }
}
