<style>
	.text-vertical{vertical-align:middle;}
</style>

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			MONEV
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Monev</a></li>
      <li class="active">Laporan</li>
		</ol>
	</section>

	<section class="content">

    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title"><b class="text-uppercase">Rekap Data Lelang Berdasarkan Jenis Pengadaan T.A <?php echo date('Y') ?></b></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

				<!-- <div class="btn-group">
					<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><i class="fa fa-print"></i> Cetak
					<span class="caret"></span>
				<span class="sr-only">Toggle Dropdown</span>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li><a target="_blank" href="<?php //echo base_url() ?>monev_apbn/index?type=pdf">PDF</a></li>
					<li><a target="_blank" href="<?php //echo base_url() ?>monev_apbn/index?type=image">Image</a></li>
				</ul>
				</div> -->
				<br>

<div class="table-responsive">

<form class="form-inline" action="" method="get">

	<select name="triwulan" class="form-control">
		<option value="0">Pilih Triwulan</option>
		<option value="1">Triwulan I 2019</option>
		<option value="2">Triwulan II 2019</option>
		<option value="3">Triwulan III 2019</option>
		<option value="4">Triwulan IV 2019</option>
	</select>
	<button type="submit" class="btn btn-primary">Submit</button>

</form>

	<small class="pull-right text-bold"> <?php echo date('d M Y, H:i:s') ?> </small>

				<table class="table table-bordered table-striped">
					<thead>
						<tr style="vertical-align:middle;">
							<th rowspan="2" class="text-center" style="vertical-align:middle;">No.</th>
							<th rowspan="2" class="text-center" style="vertical-align:middle;">BULAN</th>
							<th colspan="2" class="text-center" style="vertical-align:middle;">Jasa Konsultansi Badan Usaha</th>
							<th colspan="2" class="text-center" style="vertical-align:middle;">Jasa Lainnya</th>
							<th colspan="2" class="text-center" style="vertical-align:middle;">Pekerjaan Konstruksi</th>
							<th colspan="2" class="text-center" style="vertical-align:middle;">Pengadaan Barang</th>
							<th colspan="2" class="text-center" style="vertical-align:middle;">Jasa Konsultansi</th>
							<th rowspan="2" class="text-center" style="vertical-align:middle;">Total Paket</th>
							<th rowspan="2" class="text-center" style="vertical-align:middle;">Total Nilai Pengadaan (Rp)</th>
						</tr>
						<tr>
							<th style="vertical-align:middle;">Jumlah Paket</th>
							<th style="vertical-align:middle;">Nilai Pengadaan (Rp)</th>
							<th style="vertical-align:middle;">Jumlah Paket</th>
							<th style="vertical-align:middle;">Nilai Pengadaan (Rp)</th>
							<th style="vertical-align:middle;">Jumlah Paket</th>
							<th style="vertical-align:middle;">Nilai Pengadaan (Rp)</th>
							<th style="vertical-align:middle;">Jumlah Paket</th>
							<th style="vertical-align:middle;">Nilai Pengadaan (Rp)</th>
							<th style="vertical-align:middle;">Jumlah Paket</th>
							<th style="vertical-align:middle;">Nilai Pengadaan (Rp)</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; foreach ($rekap as $val) { ?>
						<tr>
							<td><?php echo $i++ ?></td>
							<td>
							<?php
							// $monthName = date("F", mktime(0, 0, 0, ($i-1), 10));
							// echo $monthName;

							echo date('F',strtotime($val->akhir_pekerjaan))
							?>
							</td>
							<td></td>
							<td></td>
							<td class="text-center"><?php echo $val->tpaket_j ?></td>
							<td class="text-right"><?php echo number_format($val->tpagu_j) ?></td>
							<td class="text-center"><?php echo $val->tpaket_kt ?></td>
							<td class="text-right"><?php echo number_format($val->tpagu_kt) ?></td>
							<td class="text-center"><?php echo $val->tpaket_b ?></td>
							<td class="text-right"><?php echo number_format($val->tpagu_b) ?></td>
							<td class="text-center"><?php echo $val->tpaket_ks ?></td>
							<td class="text-right"><?php echo number_format($val->tpagu_ks) ?></td>
							<td class="text-center"><?php echo $val->tpaket_total ?></td>
							<td class="text-right"><?php echo number_format($val->tpagu_total) ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>

				</div>
      </div>
    </div>
	</section>
</div>
