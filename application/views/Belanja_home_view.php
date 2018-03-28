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
              <h1 class="d-block mx-auto bagian-judul h1">Profile dan Form Belanja</h1>
              <h1 class="d-block mx-auto bagian-judul h2">Cari Data</h1>
            </div>
          </div>
          <div class="row" style="padding-top:30px">
            <div class="col-12">
              <div class="card border-info">
                <h5 class="card-header text-white bg-info text-center"><strong>Cari Data Penerima Bantuan</strong></h5>
                <div class="card-body">

                  <?php echo form_open(); ?>
                    <div class="form-group" >
                         <?php
                          if (validation_errors() == !NULL){
                            echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">'.validation_errors().'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                          }
                          if (isset($erroruserid)){
                            echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">'.$erroruserid.'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                          }
                        ?>

                      <input type="text" name="userid" value="" class="form-control text-center" id="userid" placeholder="Masukan User ID Yang Akan Dicari">
                    </div>
                    <?php echo form_submit('cari_data','Cari','class="btn btn-primary form-control text-center"'); ?>
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
