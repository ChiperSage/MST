<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			SKP<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Pokja</a></li>
      <li>SKP</li>
		</ol>
	</section>

	<section class="content">

    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">SKP</h3>
				<a class="btn btn-danger btn-sm pull-right" onClick="return confirm('Hapus semua data?')" href="<?php echo base_url('data_skp/delete_all') ?>"><i class="fa fa-trash"></i> Hapus Semua</a>
			</div>
      <!-- /.box-header -->
      <div class="box-body">

				<?php echo $this->session->flashdata('msg') ?>

				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="40">No.</th>
							<th>NPWP</th>
							<th>Perusahaan</th>
							<!-- <th>SKT/SKA</th> -->
							<th>Nama Paket</th>
							<th>Pagu</th>
							<th>Nilai Paket</th>
							<th width="50">#</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=0; foreach ($skp as $value) { $i++ ?>
							<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $value->npwp ?></td>
								<td><?php echo $value->nama_perusahaan  ?></td>
								<!-- <td><?php echo $value->skt ?></td> -->
								<td><?php echo $value->nama_paket ?></td>
								<td><?php echo number_format($value->pagu_rup) ?></td>
								<td><?php echo number_format($value->nilai_paket) ?></td>
								<td>
									<a class="btn btn-sm btn-danger" href="<?php echo base_url('data_skp/delete/'.$value->id) ?>" onClick="return confirm('Hapus data ini?')"><i class="fa fa-trash"></i> Hapus</a>
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
