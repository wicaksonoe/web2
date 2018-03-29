<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS + Font Awesome Icons CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/style/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/style/fontawesome/css/fontawesome-all.css">

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

    <title>Detail Transaksi</title>
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
              <h1 class="d-block mx-auto bagian-judul h1">Detail Transaksi</h1>
              <h1 class="d-block mx-auto bagian-judul h2">Transaksi No: <?php echo $nota->userid.'-'.$nota->id;?></h1>
            </div>
          </div>
          <div class="row" style="padding-top:30px">
            <div class="col-12">
              <div class="card border-info">
                <div class="card-header text-white bg-info"><strong>Detail Transaksi</strong></div>
                <div class="card-body">
                  <form>
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Nomor Transaksi</label>
                      <label class="col-sm-8 col-form-label"><?php echo $nota->id; ?></label>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">User ID</label>
                      <label class="col-sm-8 col-form-label"><?php echo $nota->userid; ?></label>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Nama Kepala Keluarga</label>
                      <label class="col-sm-8 col-form-label"><?php echo $nota->nama_keluarga; ?></label>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Nama Toko</label>
                      <label class="col-sm-8 col-form-label"><?php echo $nota->nama_toko; ?></label>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Tanggal Transaksi</label>
                      <label class="col-sm-8 col-form-label"><?php echo $nota->tanggal; ?></label>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Jumlah Transaksi</label>
                      <label class="col-sm-8 col-form-label">Rp. <?php echo number_format($nota->jumlah_belanja); ?></label>
                    </div>
                    <div class="form-group row">
                      <label class="align-self-center col-sm-4 col-form-label">
                        <span class="align-middle">Foto Nota</span>
                      </label>
                      <label class="col-sm-8 col-form-label"><img src="<?php echo base_url().'assets/res/nota/'.$nota->foto_nota; ?>" style="max-width:300px; max-height:300px"></label>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-4">
                        <?php echo anchor('./belanja/view/'.$nota->userid,'Kembali','class="btn btn-danger"'); ?>
                      </div>
                    </div>
                  </form>
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
