<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laporan BPS</title>
    <meta name="description" content="">

    <style>

    .xtable {
      border-collapse: collapse;
      width: 100%;
    }
    .xtable td, .xtable th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    .xtable tr:nth-child(even){background-color: #FFF;}
    .xtable tr:hover {background-color: #FFF;}
    .xtable th {
      text-align: center;
      padding-top: 12px;
      padding-bottom: 12px;
    }

    .text-center{text-align: center; vertical-align: middle;}
    .text-right{text-align: right;}
    .text-capitalize{text-transform: capitalize;}
    .text-uppercase{text-transform: uppercase;}
    .text-bold{font-weight: bold;}

    .pull-right{float: right;}
    .clearfix{clear: both}

    .bg-primary{background-color: blue;}
    .bg-danger{background-color: red;}
    .bg-warning{background-color: yellow;}
    .bg-success{background-color: green;}
    </style>

  </head>
  <body>

<script src="<?php echo base_url() ?>vendor/jsimage/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css">

<div id="html-content-holder" class="table-responsive" style="background-color: #FFF;">

<div class="row">
  <div class="col-sm-">

  </div>
</div>

  <h4 class="text-uppercase text-center">Rekap Data Lelang Berdasarkan Jenis Pengadaan T.A <?php echo $_GET['tahun'] ?></h4>

<div class="row">
  <div class="col-sm-6">
    <img src="<?php echo base_url() ?>files/logo-monev-report.jpeg" width="250" alt="">
  </div>
  <div class="col-sm-6">
    <img class="pull-right" src="<?php echo base_url() ?>files/logo-bps-2.jpg" width="250" alt="">
  </div>
</div>
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

  <small>NOTE: - SUMBER DANA (APBN, APBA, BLUD)</small>

	<!-- <b class="text-small text-danger">
	[ ] = Tambah Paket Harian <br/>
	( ) = Berkurang Paket Harian
	</b> -->

</div>

<?php if(isset($_GET['type']) && $_GET['type'] == 'image'): ?>

  <input id="btn-Preview-Image" type="button" value="Preview"/>
  <a id="btn-Convert-Html2Image" href="#">Download</a>
  <br/>
  <div id="previewImage"></div>

<?php endif; ?>

<script>
$(document).ready(function(){

var element = $("#html-content-holder"); // global variable
var getCanvas; // global variable

$("#btn-Preview-Image").on('click', function () {
    html2canvas(element, {
    onrendered: function (canvas) {
        $("#previewImage").append(canvas);
           getCanvas = canvas;
        }
    });
});

$("#btn-Convert-Html2Image").on('click', function () {
    var imgageData = getCanvas.toDataURL("image/png");
    // Now browser starts downloading it instead of just showing it
    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
    $("#btn-Convert-Html2Image").attr("download", "your_pic_name.png").attr("href", newData);
});

});

</script>

<script src="../vendor/jsimage/html2canvas.js"></script>

</body>
</html>
