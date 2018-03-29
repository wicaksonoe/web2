<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login Page</title>

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
                    <img alt="User Pic" src="<?php echo base_url(); ?>assets/res/logo_pmi.jpg" class="img-responsive center-block">
                  </div>
                  <div class="col-md-9 bagian-judul">
                    <h1>Profile Keluarga <?php echo $nama_keluarga; ?></h1>
                    <h1>dan Form Belanja</h1>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="panel panel-default">
      						<div class="panel-body">
                    <h2>Profile</h2>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="panel panel-default">
      						<div class="panel-body">
                    <h2>Belanja</h2>
                    <br>
                    <div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>
                    <?php echo form_open(); ?>
                      <div class="form-group">
                        <?php echo form_label('Saldo Sisa','saldo_sisa'); ?>
                        <input type="text" name="saldo_sisa" value=<?php if (isset($data)){echo number_format($data);}?> class="form-control" id="saldo_sisa" disabled>
                      </div>
                      <div class="form-group">
                        <?php echo form_label('Total Belanja','total_belanja'); ?>
                        <input type="text" name="total_belanja" value="" class="form-control" id="total_belanja" placeholder="Total Belanja" required>
                      </div>
                      <div class="form-group">
                        <?php echo form_label('Nama Toko','nama_toko'); ?>
                        <input type="text" name="nama_toko" value="" class="form-control" id="nama_toko" placeholder="Nama Toko" required>
                      </div>
                      <?php echo form_submit('checkout','Belanja','class="btn btn-primary"'); ?>
                    <?php echo form_close(); ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel panel-default">
      						<div class="panel-body">
                    <h2>History Belanja</h2>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Nama Keluarga</th>
                            <th>Nama Toko</th>
                            <th>Tanggal Transaksi</th>
                            <th>Jumlah Transaksi</th>
                            <th>Nota</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <th>1</th>
                            <th>Kadek Ini</th>
                            <th>Toko Kelontong</th>
                            <th>12-12-2012</th>
                            <th>12.000</th>
                            <th>Nota</th>
                          </tr>
                        </tbody>
                      </table>
                    </div>
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
