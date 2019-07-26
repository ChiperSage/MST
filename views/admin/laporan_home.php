<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dashboard
			<small>Laporan</small>
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

	<form class="form-horizontal" method="post">

	 <?php echo validation_errors(); ?>

	 	 <div class="form-group">
	 		<label for="inputEmail3" class="col-sm-2 control-label">Jenis Laporan</label>
	 		<div class="col-sm-4">
				<?php
				$field = array(''=>'Pilih Laporan',
					'lap_paketblmtayang'=>'Paket Blm Tayang',
					'lap_paketsp'=>'Paket SP',
					'lap_pakettayang'=>'Paket Tayang',
					'lap_paketbatal'=>'Paket Batal',
					'lap_jenispegadaan'=>'Realisasi Jenis Pengadaan',
					'lap_skpa'=>'Realisasi SKPA',
					'lap_kontrolpokja'=>'Tabel Kontrol Pokja',
					'lap_advokasi'=>'Masalah Advokasi',
					'lap_lhp'=>'LHP');
				echo form_dropdown('jnslaporan', $field, '', 'class="form-control"')
				?>
	 		</div>
	 	</div>

	 <div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Tanggal Mulai</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" name="tgl1" value="<?php echo date('Y-').'01-01' ?>">
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Tanggal Akhir</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" name="tgl2" value="<?php echo date('Y-m-d', strtotime('last day of december')) ?>">
		</div>
	</div>

	<div class="form-group">
		<label for="inputPassword3" class="col-sm-2 control-label"></label>
		<div class="col-sm-10">
			<button type="submit" class="btn btn-primary"><i class="fa fa-print"></i> Tampilkan</button>
		</div>
	</div>

	</form>

			</div>
		</div>

  </section>

</div>
