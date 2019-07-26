<style media="screen">
.nowrap{white-space: nowrap}
</style>

<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			MONEV
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li>Data</li>
			<li>Review</li>
		</ol>
	</section>

	<section class="content">

<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title text-capitalize">Data Review <?php echo $this->uri->segment(3) ?></h3>
		<!-- <a class="btn btn-primary btn-sm pull-right" href="<?php //echo base_url('json/create') ?>"><i class="fa fa-plus-circle"></i> Tambah</a> -->
  </div>
  <!-- /.box-header -->
  <!-- form start -->

  <div class="box-body">

		<p>
		<div class="btn-group">
			<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><i class="fa fa-print"></i> Cetak
			<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu" role="menu">
			<li><a target="_blank" href="<?php echo base_url() ?>monev/data_review/<?php echo $this->uri->segment(3) ?>?type=pdf">PDF</a></li>
			<!-- <li><a target="_blank" href="<?php //echo base_url() ?>monev/data_review/<?php //echo $this->uri->segment(3) ?>?type=image">Image</a></li> -->
		</ul>
		</div>
		</p>

		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr style="text-align:center;">
					<th width="30">No.</th>
					<th class="text-center nowrap">Kode RUP</th>
					<th class="text-center">Singkatan</th>
					<th class="text-center">Nama Paket</th>
					<th class="text-center">Nama Satker</th>
					<th class="text-center">Kelompok</th>
					<th class="text-center">Status</th>
					<th class="text-center">Keterangan</th>
				</tr>
			</thead>
			<tbody>
				<?php $i=0; foreach ($data_review as $val) { $i++ ?>
					<tr>
						<td><?php echo $i ?></td>
						<td class="text-capitalize"><?php echo $val->kode_rup ?></td>
						<td><?php echo $val->singkatan ?></td>
						<td><?php echo $val->nama_paket ?></td>
						<td><?php echo $val->nama_satker ?></td>
						<td><?php echo $val->sp_kelompok ?></td>
						<td><?php echo $val->status ?></td>
						<td><?php echo $val->ket ?></td>
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
