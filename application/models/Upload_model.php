<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_model  extends CI_Model  {

	public function __construct()
    {
      parent::__construct();
			$this->load->database();
    }

	public function view(){
    return $this->db->get('gambar')->result();
  }

  // Fungsi untuk melakukan proses upload file
  public function upload(){
    $config['upload_path'] = './assets/res/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size']  = '0';
    $config['remove_space'] = TRUE;
		$config['encrypt_name'] = TRUE;

    $this->load->library('upload', $config); // Load konfigurasi uploadnya
    if($this->upload->do_upload('upload_foto')){ // Lakukan upload dan Cek jika proses upload berhasil
      // Jika berhasil :
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      return $return;
    }else{
      // Jika gagal :
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }

  // Fungsi untuk menyimpan data ke database
  public function save($upload){
		/*
		$config['image_library'] = 'gd2';
		$config['source_image'] = $upload['file']['full_path'];
		$config['maintain_ratio'] = TRUE;
		$config['width']         = 500;

		$this->load->library('image_lib', $config);

		$this->image_lib->resize();
		*/ //CODE FOR RESIZING

    $data = array(
      'nama_file' => $upload['file']['file_name'],
      'ukuran_file' => $upload['file']['file_size'],
      'tipe_file' => $upload['file']['file_type']
    );

    $this->db->insert('gambar', $data);
  }
}
