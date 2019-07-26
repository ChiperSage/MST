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
        <h3 class="box-title"><b class="text-uppercase">Realisasi Proses Kinerja Pokja Tender APBA <?php echo date('Y') ?></b></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

				<div class="btn-group">
					<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><i class="fa fa-print"></i> Cetak
					<span class="caret"></span>
				<span class="sr-only">Toggle Dropdown</span>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li><a target="_blank" href="<?php echo base_url() ?>monev/view_pokja?type=pdf">PDF</a></li>
					<li><a target="_blank" href="<?php echo base_url() ?>monev/view_pokja?type=image">Image</a></li>
				</ul>
				</div>
				<br>

<div class="table-responsive">

	<small class="pull-right text-bold"> <?php echo date('d M Y, H:i:s') ?> </small>

	<script src="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/jquery/dist/jquery.min.js"></script>

	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

	<script>
		function detail_paket(data)
		{
			var data = data.getAttribute('data-id');
			var xhttp = new XMLHttpRequest(this);

			xhttp.onreadystatechange = function() {
				if(this.readyState == 4 && this.status == 200){
					var detail_paket = this.responseText;
					document.getElementById('detail_paket').innerHTML = detail_paket;
				}
			};
			xhttp.open("GET", "<?php echo base_url('monev/view_pokja_popup/') ?>" + data, true);
			xhttp.send();
		}
	</script>

	<!-- DataTables -->
	<script src="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<!-- DataTables -->
	<script src="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

				<table class="table table-bordered table-striped">
					<thead>
						<tr style="vertical-align:middle">
							<th rowspan="2" class="text-center" style="vertical-align:middle">No.</th>

							<th class="text-center" width="200" rowspan="2" style="vertical-align:middle">POKJA</th>
							<th class="text-center" colspan="2" width="200" style="vertical-align:middle">Jumlah Paket</br></th>

							<th class="text-center bg-primary" colspan="4">Paket SP <p><?php echo $total[0]->tsp ?></p></th>
							<th class="text-center" colspan="4" style="background-color:#CCC;">Review <p><?php echo $total[0]->review_total ?></p></th>
							<th colspan="4" class="text-center bg-red">Belum Tayang <p><?php echo $total[0]->tbt ?></p></th>
							<th colspan="4" class="text-center bg-yellow">Tayang <p><?php echo $total[0]->tt ?></p></th>
							<th colspan="4" class="text-center bg-green">Umum Pemenang <p><?php echo $total[0]->tm ?></p></th>
							<th colspan="4" class="text-center" style="background-color:#333; color: #FFF;">Paket Batal <p><?php echo $total[0]->tb ?></p></th>
						</tr>
						<tr style="vertical-align:middle">
							<th class="text-center">Total Paket</th>
							<th class="text-center">Total Pagu (Rp)</th>

							<th class="text-center">KT</th>
							<th class="text-center">KS</th>
							<th class="text-center">B</th>
							<th class="text-center">J</th>

							<th class="text-center">Belum</th>
							<th class="text-center">Pokja</th>
							<th class="text-center">SKPA</th>
							<th class="text-center">Selesai</th>

							<th class="text-center">KT</th>
							<th class="text-center">KS</th>
							<th class="text-center">B</th>
							<th class="text-center">J</th>

							<th class="text-center">KT</th>
							<th class="text-center">KS</th>
							<th class="text-center">B</th>
							<th class="text-center">J</th>

							<th class="text-center">KT</th>
							<th class="text-center">KS</th>
							<th class="text-center">B</th>
							<th class="text-center">J</th>

							<th class="text-center">KT</th>
							<th class="text-center">KS</th>
							<th class="text-center">B</th>
							<th class="text-center">J</th>
						</tr>
					</thead>
					<tbody>
						<tr class="text-bold">
							<td colspan="2" class="text-center" style="vertical-align:middle">Jumlah</td>
							<td class="text-center" style="vertical-align:middle"><?php echo $total[0]->tpaket_masuk ?></td>
							<td class="text-right" style="vertical-align:middle"><?php echo number_format($total[0]->tpagu_masuk) ?></td>

							<td class="text-center"><?php echo $total[0]->tsp_kt ?></td>
							<td class="text-center"><?php echo $total[0]->tsp_ks ?></td>
							<td class="text-center"><?php echo $total[0]->tsp_b ?></td>
							<td class="text-center"><?php echo $total[0]->tsp_j ?></td>

							<td class="text-center"><?php echo $total[0]->review_belum ?></td>
							<td class="text-center"><?php echo $total[0]->review_pokja ?></td>
							<td class="text-center"><?php echo $total[0]->review_skpa ?></td>
							<td class="text-center"><?php echo $total[0]->review_selesai ?></td>

							<td class="text-center"><?php echo $total[0]->tbt_kt ?></td>
							<td class="text-center"><?php echo $total[0]->tbt_ks ?></td>
							<td class="text-center"><?php echo $total[0]->tbt_b ?></td>
							<td class="text-center"><?php echo $total[0]->tbt_j ?></td>

							<td class="text-center"><?php echo $total[0]->tt_kt ?></td>
							<td class="text-center"><?php echo $total[0]->tt_ks ?></td>
							<td class="text-center"><?php echo $total[0]->tt_b ?></td>
							<td class="text-center"><?php echo $total[0]->tt_j ?></td>

							<td class="text-center"><?php echo $total[0]->tm_kt ?></td>
							<td class="text-center"><?php echo $total[0]->tm_ks ?></td>
							<td class="text-center"><?php echo $total[0]->tm_b ?></td>
							<td class="text-center"><?php echo $total[0]->tm_j ?></td>

							<td class="text-center"><?php echo $total[0]->tb_kt ?></td>
							<td class="text-center"><?php echo $total[0]->tb_ks ?></td>
							<td class="text-center"><?php echo $total[0]->tb_b ?></td>
							<td class="text-center"><?php echo $total[0]->tb_j ?></td>
						</tr>

						<?php $i=0; foreach ($lap as $value) { $i++ ?>
							<tr>
								<td><?php echo $i ?></td>
								<td class="text-uppercase" style="white-space:nowrap;"><?php echo $value->sp_kelompok ?></td>

								<td class="text-center"><?php echo $value->tpaket_masuk ?></td>
								<td class="text-right"><?php echo number_format($value->tpagu_masuk) ?></td>

								<td class="text-center"><?php echo $value->sp_kt ?></td>
								<td class="text-center"><?php echo $value->sp_ks ?></td>
								<td class="text-center"><?php echo $value->sp_b ?></td>
								<td class="text-center"><?php echo $value->sp_j ?></td>

								<td class="text-center"><?php echo $value->review_belum ?></td>
								<td class="text-center"><?php echo $value->review_pokja ?></td>
								<td class="text-center"><?php echo $value->review_skpa ?></td>
								<td class="text-center"><?php echo $value->review_selesai ?></td>

								<td class="text-center"><a href="#" onClick="detail_paket(this)" data-id="<?php echo $value->sp_id ?>-belum_tayang-pekerjaan_konstruksi" data-toggle="modal" data-target="#modal-default"><?php echo $value->bt_kt ?></a></td>
								<td class="text-center"><a href="#" onClick="detail_paket(this)" data-id="<?php echo $value->sp_id ?>-belum_tayang-jasa_konsultansi" data-toggle="modal" data-target="#modal-default"><?php echo $value->bt_ks ?></a></td>
								<td class="text-center"><a href="#" onClick="detail_paket(this)" data-id="<?php echo $value->sp_id ?>-belum_tayang-barang" data-toggle="modal" data-target="#modal-default"><?php echo $value->bt_b ?></a></td>
								<td class="text-center"><a href="#" onClick="detail_paket(this)" data-id="<?php echo $value->sp_id ?>-belum_tayang-jasa_lainnya" data-toggle="modal" data-target="#modal-default"><?php echo $value->bt_j ?></a></td>

								<td class="text-center"><a href="#" onClick="detail_paket(this)" data-id="<?php echo $value->sp_id ?>-tayang-pekerjaan_konstruksi" data-toggle="modal" data-target="#modal-default"><?php echo $value->t_kt ?></a></td>
								<td class="text-center"><a href="#" onClick="detail_paket(this)" data-id="<?php echo $value->sp_id ?>-tayang-jasa_konsultansi" data-toggle="modal" data-target="#modal-default"><?php echo $value->t_ks ?></a></td>
								<td class="text-center"><a href="#" onClick="detail_paket(this)" data-id="<?php echo $value->sp_id ?>-tayang-barang" data-toggle="modal" data-target="#modal-default"><?php echo $value->t_b ?></a></td>
								<td class="text-center"><a href="#" onClick="detail_paket(this)" data-id="<?php echo $value->sp_id ?>-tayang-jasa_lainnya" data-toggle="modal" data-target="#modal-default"><?php echo $value->t_j ?></a></td>

								<td class="text-center"><a href="#" onClick="detail_paket(this)" data-id="<?php echo $value->sp_id ?>-menang-pekerjaan_konstruksi" data-toggle="modal" data-target="#modal-default"><?php echo $value->m_kt ?></a></td>
								<td class="text-center"><a href="#" onClick="detail_paket(this)" data-id="<?php echo $value->sp_id ?>-menang-jasa_konsultansi" data-toggle="modal" data-target="#modal-default"><?php echo $value->m_ks ?></a></td>
								<td class="text-center"><a href="#" onClick="detail_paket(this)" data-id="<?php echo $value->sp_id ?>-menang-barang" data-toggle="modal" data-target="#modal-default"><?php echo $value->m_b ?></a></td>
								<td class="text-center"><a href="#" onClick="detail_paket(this)" data-id="<?php echo $value->sp_id ?>-menang-jasa_lainnya" data-toggle="modal" data-target="#modal-default"><?php echo $value->m_j ?></a></td>

								<td class="text-center"><?php echo $value->b_kt ?></td>
								<td class="text-center"><?php echo $value->b_ks ?></td>
								<td class="text-center"><?php echo $value->b_b ?></td>
								<td class="text-center"><?php echo $value->b_j ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>

				</div>
      </div>
    </div>
	</section>
</div>

<div class="modal fade" id="modal-default" style="display: none;">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span></button>
								<h4 class="modal-title">Detail Paket</h4>
							</div>
							<div class="modal-body" id="detail_paket">
<!-- load ajax table here -->
							</div>
						</div>
						<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
