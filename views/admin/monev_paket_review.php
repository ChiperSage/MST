<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			POKJA
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> POKJA</a></li>
      <li>Data</li>
		</ol>
	</section>

	<section class="content">

		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title">Review Paket</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">

				<div class="btn-group">
					<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><i class="fa fa-print"></i> Cetak
					<span class="caret"></span>
				<span class="sr-only">Toggle Dropdown</span>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li><a target="_blank" href="<?php echo base_url() ?>cetak/review?type=pdf">PDF</a></li>
				</ul>
				</div>

				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="30">No.</th>
							<th>Kode RUP</th>
							<th>Paket Pekerjaan</th>
							<th>Nama SKPA</th>
							<th>Nama KPA</th>
							<th>Kelompok</th>
							<th>Tgl. Review</th>
							<th>Tgl. Selesai</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=0; foreach ($review as $value) { $i++ ?>
							<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $value->kode_rup ?></td>
								<td>
									<?php //echo '<small class="text-danger">'.$value->nama_satker.'</small></br>'.;
									echo $value->nama_paket ?>
								</td>
								<td><?php echo $value->nama_satker ?></td>
								<td><?php echo $value->nama_kpa ?></td>
								<td><?php echo $value->sp_kelompok ?></td>
								<td><?php echo $value->tgl_review ?></td>
								<td><?php echo ($value->tgl_selesai != '0000-00-00') ? $value->tgl_selesai : '-' ; ?></td>
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

	$('document')

</script>
