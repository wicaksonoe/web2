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

    <title>Halaman Belanja</title>
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
              <h1 class="d-block mx-auto bagian-judul h2">Keluarga <?php echo $nama_keluarga; ?></h1>
            </div>
          </div>
          <div class="row" style="padding-top:20px">
            <div class="col-sm-6">
              <div class="card border-info">
                <div class="card-header text-white bg-info"><strong>Profile</strong></div>
                <div class="card-body">
                  Profile Here
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-mbl">
              <div class="card border-primary">
                <div class="card-header text-white bg-primary"><strong>Form Belanja</strong></div>
                <div class="card-body">

                  <?php if (validation_errors() == !NULL){ ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <?php echo '<strong>'.validation_errors().'</strong>'; ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <?php }
                  if (isset($message)){ ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <?php foreach($message as $s){ echo '<strong>'.$s.'</strong>';} ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <?php } ?>

                  <?php echo form_open();?>
                    <div class="form-group">
                      <?php echo form_label('Saldo Sisa','saldo_sisa', 'class="font-weight-bold"'); ?>
                      <input type="text" name="saldo_sisa" value="<?php if (isset($data)){echo number_format($data);}?>" class="form-control" id="saldo_sisa" disabled>
                    </div>
                    <div class="form-group">
                      <?php echo form_label('Total Belanja','total_belanja', 'class="font-weight-bold"'); ?>
                      <input type="text" name="total_belanja" value="" class="form-control" id="total_belanja" placeholder="Total Belanja">
                    </div>
                    <div class="form-group">
                      <?php echo form_label('Nama Toko','nama_toko', 'class="font-weight-bold"'); ?>
                      <input type="text" name="nama_toko" value="" class="form-control" id="nama_toko" placeholder="Nama Toko">
                    </div>
                    <?php echo form_submit('checkout','Belanja','class="btn btn-primary"'); ?>
                  <?php echo form_close();?>
                </div>
              </div>
            </div>
          </div>
          <div class="row" style="padding-top:30px">
            <div class="col-12">
              <div class="card border-info">
                <div class="card-header text-white bg-info"><strong>History Transaksi</strong></div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th scope="col">No.</th>
                          <th scope="col">Nama Keluarga</th>
                          <th scope="col">Nama Toko</th>
                          <th scope="col">Tanggal Transaksi</th>
                          <th scope="col">Jumlah Transaksi</th>
                          <th scope="col">Nota</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1;
                          foreach ($user_history as $u) {
                            echo '<tr>';
                            echo '<th class="align-middle">'.$no++.'</td>';
                            echo '<td class="align-middle">'.$u->nama_keluarga.'</td>';
                            echo '<td class="align-middle">'.$u->nama_toko.'</td>';
                            echo '<td class="align-middle">'.$u->tanggal.'</td>';
                            echo '<td class="align-middle">'.$u->jumlah_belanja.'</td>';
                            echo '<td class="align-middle">'.anchor('/data/view/'.$u->id, '<span class="fas fa-eye"></span>', 'class="btn btn-info btn-sm"').'</td>';
                            echo '</tr>';
                          }
                         ?>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js + Bootstrap JS -->
    <script src="<?php echo base_url();?>assets/style/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/style/bootstrap/js/bootstrap.bundle.js"></script>
  </body>
</html>
