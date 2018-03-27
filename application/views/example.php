<!DOCTYPE html>
<html>
	<?php
	/*		if (isset($this->session->userdata['logged_in'])){
					$hasilsession = $this->session->userdata();

					foreach($hasilsession as $result) {
							echo $result.'<br>';
					}
			} else {
				$hasilsession = $this->session->userdata();
				redirect('login');
			}
	*/
	?>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>
	<div>
		<a href='<?php echo site_url('examples/customers_management')?>'>Customers</a> |
		<a href='<?php echo site_url('examples/orders_management')?>'>Orders</a> |
		<a href='<?php echo site_url('examples/products_management')?>'>Products</a> |
		<a href='<?php echo site_url('examples/offices_management')?>'>Offices</a> |
		<a href='<?php echo site_url('examples/employees_management')?>'>Employees</a> |
		<a href='<?php echo site_url('examples/film_management')?>'>Films</a> |
		<a href='<?php echo site_url('examples/multigrids')?>'>Multigrid [BETA]</a>

	</div>
	<div style='height:20px;'></div>
    <div>
		<?php //echo $output; ?>
    </div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="<?php echo base_url(); ?>index.php/login/logout">Logout</a>
			</div>
		</div>
	</div>
</body>
</html>
