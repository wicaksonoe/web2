<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login Page</title>

    <!-- Grocery CRUD required files -->
    <?php
    foreach($css_files as $file): ?>
    	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>


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
                    <h1>Dashboard Trackrecord Belanja</h1>
                    <h2>vadywibdjbawiud</h2>
                  </div>
              </div>
              <div class="col-md-12">
                <div class="panel panel-default">
      						<div class="panel-body">
                    <?php echo $output; ?>
                  </div>
                </div>
              </div>
						</div>
					</div>
				</div>
			</div>
		</div>

    <!-- grocery_CRUD script -->
    <?php foreach($js_files as $file): ?>
      <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>assets/style/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/style/js/bootstrap.min.js"></script>
  </body>
</html>
