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

    <title>Cari Data</title>
  </head>
  <body>
    <div class="container" style="padding-top:15px">
      <div class="card">
        <div class="card-body">
          <div class="row justify-content-center align-items-center">
            <div class="col-sm-6">
              <img class="d-block mx-auto" style="max-height:250px" src="<? echo base_url(); ?>/assets/res/logo_pmi.jpg">
            </div>
            <div class="col-sm-6">
              <h2 class="d-block mx-auto bagian-judul">Selamat Datang Di Web Portal Data Pengungsian Gn. Agung</h2>
              <h4 class="d-block mx-auto bagian-judul">Silahkan Login Untuk Melanjutkan</h4>
            </div>
          </div>
          <div class="row" style="padding-top:30px">
            <div class="col-12">
              <?php echo form_open(); ?>
							  <div class="form-group">
									<?php echo form_label('Username','username', 'class="font-weight-bold"'); ?>
									<?php echo form_input('username','', 'class="form-control" id="username" placeholder="Username"')?>
							  </div>
							  <div class="form-group">
									<?php echo form_label('Password','password', 'class="font-weight-bold"'); ?>
									<?php echo form_password('password','', 'class="form-control" id="password" placeholder="Password"')?>
							  </div>
								<?php echo form_submit('login','Login','class="btn btn-primary"'); ?>
							<?php echo form_close(); ?>
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
