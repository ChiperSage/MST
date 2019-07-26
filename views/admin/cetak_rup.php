<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cetak RUP</title>
    <meta name="description" content="">

    <style>

    .xtable {
      border-collapse: collapse;
      width: 100%;
      font-size: 11pt;
    }
    .xtable td, .xtable th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    .xtable tr:nth-child(even){background-color: #FFF;}
    .xtable tr:hover {background-color: #FFF;}
    .xtable th {
      padding-top: 12px;
      padding-bottom: 12px;
    }

    .text-center{text-align: center}
    .valign{vertical-align: middle}
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

    small{font-size: 9pt;}
    </style>

  </head>
  <body>

<link rel="stylesheet" href="<?php echo base_url() ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css">

<script src="../vendor/jsimage/jquery.min.js"></script>
<script src="../vendor/jsimage/html2canvas.js"></script>

<div id="html-content-holder" class="table-responsive" style="background-color: #FFF; padding-left: 0px; padding-top: 0px;">

<div class="container-fluid">

  <h3 class="text-center"><b class="text-uppercase" style="letter-spacing:0.5pt;"><p>Realisasi Jenis Pengadaan (RUP) Tahun <?php echo date('Y') ?> <br/>Per-SKPA</p></b></h3>

  <div class="row">
    <div class="col-sm-3">
      <img src="<?php echo base_url() ?>files/logo-monev-report.jpeg" width="250" alt="">
    </div>
    <div class="col-sm-6 text-center">

    </div>
    <div class="col-sm-3">
  <img class="pull-right" src="<?php echo base_url() ?>files/logo-bps-2.jpg" width="250" alt="">
    </div>
  </div>
  <small class="pull-right text-bold"> <?php echo date('d M Y, H:i:s') ?> </small>

    				<table class="table table-bordered">
    					<thead>
    						<tr>
    							<th rowspan="2" class="text-center" style="vertical-align:middle">No.</th>
    							<th class="text-center valign" rowspan="2" style="vertical-align:middle">Jenis Pengadaan</th>
    							<th colspan="2" class="text-center" style="vertical-align:middle"><p> Rp. < 100 Juta </p></th>
    							<th colspan="2" class="text-center" style="vertical-align:middle"><p> Rp. > 100 - <= 200 Juta</p></th>
    							<th colspan="2" class="text-center" style="vertical-align:middle"><p> Rp. > 200 - <= 2.5 M</p></th>
    							<th colspan="2" class="text-center" style="vertical-align:middle"><p> Rp. > 2.5 M - <= 50 M</p></th>
    							<th colspan="2" class="text-center" style="vertical-align:middle"><p> Rp. > 50 M - <= 100 M</p></th>
    							<th colspan="2" class="text-center" style="vertical-align:middle"><p> Swakelola</p></th>
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
    					</thead>
    					<tbody>
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
    								<td class="text-uppercase">Jasa</td>
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
            <small class="pull-right"> <?php echo date('d M Y, H:i:s') ?> </small>
</div>

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

  </body>
</html>
