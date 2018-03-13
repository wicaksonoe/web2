<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Upload View</title>

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
                    <h1>Profile Keluarga</h1>
                    <h1>dan Form Belanja</h1>
                  </div>
              </div>
              <div class="col-md-6 col-md-offset-3" style="align-center">
                <div class="panel panel-default">
      						<div class="panel-body">
                    <div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>
                    <?php echo form_open("upload/doupload", array('enctype'=>'multipart/form-data')); ?>
                      <div class="form-group">
                        <?php echo form_label('Upload Foto','upload_foto') ?>
                        <input type="file" name="upload_foto">
                      </div>
                      <?php echo form_submit('upload','Upload','class="btn btn-primary"') ?>
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
