              <div class="col-md-12">
                <div class="panel panel-default">
      						<div class="panel-body">
                    <h2>History Belanja</h2>
                    <?php echo $output; ?>
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

    <!-- Grocery CRUD required files -->
    <?php
    foreach($css_files as $file): ?>
      <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
    <?php foreach($js_files as $file): ?>
      <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
    
  </body>
</html>
