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

<div class="container-fluid">

<!-- <h3><b class="text-uppercase">Realisasi Jenis Pengadaan (RUP) Tahun <?php echo date('Y') ?></b></h3> -->

<div id="html-content-holder" class="table-responsive" style="background-color: #FFF; padding-left: 0px; padding-top: 0px;">

  <h3 class="text-center"><b class="text-uppercase" style="letter-spacing:0.5pt;"><p>Realisasi Jenis Pengadaan (RUP) Tahun <?php echo date('Y') ?></p></b></h3>

  <div class="row">
    <div class="col-sm-6">
      <img src="<?php echo base_url() ?>files/logo-monev-report.jpeg" width="250" alt="">
    </div>
    <div class="col-sm-6">
      <img class="pull-right" src="<?php echo base_url() ?>files/logo-bps-2.jpg" width="250" alt="">
    </div>
  </div>
  <small class="pull-right text-bold"> <?php echo date('d M Y, H:i:s') ?> </small>

  <table class="table table-bordered table-sm">
    <thead>
      <tr>
        <th rowspan="4" style="vertical-align:middle">No.</th>
        <th class="text-center text-capitalize" rowspan="4" style="vertical-align:middle">Nama Satker</th>
        <th class="text-center" rowspan="2" colspan="2" style="vertical-align:middle">Paket Tender</th>
        <th class="text-center" style="vertical-align:middle" colspan="8"> Paket Non Tender</th>
        <th class="text-center" style="vertical-align:middle" rowspan="2" colspan="2"> Swakelola</th>
        <th class="text-center" style="vertical-align:middle" rowspan="2" colspan="2"> Total</th>
      </tr>
      <tr>
        <th class="text-center" colspan="2" style="vertical-align:middle">Penunjukan Langsung <p> > 200 Jt</p></th>
        <th class="text-center" colspan="2" style="vertical-align:middle">Penunjukan Langsung <p> <= 200 Jt</p></th>
        <th class="text-center" colspan="2" style="vertical-align:middle">Pengadaan Langsung</th>
        <th class="text-center" colspan="2" style="vertical-align:middle">e-Purchasing</th>
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

        <th class="text-center">Paket</th>
        <th class="text-center">Pagu</th>

      </tr>
      <tr>

        <th class="text-center"><?php echo number_format($total[0]->pt_paket); ?></th>
        <th class="text-center"><?php echo number_format($total[0]->pt_pagu); ?></th>

        <th class="text-center"><?php echo number_format($total[0]->pl_paket); ?></th>
        <th class="text-center"><?php echo number_format($total[0]->pl_pagu); ?></th>

        <th class="text-center"><?php echo number_format($total[0]->pl1_paket); ?></th>
        <th class="text-center"><?php echo number_format($total[0]->pl1_pagu); ?></th>

        <th class="text-center"><?php echo number_format($total[0]->pl2_paket); ?></th>
        <th class="text-center"><?php echo number_format($total[0]->pl2_pagu); ?></th>

        <th class="text-center"><?php echo number_format($total[0]->ep_paket); ?></th>
        <th class="text-center"><?php echo number_format($total[0]->ep_pagu); ?></th>

        <th class="text-center"><?php echo number_format($total[0]->sw_paket); ?></th>
        <th class="text-center"><?php echo number_format($total[0]->sw_pagu); ?></th>

        <th class="text-center"><?php echo number_format($total[0]->tt_paket); ?></th>
        <th class="text-center"><?php echo number_format($total[0]->tt_pagu); ?></th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; foreach ($laporan as $val) { ?>

        <tr>
          <td class="text-uppercase text-center"><?php echo $i++ ?></td>
          <td class="text-uppercase"><?php echo $val->singkatan ?></td>

          <td class="text-center"><?php echo $val->pt_paket ?></td>
          <td class="text-right"><?php echo number_format($val->pt_pagu) ?></td>

          <td class="text-center"><?php echo $val->pl_paket ?></td>
          <td class="text-right"><?php echo number_format($val->pl_pagu) ?></td>

          <td class="text-center"><?php echo $val->pl1_paket ?></td>
          <td class="text-right"><?php echo number_format($val->pl1_pagu) ?></td>

          <td class="text-center"><?php echo $val->pl2_paket ?> </td>
          <td class="text-right"><?php echo number_format($val->pl2_pagu) ?></td>

          <td class="text-center"><?php echo $val->ep_paket ?></td>
          <td class="text-right"><?php echo number_format($val->ep_pagu) ?></td>

          <td class="text-center"><?php echo $val->sw_paket ?></td>
          <td class="text-right"><?php echo number_format($val->sw_pagu) ?></td>

          <td class="text-center"><?php echo $val->tt_paket ?></td>
          <td class="text-right"><?php echo number_format($val->tt_pagu) ?></td>

        </tr>

      <?php } ?>

    </tbody>
  </table>

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
