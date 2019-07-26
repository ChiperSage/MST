<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Info<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li>Info</li>
			<!-- <li class="active">Data</li> -->
		</ol>
	</section>

	<section class="content">

    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Info</h3>
				<a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url('info/create') ?>"><i class="fa fa-plus-circle"></i> Tambah</a>
			</div>
      <!-- /.box-header -->
      <div class="box-body">

				<?php echo validation_errors(); ?>

        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th width="40">No.</th>
              <th>Info</th>
              <th width="70">Status</th>
              <th width="120">#</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=0; foreach ($info as $value) { $i++ ?>
              <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $value->info ?></td>
                <td><?php echo ($value->status == 1)? 'Aktif' : 'Tdk. Aktif' ;  ?></td>
                <td>
									<a class="btn btn-sm btn-success" href="<?php echo base_url('info/update/'.$value->id) ?>"><i class="fa fa-edit"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="<?php echo base_url('info/delete/'.$value->id) ?>" onClick="return confirm('Hapus data ini?')"><i class="fa fa-trash"></i> Hapus</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

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
  })
</script>
