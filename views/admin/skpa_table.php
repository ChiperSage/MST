<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			SKN<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li>SKPA</li>
		</ol>
	</section>

	<section class="content">

    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">SKPA</h3>
				<a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url('skpa/create') ?>"><i class="fa fa-plus-circle"></i> Tambah</a>
			</div>
      <!-- /.box-header -->
      <div class="box-body">

				<?php echo $this->session->flashdata('msg') ?>

				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="40">No.</th>
							<th width="120">Kode Satker</th>
							<th>Nama</th>
							<th>Singkatan</th>
							<th width="120">#</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=0; foreach ($skpa as $value) { $i++ ?>
							<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $value->kode ?></td>
								<td><?php echo $value->nama  ?></td>
								<td class="text-uppercase"><?php echo $value->singkatan ?></td>
								<td>
									<a class="btn btn-sm btn-success" href="<?php echo base_url('skpa/update/'.$value->id) ?>"><i class="fa fa-edit"></i> Edit</a>
									<a class="btn btn-sm btn-danger" href="<?php echo base_url('skpa/delete/'.$value->id) ?>" onClick="return confirm('Hapus data ini?')"><i class="fa fa-trash"></i> Hapus</a>
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
