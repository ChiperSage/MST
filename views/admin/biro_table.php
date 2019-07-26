<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Biro
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li>Biro</li>
			<li>Data</li>
		</ol>
	</section>

	<section class="content">

<div class="row">
  <div class="col-xs-12">

    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Data Biro</h3>
        <a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url('biro/create') ?>"><i class="fa fa-plus-circle"></i> Tambah</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <?php echo $this->session->flashdata('msg') ?>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th width="60">No.</th>
              <th>Biro</th>
							<th>Keterangan</th>
              <th width="120">#</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=0; foreach ($biro as $value) { $i++ ?>
              <tr>
								<td><?php echo $i ?></td>
                <td><?php echo $value->biro_nama ?></td>
                <td><?php echo $value->biro_keterangan ?></td>
                <td>
									<a class="btn btn-pencil btn-success btn-sm" href="<?php echo site_url('biro/update/'.$value->biro_id) ?>"><i class="fa fa-edit"></i> Edit</a>
									<a class="btn btn-trash btn-danger btn-sm" href="<?php echo site_url('biro/delete/'.$value->biro_id) ?>" onClick="return confirm('Hapus data ini?')"><i class="fa fa-trash"></i> Hapus</a>
								</td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>

</section>
</div>

<!-- DataTables -->
<script src="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

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
