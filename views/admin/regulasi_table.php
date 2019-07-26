<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Regulasi
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> POKJA</a></li>
      <li>Regulasi</li>
		</ol>
	</section>

	<section class="content">

<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Dokumen Regulasi</h3>
		<a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url('regulasi/upload') ?>"><i class="fa fa-upload"></i> Upload</a>
  </div>
  <!-- /.box-header -->
  <!-- form start -->

  <div class="box-body">

		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th width="30">No.</th>
					<th width="100">Nama</th>
					<th>Keterangan</th>
					<th width="70">#</th>
				</tr>
			</thead>
			<tbody>
				<?php $i=0; foreach ($regulasi as $value) { $i++ ?>
					<tr>
						<td><?php echo $i ?></td>
						<td class="text-capitalize"><?php echo $value->nama ?></td>
						<td><?php echo $value->keterangan ?></td>
						<td>
							<?php //if(file_exists(base_url($value->file_path))){ ?>
							<a class="btn btn-warning btn-sm" target='_blank' href="<?php echo site_url($value->file_path) ?>"><i class="fa fa-download"></i> Download</a>
							<?php //} ?>
							<!-- <a class="btn btn-trash btn-danger btn-sm" href="<?php //echo site_url('json/delete/'.$value->id) ?>" onClick="return confirm('Hapus data ini?')"><i class="fa fa-trash"></i> Hapus</a> -->
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>

	</div>

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
  })
</script>
