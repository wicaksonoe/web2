<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Konfirmasi Belanja</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/style/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      @media (max-width: 991px) {
        .img-responsive{
          max-width: 75%;
        }
        .bagian-judul{
          text-align: center;
          margin-top: 10px;
          margin-bottom: 35px;
        }
        .h1, h1{
          font-size: 20px;
        }
        .h2, h2{
          font-size: 15px;
        }
      }
      @media (min-width:992px) and (max-width:1199px) {
        .bagian-judul{
          margin-top: 45px;
        }
      }
      @media (min-width:1200px) {
        .bagian-judul{
          margin-top: 75px;
        }
      }
    </style>
  </head>
  <body>
    <div class="container" style="margin-top:20px;">
      <div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body">
              <div class="col-md-12">
                  <div class="col-md-3">
                    <a href = "<?php echo base_url().'belanja'; ?>">
                      <img alt="User Pic" src="<?php echo base_url(); ?>assets/res/logo_pmi.jpg" class="img-responsive center-block">
                    </a>
                  </div>
                  <div class="col-md-9 bagian-judul">
                    <h1>Profile Keluarga <?php echo $nama_keluarga; ?></h1>
                    <h1>dan Form Belanja</h1>
                  </div>
              </div>
              <div class="col-md-12">
                <div class="panel panel-default">
      						<div class="panel-body">
                    <h2>Konfirmasi Belanja</h2>
                    <br>

                    <?php echo form_open("", array('enctype'=>'multipart/form-data')); ?>
                      <div class="form-group">
                        <?php echo form_label('Saldo Awal','saldo_sisa'); ?>
                        <input type="hidden" name="saldo_sisa" value=<?php echo $data_saldo;?> class="form-control" id="saldo_sisa" readonly>
                        <input type="text" name="saldo_sisa_view" value=<?php echo number_format($data_saldo);?> class="form-control" id="saldo_sisa" readonly>
                      </div>
                      <div class="form-group">
                        <?php echo form_label('Total Belanja','total_belanja'); ?>
                        <input type="hidden" name="total_belanja" value=<?php echo $data_belanja;?> class="form-control" id="total_belanja" readonly>
                        <input type="text" name="total_belanja_view" value=<?php echo number_format($data_belanja);?> class="form-control" id="total_belanja" readonly>
                      </div>
                      <div class="form-group">
                        <?php echo form_label('Nama Toko','nama_toko'); ?>
                        <input type="text" name="nama_toko" value="<?php echo $nama_toko;?>" class="form-control" id="nama_toko" readonly>
                      </div>
                      <div class="form-group">
                        <?php echo form_label('Upload Nota','upload_nota'); ?>
                        <?php echo form_upload('upload_nota_input','Upload Nota', 'class="" id="total_belanja"')?>
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
		</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>assets/style/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/style/js/bootstrap.min.js"></script>
  </body>
</html>
