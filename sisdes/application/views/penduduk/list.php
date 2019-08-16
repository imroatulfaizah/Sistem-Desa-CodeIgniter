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
              <div class="card-header">
            <a href="<?php echo site_url('penduduk/penduduk/add') ?>"><i class="fas fa-plus"></i> Add New</a>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nomor KTP</th>
                  <th>Nomor KK</th>
                  <th>Nama</th>
                  <th>Action</th>
                </tr>
                <tbody>
                  <?php foreach ($ktp as $ktp): ?>
                  <tr>
                    <td width="150">
                      <?php echo $ktp->no_ktp ?>
                    </td>
                    <td>
                      <?php echo $ktp->no_kk ?>
                    </td>
                     <td>
                      <?php echo $ktp->nama ?>
                    </td>
                    <td width="250">
                      <a href="<?php echo site_url('penduduk/penduduk/edit/'.$ktp->no_ktp) ?>"
                       class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                      <a onclick="deleteConfirm('<?php echo site_url('penduduk/penduduk/delete/'.$ktp->no_ktp) ?>')"
                       href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                       <a href="<?php echo site_url('surat/'.$ktp->no_ktp) ?>"
                       class="btn btn-small"><i class="fas fa-print"></i> PRINT</a>
                    </td>
                  </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
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

<script>
  function deleteConfirm(url){
  $('#btn-delete').attr('href', url);
  $('#deleteModal').modal();
}
</script>
</body>
</html>
