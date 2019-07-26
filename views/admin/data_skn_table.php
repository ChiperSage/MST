<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			SKN<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Pokja</a></li>
      <li>SKN</li>
		</ol>
	</section>

	<section class="content">

    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">SKN</h3>
				<a class="btn btn-danger btn-sm pull-right" onClick="return confirm('Hapus data ini?')" href="<?php echo base_url('data_skn/delete_all') ?>"><i class="fa fa-trash"></i> Hapus Semua</a>
			</div>
      <!-- /.box-header -->
      <div class="box-body">

				<?php echo $this->session->flashdata('msg') ?>
				<div class="table-responsive">

				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No.</th>
							<th>Perusahaan</th>
							<th>Ekuitas</th>
							<th>Nama Paket</th>
							<th>Lokasi</th>
							<th>Kontrak</th>
							<th>Progres</th>
							<th>Total</th>
							<th>SKN</th>
							<th>Waktu Pekerjaan</th>
							<th>Status</th>
							<th>Ket.</th>
							<th width="100">#</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=0; foreach ($skn as $value) { $i++ ?>
							<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $value->nama_perusahaan.' </br><span class="text-danger small">NPWP: '.$value->npwp.'</span>' ?></td>
								<td class="text-right"><?php echo number_format($value->ekuitas) ?></td>
								<td><?php echo (empty($value->jnama_paket)) ? $value->nama_paket : $value->jnama_paket ; ?></td>
								<td class="text-right"><?php echo $value->lokasi ?></td>
								<td class="text-right"><?php echo number_format($value->nilai_paket) ?></td>
								<td class="text-right"><?php echo number_format($value->nilai_progres) ?></td>
								<td class="text-right"><?php echo number_format($value->total) ?></td>
								<td class="text-right"><?php echo number_format($value->skn) //$skn = ((($value->ekuitas * 0.6) * 7) - $value->tnilai_paket); ?></td>
								<td><?php echo $value->awal_pekerjaan.' '.$value->akhir_pekerjaan ?></td>
								<td><?php echo ($value->skn < 0) ? '<span class="text-danger">Gugur</span>' : '' ; ?></td>
								<td><?php echo (date('Y-m-d') > $value->akhir_pekerjaan) ? '<span class="text-danger">Pekerjaan Berakhir</span>' : ''; ?></td>
								<td>
									<?php if(date('Y-m-d') < $value->akhir_pekerjaan){ ?>
									<!-- <a class="btn btn-sm btn-success" href="<?php echo base_url('skn/update/'.$value->id) ?>"><i class="fa fa-edit"></i> Edit</a> -->
									<?php
									}
									?>
									<a class="btn btn-sm btn-danger" href="<?php echo base_url('data_skn/delete/'.$value->id) ?>" onClick="return confirm('Hapus data ini?')"><i class="fa fa-trash"></i> Hapus</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>

				</div>

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
