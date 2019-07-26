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
        <h3 class="box-title"><b class="text-uppercase">Realisasi Proses Tender APBA <?php echo date('Y') ?></b></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

				<div class="btn-group">
					<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><i class="fa fa-print"></i> Cetak
					<span class="caret"></span>
				<span class="sr-only">Toggle Dropdown</span>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li><a target="_blank" href="<?php echo base_url() ?>cetak/tender_sp?type=pdf">PDF</a></li>
					<li><a target="_blank" href="<?php echo base_url() ?>cetak/tender_sp?type=image">Image</a></li>
				</ul>
				</div>
				<br>

<div class="table-responsive">

	<small class="pull-right text-bold"> <?php echo date('d M Y, H:i:s') ?> </small>

	<script>
		// function detail_paket(data)
		// {
		// 	var data = data.getAttribute('data-id');
		// 	var xhttp = new XMLHttpRequest(this);
		//
		// 	xhttp.onreadystatechange = function() {
		// 		if(this.readyState == 4 && this.status == 200){
		// 			var detail_paket = this.responseText;
		// 			document.getElementById('detail_paket').innerHTML = detail_paket;
		// 		}
		// 	};
		// 	xhttp.open("GET", "<?php echo base_url('monev/ajax_detail_paket/') ?>" + data, true);
		// 	xhttp.send();
		// }
	</script>

<?php
// echo '<pre>';
// print_r($lap['sp']);
// echo '</pre>';
?>

<!-- <link rel="stylesheet" href="<?php echo base_url() ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css"> -->

				<table class="table table-bordered table-striped">
					<thead>
						<tr style="vertical-align:middle">
							<th rowspan="4" class="text-center" style="vertical-align:middle">No.</th>
							<th class="text-center" rowspan="4" style="vertical-align:middle">SKPA</th>
							<th class="text-center" rowspan="2" style="vertical-align:middle">JMLH PKT</br></th>
							<?php foreach ($lap['sp'] as $val) {?>
							<th class="text-center" colspan="3" style="vertical-align:middle"><?php echo $val->sp_kelompok ?></th>
							<?php } ?>
						</tr>
						<tr>
							<?php foreach ($lap['sp'] as $val) {?>
							<th class="text-center bg-danger" style="vertical-align:middle">BT</th>
							<th class="text-center bg-warning" style="vertical-align:middle">T</th>
							<th class="text-center bg-success" style="vertical-align:middle">M</th>
							<?php } ?>
						</tr>
						<tr style="vertical-align:middle">
							<th class="text-center" rowspan="2" style="vertical-align:middle"><?php echo $lap['sp'][0]->tpokja; ?></th>
							<?php foreach ($lap['sp'] as $val) {?>
							<th class="text-center" colspan="3" style="vertical-align:middle"><?php echo ($val->tpokja_bt + $val->tpokja_t + $val->tpokja_m) ?></th>
							<?php } ?>
						</tr>
						<tr>
							<?php foreach ($lap['sp'] as $val) {?>
							<th class="text-center" style="vertical-align:middle"><?php echo $val->tpokja_bt ?></th>
							<th class="text-center" style="vertical-align:middle"><?php echo $val->tpokja_t ?></th>
							<th class="text-center" style="vertical-align:middle"><?php echo $val->tpokja_m ?></th>
							<?php } ?>
						</tr>
					</thead>
					<tbody>
						<?php $i=0; foreach ($lap['skpa'] as $value) { $i++ ?>
							<tr>
								<td><?php echo $i ?></td>
								<td class="text-uppercase" style="white-space:nowrap;"><?php echo $value->singkatan ?></td>
								<td class="text-center"><?php echo $value->tpaket ?></td>

								<?php foreach ($lap['sp'] as $val) {?>

								<td class="text-center"><?php //echo $value->kode ?></td>
								<td class="text-center"></td>
								<td class="text-center"></td>

								<?php } ?>

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
					<div class="modal-dialog">
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
