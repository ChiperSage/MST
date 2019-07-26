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
        <h3 class="box-title"><b class="text-uppercase"><p>Realisasi Jenis Pengadaan (RUP) Tahun <?php echo date('Y') ?></p></b></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

<div class="btn-group">
	<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><i class="fa fa-print"></i> Cetak
	<span class="caret"></span>
<span class="sr-only">Toggle Dropdown</span>
</button>
<ul class="dropdown-menu" role="menu">
	<li><a target="_blank" href="<?php echo base_url() ?>cetak/rup?type=pdf">PDF</a></li>
	<li><a target="_blank" href="<?php echo base_url() ?>cetak/rup?type=image">Image</a></li>
</ul>
</div>

<br>

<div id="html-content-holder" class="table-responsive">

				<table class="table table-bordered table-sm">
					<thead>
						<tr>
							<th rowspan="2" style="vertical-align:middle">No.</th>
							<th class="text-center" width="200" rowspan="2" style="vertical-align:middle">Jenis Pengadaan</th>
							<th class="text-center" colspan="2" style="vertical-align:middle"><= Rp. 100 Juta</th>
							<th class="text-center" colspan="2"> > Rp. 100 <= Rp. 200 Juta</th>
							<th colspan="2" class="text-center"> > Rp. 200 <= Rp. 2.5 Miliar</th>
							<th colspan="2" class="text-center"> > Rp. 2.5 Miliar <= 50 Miliar</th>
							<th colspan="2" class="text-center"> > Rp. 50 Miliar <= 100 Miliar</th>
							<th colspan="2" class="text-center" style="vertical-align:middle">Swakelola</th>
						</tr>
						<tr>
							<th class="text-center">Paket</th>
							<th class="text-center">Pagu</th>
							<th class="text-center">Paket</th>
							<th class="text-center">Pagu</th>
							<th class="text-center">Paket</th>
							<th class="text-center">Pagu</th>
							<th class="text-center">Paket</th>
							<th class="text-center">Pagu</th>
							<th class="text-center">Paket</th>
							<th class="text-center">Pagu</th>
							<th class="text-center">Paket</th>
							<th class="text-center">Pagu</th>
						</tr>
					</thead>
					<tbody>

							<tr>
								<th colspan="2" class="text-uppercase text-center">Jumlah</th>
								<th class="text-center"><?php echo $total->tpaket ?></th>
								<th class="text-right"><?php echo number_format($total->tpagu) ?></th>
								<th class="text-center"><?php echo $total->tpaket2 ?></th>
								<th class="text-right"><?php echo number_format($total->tpagu2) ?></th>
								<th class="text-center"><?php echo $total->tpaket3 ?></th>
								<th class="text-right"><?php echo number_format($total->tpagu3) ?></th>
								<th class="text-center"><?php echo $total->tpaket4 ?></th>
								<th class="text-right"><?php echo number_format($total->tpagu4) ?></th>
								<th class="text-center"><?php echo $total->tpaket5 ?></th>
								<th class="text-right"><?php echo number_format($total->tpagu5) ?></th>
								<th class="text-center"><?php echo $total->tpaket6 ?></th>
								<th class="text-right"><?php echo number_format($total->tpagu6) ?></th>
							</tr>
							<tr>
								<td>1</td>
								<td class="text-uppercase">Barang</td>
								<td class="text-center"><?php echo $barang->tpaket ?></td>
								<td class="text-right"><?php echo number_format($barang->tpagu) ?></td>
								<td class="text-center"><?php echo $barang->tpaket2 ?></td>
								<td class="text-right"><?php echo number_format($barang->tpagu2) ?></td>
								<td class="text-center"><?php echo $barang->tpaket3 ?></td>
								<td class="text-right"><?php echo number_format($barang->tpagu3) ?></td>
								<td class="text-center"><?php echo $barang->tpaket4 ?></td>
								<td class="text-right"><?php echo number_format($barang->tpagu4) ?></td>
								<td class="text-center"><?php echo $barang->tpaket5 ?></td>
								<td class="text-right"><?php echo number_format($barang->tpagu5) ?></td>
								<td class="text-center"><?php echo $barang->tpaket6 ?></td>
								<td class="text-right"><?php echo number_format($barang->tpagu6) ?></td>
							</tr>
							<tr>
								<td>2</td>
								<td class="text-uppercase">Jasa Lainnya</td>
								<td class="text-center"><?php echo $jasa->tpaket ?></td>
								<td class="text-right"><?php echo number_format($jasa->tpagu) ?></td>
								<td class="text-center"><?php echo $jasa->tpaket2 ?></td>
								<td class="text-right"><?php echo number_format($jasa->tpagu2) ?></td>
								<td class="text-center"><?php echo $jasa->tpaket3 ?></td>
								<td class="text-right"><?php echo number_format($jasa->tpagu3) ?></td>
								<td class="text-center"><?php echo $jasa->tpaket4 ?></td>
								<td class="text-right"><?php echo number_format($jasa->tpagu4) ?></td>
								<td class="text-center"><?php echo $jasa->tpaket5 ?></td>
								<td class="text-right"><?php echo number_format($jasa->tpagu5) ?></td>
								<td class="text-center"><?php echo $jasa->tpaket6 ?></td>
								<td class="text-right"><?php echo number_format($jasa->tpagu6) ?></td>
							</tr>
							<tr>
								<td>3</td>
								<td class="text-uppercase">Pekerjaan Konstruksi</td>
								<td class="text-center"><?php echo $konstruksi->tpaket ?></td>
								<td class="text-right"><?php echo number_format($konstruksi->tpagu) ?></td>
								<td class="text-center"><?php echo $konstruksi->tpaket2 ?></td>
								<td class="text-right"><?php echo number_format($konstruksi->tpagu2) ?></td>
								<td class="text-center"><?php echo $konstruksi->tpaket3 ?></td>
								<td class="text-right"><?php echo number_format($konstruksi->tpagu3) ?></td>
								<td class="text-center"><?php echo $konstruksi->tpaket4 ?></td>
								<td class="text-right"><?php echo number_format($konstruksi->tpagu4) ?></td>
								<td class="text-center"><?php echo $konstruksi->tpaket5 ?></td>
								<td class="text-right"><?php echo number_format($konstruksi->tpagu5) ?></td>
								<td class="text-center"><?php echo $konstruksi->tpaket6 ?></td>
								<td class="text-right"><?php echo number_format($konstruksi->tpagu6) ?></td>
							</tr>
							<tr>
								<td>4</td>
								<td class="text-uppercase">Jasa Konsultansi</td>
								<td class="text-center"><?php echo $konsultansi->tpaket ?></td>
								<td class="text-right"><?php echo number_format($konsultansi->tpagu) ?></td>
								<td class="text-center"><?php echo $konsultansi->tpaket2 ?></td>
								<td class="text-right"><?php echo number_format($konsultansi->tpagu2) ?></td>
								<td class="text-center"><?php echo $konsultansi->tpaket3 ?></td>
								<td class="text-right"><?php echo number_format($konsultansi->tpagu3) ?></td>
								<td class="text-center"><?php echo $konsultansi->tpaket4 ?></td>
								<td class="text-right"><?php echo number_format($konsultansi->tpagu4) ?></td>
								<td class="text-center"><?php echo $konsultansi->tpaket5 ?></td>
								<td class="text-right"><?php echo number_format($konsultansi->tpagu5) ?></td>
								<td class="text-center"><?php echo $konsultansi->tpaket6 ?></td>
								<td class="text-right"><?php echo number_format($konsultansi->tpagu6) ?></td>
							</tr>

					</tbody>
				</table>

				<small class="pull-right text-bold"> <?php echo date('d M Y, H:i:s') ?> </small>

				</div>

      </div>
    </div>

	</section>

</div>
