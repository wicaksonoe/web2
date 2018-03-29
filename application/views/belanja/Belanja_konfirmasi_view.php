<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/style/bootstrap/css/bootstrap.css">

    <style>
      @media (max-width: 575px)
      {
        .col-mbl
        {
          padding-top:30px;
        }
        .bagian-judul
        {
          text-align: center;
        }
      }
      @media (max-width: 767px)
      {
        .h1
        {
          font-size: 25px;
        }
        .h2
        {
          font-size: 20px;
        }
      }
    </style>

    <title>Konfirmasi Belanja</title>
  </head>
  <body>
    <div class="container" style="padding-top:15px">
      <div class="card">
        <div class="card-body">
          <div class="row justify-content-center align-items-center">
            <div class="col-sm-6">
              <img class="d-block mx-auto" style="max-height:250px" src="<?php echo base_url(); ?>/assets/res/logo_pmi.jpg">
            </div>
            <div class="col-sm-6">
              <h1 class="d-block mx-auto bagian-judul h1">Profile dan Form Belanja</h1>
              <h1 class="d-block mx-auto bagian-judul h2">Keluarga <?php echo $nama_keluarga; ?></h1>
            </div>
          </div>
          <div class="row" style="padding-top:30px">
            <div class="col-12">
              <div class="card border-info">
                <div class="card-header text-white bg-info"><strong>Konfirmasi Transaksi</strong></div>
                <div class="card-body">
                  <?php echo form_open("", array('enctype'=>'multipart/form-data')); ?>
                    <div class="form-group">
                      <?php echo form_label('Saldo Awal','saldo_sisa', 'class="font-weight-bold"'); ?>
                      <input type="hidden" name="saldo_sisa" value="<?php echo $data_saldo;?>" class="form-control" id="saldo_sisa" readonly>
                      <input type="text" name="saldo_sisa_view" value="<?php echo number_format($data_saldo);?>" class="form-control" id="saldo_sisa" readonly>
                    </div>
                    <div class="form-group">
                      <?php echo form_label('Total Belanja','total_belanja', 'class="font-weight-bold"'); ?>
                      <input type="hidden" name="total_belanja" value="<?php echo $data_belanja;?>" class="form-control" id="total_belanja" readonly>
                      <input type="text" name="total_belanja_view" value="<?php echo number_format($data_belanja);?>" class="form-control" id="total_belanja" readonly>
                    </div>
                    <div class="form-group">
                      <?php echo form_label('Nama Toko','nama_toko', 'class="font-weight-bold"'); ?>
                      <input type="text" name="nama_toko" value="<?php echo $nama_toko;?>" class="form-control" id="nama_toko" readonly>
                    </div>
                    <div class="form-group">
                      <?php echo form_label('Upload Nota','upload_nota', 'class="font-weight-bold"'); ?>
                      <?php echo form_upload('upload_nota_input','Upload Nota', 'class="form-control-file" id="total_belanja"')?>
                    </div>
                    <?php echo form_submit('konfirmasi','Konfirmasi','class="btn btn-primary"'); ?>
                    <?php echo form_submit('batal','Batal','class="btn btn-danger"') ?>
                  <?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js + Bootstrap JS -->
    <script src="<?php echo base_url();?>assets/style/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/style/bootstrap/js/bootstrap.bundle.js"></script>
  </body>
</html>
