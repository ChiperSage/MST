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

				<br>

<div class="table-responsive">

<form class="form-inline" action="" method="get">

	<select name="tahun" class="form-control">
		<option value="0">Pilih Tahun</option>
		<option value="2019">2019</option>
		<option value="2020">2020</option>
		<option value="2021">2021</option>
		<option value="2022">2022</option>
		<option value="2023">2023</option>
	</select>

	<select name="triwulan" class="form-control">
		<option value="0">Pilih Triwulan</option>
		<option value="1">Triwulan I</option>
		<option value="2">Triwulan II</option>
		<option value="3">Triwulan III</option>
		<option value="4">Triwulan IV</option>
	</select>
	<button type="submit" class="btn btn-primary">Submit</button>

<?php if(isset($_GET['triwulan']) && isset($_GET['tahun'])){ ?>
<a class="btn btn-warning" href="<?php echo base_url() ?>monev/laporan_bps?tahun=<?php echo $_GET['tahun'] ?>&triwulan=<?php echo $_GET['triwulan'] ?>&type=pdf"><i class="fa fa-print"></i> Cetak</a>
<?php } ?>

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
							<th class="text-center" style="vertical-align:middle;">Jumlah Paket</th>
							<th class="text-center" style="vertical-align:middle;">Nilai Pengadaan (Rp)</th>
							<th class="text-center" style="vertical-align:middle;">Jumlah Paket</th>
							<th class="text-center" style="vertical-align:middle;">Nilai Pengadaan (Rp)</th>
							<th class="text-center" style="vertical-align:middle;">Jumlah Paket</th>
							<th class="text-center" style="vertical-align:middle;">Nilai Pengadaan (Rp)</th>
							<th class="text-center" style="vertical-align:middle;">Jumlah Paket</th>
							<th class="text-center" style="vertical-align:middle;">Nilai Pengadaan (Rp)</th>
							<th class="text-center" style="vertical-align:middle;">Jumlah Paket</th>
							<th class="text-center" style="vertical-align:middle;">Nilai Pengadaan (Rp)</th>
						</tr>
					</thead>
					<tbody>
						<?php
						if(isset($_GET['triwulan']) && $_GET['triwulan'] == 1){
						$i = 1; foreach ($rekap1 as $val) { ?>
						<tr>
							<td><?php echo $i++ ?></td>
							<td>
							<?php
							echo date('F',strtotime($val->akhir_pekerjaan))
							?>
							</td>
							<td class="text-center"><?php echo $val->tpaket_ks ?></td>
							<td class="text-right"><?php echo number_format($val->tpagu_ks) ?></td>
							<td class="text-center"><?php echo $val->tpaket_j ?></td>
							<td class="text-right"><?php echo number_format($val->tpagu_j) ?></td>
							<td class="text-center"><?php echo $val->tpaket_kt ?></td>
							<td class="text-right"><?php echo number_format($val->tpagu_kt) ?></td>
							<td class="text-center"><?php echo $val->tpaket_b ?></td>
							<td class="text-right"><?php echo number_format($val->tpagu_b) ?></td>
							<td></td>
							<td></td>
							<td class="text-center"><?php echo $val->tpaket_total ?></td>
							<td class="text-right"><?php echo number_format($val->tpagu_total) ?></td>
						</tr>
					<?php }}else{ $i=0; } ?>

						<?php
						$ii = 1;
						if(isset($_GET['triwulan']) && $_GET['triwulan'] == 1){
								$ii = 2;
						}

						foreach ($rekap2 as $val) { ?>
						<tr>
							<td><?php echo $ii++ ?></td>
							<td>
							<?php
							// $monthName = date("F", mktime(0, 0, 0, ($i-1), 10));
							// echo $monthName;

							echo date('F',strtotime($val->akhir_pekerjaan))
							?>
							</td>
							<td class="text-center"><?php echo $val->tpaket_ks ?></td>
							<td class="text-right"><?php echo number_format($val->tpagu_ks) ?></td>
							<td class="text-center"><?php echo $val->tpaket_j ?></td>
							<td class="text-right"><?php echo number_format($val->tpagu_j) ?></td>
							<td class="text-center"><?php echo $val->tpaket_kt ?></td>
							<td class="text-right"><?php echo number_format($val->tpagu_kt) ?></td>
							<td class="text-center"><?php echo $val->tpaket_b ?></td>
							<td class="text-right"><?php echo number_format($val->tpagu_b) ?></td>
							<td></td>
							<td></td>
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
