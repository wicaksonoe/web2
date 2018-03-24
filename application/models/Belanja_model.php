<?php

class Belanja_model  extends CI_Model  {

	public $saldo_sisa;
	public $total_belanja;
	public $nama_keluarga;
	public $userid;
	public $saldo_akhir;
	public $error_userid;
	public $nama_toko;
	public $datauserid;

	public function __construct()
    {
        parent::__construct();
				$this->load->database();
    }

	public function cek_data()
	{

		$query = $this->db->get_where('daftar', [																		// |
								'userid' => $this->userid,																			// | Check Available Userid
							], 1);																														// |

		if ($query->num_rows() == 1) {
				$row = $query->row();																										// |
				$this->nama_keluarga = $row->nama_keluarga;															// |
				$this->saldo_sisa = $row->saldo_sisa;																		// | Set Nama Keluarga, Saldo, Userid
				$this->datauserid = $row->userid;																				// |
				return true;																														// |
			} else {
				$this->error_userid = 'User ID Tidak Ditemukan';												// |
				return false;																														// | IF Userid Not Available
			}
	}

	public function update_saldo()
	{
		$saldo		= $this->saldo_sisa;
		$belanja	= $this->total_belanja;

		if ($saldo - $belanja < 0)
		{
      $return = array(
        'result' 	=> 'failed',
        'error'  	=> 'Saldo tidak mencukupi',
      );
			return $return;
		}else{
      $return = array(
        'result' 	=> 'success',
				'error'		=> '',
      );
      return $return;
		}
	}

	public function upload_nota()
	{
		$config['upload_path'] = './assets/res/nota/';
		$config['allowed_types'] = 'jpg|jpeg';
		$config['remove_space'] = TRUE;
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config); // Load konfigurasi uploadnya

		if($this->upload->do_upload('upload_nota_input')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array(
				'result' => 'success',
				'file'	 => $this->upload->data(),
				'error'	 => ''
			);
			return $return;
		}else{
			// Jika gagal :
			$return = array(
				'result'	=> 'failed',
				'file' 		=> '',
				'error' 	=> $this->upload->display_errors()
			);
			return $return;
		}


	}

	public function update_record($upload_nota)
	{
		//Config syntax for trackrecord
		$userid					= $this->userid;
		$nama_keluarga	= $this->nama_keluarga;
		$nama_toko			= $this->nama_toko;
		$jumlah_belanja	= $this->total_belanja;
		$foto_nota			= $upload_nota['file']['file_name'];

		//Syntax to POST Record @ trackrecord
		$sendrecord = "INSERT INTO `trackrecord` (`userid`, `nama_keluarga`, `nama_toko`, `tanggal`, `jumlah_belanja`, `foto_nota`) VALUES (".$userid.", '".$nama_keluarga."', '".$nama_toko."', now(), ".$jumlah_belanja.", '".$foto_nota."')";

		$this->db->query($sendrecord);

		//Syntax to update Saldo Akhir and UPDATE Saldo Akhir @ daftar
   	$this->saldo_akhir = $this->saldo_sisa - $this->total_belanja;

		$update = "UPDATE `daftar` SET `saldo_sisa` =".$this->saldo_akhir." WHERE `userid` = ".$this->userid;

		$this->db->query($update);
	}
}
