<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/style/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/style/fontawesome/css/fontawesome-all.css">

    <!-- Custom CSS For Sidebar -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/style/custom/my.css">

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

      @media (max-width: 768px)
      {
        .h1
        {
          font-size: 25px;
        }
        .h2
        {
          font-size: 20px;
        }
        #sidebar {
            margin-left: -250px;
        }
        #sidebar.active {
            margin-left: 0px;
        }
      }
    </style>

    <title>Dashboard Page</title>
  </head>
  <body>
      <div class="wrapper">
        <!-- Sidebar Content -->
        <nav id="sidebar">
          <div class="sidebar-header">
            <h3>Dashboard</h3>
          </div>

          <ul class="list-unstyled components">
            <li class="active"><a href="">Dashboard</a></li>
            <li><a href="">Track Record Data</a></li>
            <li><a href="">Users List</a></li>
            <li><a href="">Management Profile</a></li>
            <div class="dropdown-divider"></div>
            <li><a href="">Logout</a></li>
          </ul>
        </nav>

        <!-- Sidebar Content -->
        <div id="content">
          <nav class="navbar navbar-expand navbar-light bg-light">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fas fa-align-justify"></i>
            </button>
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
              </ul>
          </nav>


          <div class="row">
            <!-- Total Data Pengungsi -->
            <div class="col-4">
            </div>

            <!-- Total Bantuan -->
            <div class="col-4">
            </div>

            <!-- Bantuan Yang Sudah Ditebus -->
            <div class="col-4">
            </div>
          </div>

          <div class="row">
            <!-- Graph -->
            <div class="col-12">
            </div>
          </div>

          <div class="row">
            <!-- Disk Space Usage For Nota -->
            <div class="col-6">
            </div>

            <!-- Nota Submitted -->
            <div class="col-6">
            </div>
          </div>
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js + Bootstrap JS -->
    <script src="<?php echo base_url();?>assets/style/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/style/bootstrap/js/bootstrap.bundle.js"></script>

    <!-- ChartJs Files -->
    <script src="<?php echo base_url();?>assets/style/chartjs/Chart.bundle.js"></script>
    <script src="<?php echo base_url();?>assets/style/chartjs/Chart.bundle.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
    </script>
  </body>
</html>
