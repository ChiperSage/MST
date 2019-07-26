<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cetak Tender SP</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

    <script src="../vendor/jsimage/jquery.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css">

    <div class="clearfix"></div>

<div id="html-content-holder" style="background-color: #FFF; color: #000; padding-left: 0px; padding-top: 0px;">

  <div class="row">
    <div class="col-sm-3">
      <img src="<?php echo base_url() ?>files/logo-monev-report.jpeg" width="250" alt="">
    </div>
    <div class="col-sm-6 text-center">
      <h3><b class="text-uppercase" style="letter-spacing:1pt;">REALISASI PROSES TENDER APBA <?php echo date('Y') ?></b></h3>
    </div>
    <div class="col-sm-3">
      <img class="pull-right" src="<?php echo base_url() ?>files/logo-bps-2.jpg" width="250" alt="">
    </div>
  </div>

  <small class="pull-right text-bold"> <?php echo date('d M Y, H:i:s') ?> </small>

    <table class="table table-sm table-bordered">
      <thead>
        <tr>
          <th rowspan="2" class="text-center" style="vertical-align:middle"><center>No.</center></th>
          <th class="text-center" rowspan="2" style="vertical-align:middle"><center>SKPA</center></th>
          <th class="text-center" colspan="2" style="vertical-align:middle">Paket Masuk SPSE</th>
          <th colspan="4" class="text-center bg-danger" style="vertical-align:middle"><center>Belum Tayang <p><?php echo $total[0]->sbt ?></p></center></th>
          <th colspan="4" class="text-center bg-warning" style="vertical-align:middle"><center>Tayang <p><?php echo $total[0]->st ?></p></center></th>
          <th colspan="4" class="text-center bg-success" style="vertical-align:middle"><center>Umum Pemenang <p><?php echo $total[0]->sup ?></p></center></th>
          <th colspan="4" class="text-center" style="background-color:#CCC; vertical-align:middle"><center>Paket Batal <p><?php echo $total[0]->spb ?></p></center></th>
        </tr>
        <tr>
          <th class="text-center">Total Paket</th>
          <th class="text-center">Total Pagu (Rp)</th>
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
          <td colspan="2" class="text-center">Jumlah</td>
          <td class="text-center"><?php echo $total[0]->tpaket ?></td>
          <td class="text-right"><?php echo number_format($total[0]->tpagu) ?></td>
          <td class="text-center"><?php echo $total[0]->sbt_kt ?></td>
          <td class="text-center"><?php echo $total[0]->sbt_ks ?></td>
          <td class="text-center"><?php echo $total[0]->sbt_b ?></td>
          <td class="text-center"><?php echo $total[0]->sbt_j ?></td>
          <td class="text-center"><?php echo $total[0]->st_kt ?></td>
          <td class="text-center"><?php echo $total[0]->st_ks ?></td>
          <td class="text-center"><?php echo $total[0]->st_b ?></td>
          <td class="text-center"><?php echo $total[0]->st_j ?></td>
          <td class="text-center"><?php echo $total[0]->sup_kt ?></td>
          <td class="text-center"><?php echo $total[0]->sup_ks ?></td>
          <td class="text-center"><?php echo $total[0]->sup_b ?></td>
          <td class="text-center"><?php echo $total[0]->sup_j ?></td>
          <td class="text-center"><?php echo $total[0]->pb_kt ?></td>
          <td class="text-center"><?php echo $total[0]->pb_ks ?></td>
          <td class="text-center"><?php echo $total[0]->pb_b ?></td>
          <td class="text-center"><?php echo $total[0]->pb_j ?></td>
        </tr>
        <?php $i=0; foreach ($lap as $value) { $i++ ?>
          <tr>
            <td class="text-center"><?php echo $i ?></td>
            <td class="text-uppercase"><?php echo $value->singkatan ?></td>
            <td class="text-center"><?php echo $value->tpaket ?></td>
            <td class="text-right"><?php echo number_format($value->tpagu) ?></td>
            <td class="text-center"><?php echo $value->bt_kt ?></td>
            <td class="text-center"><?php echo $value->bt_ks ?></td>
            <td class="text-center"><?php echo $value->bt_b ?></td>
            <td class="text-center"><?php echo $value->bt_j ?></td>
            <td class="text-center"><?php echo $value->t_kt ?></td>
            <td class="text-center"><?php echo $value->t_ks ?></td>
            <td class="text-center"><?php echo $value->t_b ?></td>
            <td class="text-center"><?php echo $value->t_j ?></td>
            <td class="text-center"><?php echo $value->m_kt ?></td>
            <td class="text-center"><?php echo $value->m_ks ?></td>
            <td class="text-center"><?php echo $value->m_b ?></td>
            <td class="text-center"><?php echo $value->m_j ?></td>
            <td class="text-center"><?php echo $value->b_kt ?></td>
            <td class="text-center"><?php echo $value->b_ks ?></td>
            <td class="text-center"><?php echo $value->b_b ?></td>
            <td class="text-center"><?php echo $value->b_j ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

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
