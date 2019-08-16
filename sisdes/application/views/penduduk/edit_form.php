<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Penduduk</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php $this->load->view('partials/header',FALSE); ?>
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dashboard/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css' ?>">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- main header / navbar -->
  <?php $this->load->view('partials/navbar', FALSE); ?>

  <!-- sidebar -->
  <?php $this->load->view('partials/sidebar', FALSE); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- modals box -->
      <?php $this->load->view('partials/modals', FALSE); ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              
           
            	<div class="card mb-3">
            		<div class="box">
					
						<a href="<?php echo site_url('penduduk/penduduk/') ?>"><i class="btn-success"></i> Back</a>
					</div>
					 </div>
					<div class="content">

						<form action="<?php base_url('penduduk/penduduk/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="no_ktp">No KTP *</label>
								<input class="form-control <?php echo form_error('no_ktp') ? 'is-invalid':'' ?>"
								 type="text" name="no_ktp" placeholder="No KTP" value="<?php echo $ktp->no_ktp ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('no_ktp') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="no_kk">No KK*</label>
								<input class="form-control <?php echo form_error('no_kk') ? 'is-invalid':'' ?>"
								 type="text" name="no_kk" min="0" placeholder="No KK" value="<?php echo $ktp->no_kk ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('no_kk') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="nama">Nama*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" min="0" placeholder="Nama" value="<?php echo $ktp->nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->
           
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
        </section>
        <!-- right col -->
  </div>
  <!-- /.content-wrapper -->
  <!-- footer -->
  <?php $this->load->view('partials/footer', FALSE); ?>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php  $this->load->view('partials/js.php', FALSE);?>
<!-- DataTables -->
<script src="<?php echo base_url().'assets/dashboard/bower_components/datatables.net/js/jquery.dataTables.min.js' ?>"></script>
<script src="<?php echo base_url().'assets/dashboard/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js' ?>"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
