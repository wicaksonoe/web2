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
                <div class="panel panel-info">
                  <div class="panel-heading">
                    <h2 class="panel-title">Profile</h2>
                  </div>
      						<div class="panel-body">

                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h2 class="panel-title">Belanja</h2>
                  </div>
      						<div class="panel-body">
                    <? if (validation_errors() == !NULL){ ?>
                      <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <? echo validation_errors(); ?>
                      </div>
                    <? }
                    if (isset($message)){ ?>
                      <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <? foreach($message as $s){ echo $s;} ?>
                      </div>
                    <? } ?>

                    <?php echo form_open(); ?>
                      <div class="form-group">
                        <?php echo form_label('Saldo Sisa','saldo_sisa'); ?>
                        <input type="text" name="saldo_sisa" value=<?php if (isset($data)){echo number_format($data);}?> class="form-control" id="saldo_sisa" disabled>
                      </div>
                      <div class="form-group">
                        <?php echo form_label('Total Belanja','total_belanja'); ?>
                        <input type="text" name="total_belanja" value="" class="form-control" id="total_belanja" placeholder="Total Belanja">
                      </div>
                      <div class="form-group">
                        <?php echo form_label('Nama Toko','nama_toko'); ?>
                        <input type="text" name="nama_toko" value="" class="form-control" id="nama_toko" placeholder="Nama Toko">
                      </div>
                      <?php echo form_submit('checkout','Belanja','class="btn btn-primary"'); ?>
                    <?php echo form_close(); ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel panel-info">
                  <div class="panel-heading">
                    <h2 class="panel-title">History Belanja</h2>
                  </div>
      						<div class="panel-body">
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
                            <th>Action</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <? $no = 1;
                              foreach ($user_history as $u) {
                                 echo '<td>'.$no++.'</td>';
                                 echo '<td>'.$u->nama_keluarga.'</td>';
                                 echo '<td>'.$u->nama_toko.'</td>';
                                 echo '<td>'.$u->tanggal.'</td>';
                                 echo '<td>'.$u->jumlah_belanja.'</td>';
                                 echo '<td><img src='.base_url().'/assets/res/nota/'.$u->foto_nota.' class="img-responsive" style="max-width:150px;"></td>';
                                 echo '<td>'.anchor('/edit/'.$u->userid, '<span class="glyphicon glyphicon-pencil"></span>', 'class="btn btn-warning btn-xs" type="button"').'   ';
                                 echo anchor('/delete/'.$u->userid, '<span class="glyphicon glyphicon-trash"></span>', 'class="btn btn-danger btn-xs" type="button"').'</td>';
                              }
                             ?>
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
