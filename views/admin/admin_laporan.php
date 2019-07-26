<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Admin
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li class="active">Laporan</li>
		</ol>
	</section>

	<section class="content">

    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Laporan</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

<div class="table-responsive">

				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No.</th>
							<th class="text-center" width="200">SKPA</th>
							<th class="text-center" colspan="2" width="250">Paket Masuk</th>
							<th colspan="4" class="text-center bg-red">Belum Tayang</th>
							<th colspan="4" class="text-center bg-yellow">Tayang</th>
							<th colspan="4" class="text-center bg-green">Umum Pemenang</th>
							<th colspan="4" class="text-center" style="background-color:#CCC;">Paket Batal</th>
						</tr>
						<tr>
							<th></th>
							<th></th>
							<th>Paket</th>
							<th>Rp.</th>
							<th>KT</th>
							<th>KS</th>
							<th>B</th>
							<th>J</th>
							<th>KT</th>
							<th>KS</th>
							<th>B</th>
							<th>J</th>
							<th>KT</th>
							<th>KS</th>
							<th>B</th>
							<th>J</th>
							<th>KT</th>
							<th>KS</th>
							<th>B</th>
							<th>J</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=0; foreach ($lap as $value) { $i++ ?>
							<tr>
								<td><?php echo $i ?></td>
								<td class="text-uppercase"><?php echo $value->singkatan ?></td>
								<td><?php //echo $value->advokasi_tanggal ?></td>
								<td><?php //echo $value->advokasi_nomorsurat ?></td>
								<td><?php //echo $value->advokasi_lembaga ?></td>
								<td><?php //echo $value->advokasi_lembaga ?></td>
								<td><?php //echo $value->advokasi_lembaga ?></td>
								<td><?php //echo $value->advokasi_lembaga ?></td>
								<td><?php //echo $value->advokasi_lembaga ?></td>
								<td><?php //echo $value->advokasi_lembaga ?></td>
								<td><?php //echo $value->advokasi_lembaga ?></td>
								<td><?php //echo $value->advokasi_lembaga ?></td>
								<td><?php //echo $value->advokasi_lembaga ?></td>
								<td><?php //echo $value->advokasi_lembaga ?></td>
								<td><?php //echo $value->advokasi_lembaga ?></td>
								<td><?php //echo $value->advokasi_lembaga ?></td>
								<td><?php //echo $value->advokasi_lembaga ?></td>
								<td><?php //echo $value->advokasi_alamat ?></td>
								<td><?php //echo $value->paket_nama ?></td>
								<td>
									<!-- <a class="btn btn-pencil btn-success btn-sm" href="<?php //echo site_url('advokasi/update/'.$value->advokasi_id) ?>"><i class="fa fa-edit"></i> Edit</a> -->
									<!-- <a class="btn btn-trash btn-danger btn-sm" href="<?php //echo site_url('advokasi/delete/'.$value->advokasi_id) ?>" onClick="return confirm('Hapus data ini?')"><i class="fa fa-trash"></i> Hapus</a> -->
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>

				</div>

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
