<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cetak Tender SP</title>
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

    table{width: 100%}
    </style>

  </head>
  <body>

<script src="../vendor/jsimage/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css">

<div id="html-content-holder" style="background-color: #FFF; color: #000; padding-left: 0px; padding-top: 0px;">

<h3><b class="text-uppercase" style="letter-spacing:1pt;"><p>REALISASI PROSES TENDER APBA <?php echo date('Y') ?></p></b></h3>
<small class="pull-right text-bold"> <?php echo date('d M Y, H:i:s') ?> </small>

<table class="table table-sm table-bordered table-striped">
  <thead style="vertical-align:middle">
    <tr>
      <th rowspan="2" class="text-center" style="vertical-align:middle">No.</th>
      <th class="text-center" width="200" rowspan="2" style="vertical-align:middle">SKPA</th>
      <th class="text-center" colspan="2" width="250" style="vertical-align:middle">Paket Masuk SPSE <p>(Tender)</p></th>
      <!-- <th class="text-center" colspan="2" width="250" style="vertical-align:middle">Paket Masuk SPSE <p>(Non Tender)</p></th> -->

      <th class="text-center bg-primary" colspan="4">Paket SP <p><?php echo $total[0]->tsp ?></p></th>
      <th class="text-center" colspan="4" style="background-color:#CCC;">Review <p><?php echo $total[0]->review_total ?></p></th>
      <th colspan="4" class="text-center">(Telah SP) <br/> Belum Tayang <p><?php echo $total[0]->tsp_bt ?></p></th>
      <th colspan="4" class="text-center bg-danger">Belum Tayang <p><?php echo $total[0]->sbt ?></p></th>
      <th colspan="4" class="text-center bg-warning">Tayang <p><?php echo $total[0]->st ?></p></th>
      <th colspan="4" class="text-center bg-success">Umum Pemenang <p><?php echo $total[0]->sup ?></p></th>
      <th colspan="4" class="text-center" style="background-color:#333; color: #FFF;">Paket Batal <p><?php echo $total[0]->spb ?></p></th>
    </tr>
    <tr style="vertical-align:middle">
      <th class="text-center">Total Paket</th>
      <th class="text-center">Total Pagu (Rp)</th>

      <!-- <th class="text-center">Total Paket</th>
      <th class="text-center">Total Pagu (Rp)</th> -->

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
      <th class="text-center">KT</th>
      <th class="text-center">KS</th>
      <th class="text-center">B</th>
      <th class="text-center">J</th>
    </tr>
  </thead>
  <tbody>
    <tr class="text-bold">
      <td colspan="2" class="text-center" style="vertical-align:middle">Jumlah</td>
      <td class="text-center" style="vertical-align:middle"><?php echo $total[0]->tpaket ?></td>
      <td class="text-right" style="vertical-align:middle"><?php echo number_format($total[0]->tpagu) ?></td>

      <!-- <td class="text-center" style="vertical-align:middle"><?php //echo $total[0]->tpaket_non_tender ?></td>
      <td class="text-right" style="vertical-align:middle"><?php //echo number_format($total[0]->tpagu_non_tender) ?></td> -->

      <td class="text-center"><?php echo $total[0]->tsp_kt ?></td>
      <td class="text-center"><?php echo $total[0]->tsp_ks ?></td>
      <td class="text-center"><?php echo $total[0]->tsp_b ?></td>
      <td class="text-center"><?php echo $total[0]->tsp_j ?></td>

      <td class="text-center"><?php echo $total[0]->review_belum ?></td>
      <td class="text-center"><?php echo $total[0]->review_pokja ?></td>
      <td class="text-center"><?php echo $total[0]->review_skpa ?></td>
      <td class="text-center"><?php echo $total[0]->review_selesai ?></td>

      <td class="text-center"><?php echo $total[0]->tsp_bt_kt ?></td>
      <td class="text-center"><?php echo $total[0]->tsp_bt_ks ?></td>
      <td class="text-center"><?php echo $total[0]->tsp_bt_b ?></td>
      <td class="text-center"><?php echo $total[0]->tsp_bt_j ?></td>

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
    <!-- <tr class="text-bold">
      <td class="text-center" colspan="4"><?php echo $total[0]->tsp ?></td>
      <td class="text-center" colspan="4"><?php echo $total[0]->sbt ?></td>
      <td class="text-center" colspan="4"><?php echo $total[0]->st ?></td>
      <td class="text-center" colspan="4"><?php echo $total[0]->sup ?></td>
      <td class="text-center" colspan="4"><?php echo $total[0]->spb ?></td>
    </tr> -->
    <?php $i=0; foreach ($lap as $value) { $i++ ?>
      <tr>
        <td><?php echo $i ?></td>
        <td class="text-uppercase"><?php echo $value->singkatan ?></td>

        <td class="text-center"><?php echo $value->tpaket ?></td>
        <td class="text-right"><?php echo number_format($value->tpagu) ?></td>

        <!-- <td class="text-center"><?php //echo $value->tpaket_non_tender ?></td>
        <td class="text-right"><?php //echo number_format($value->tpagu_non_tender) ?></td> -->

        <td class="text-center"><?php echo $value->sp_kt ?></td>
        <td class="text-center"><?php echo $value->sp_ks ?></td>
        <td class="text-center"><?php echo $value->sp_b ?></td>
        <td class="text-center"><?php echo $value->sp_j ?></td>

        <td class="text-center"><?php echo $value->review_belum ?></td>
        <td class="text-center"><?php echo $value->review_pokja ?></td>
        <td class="text-center"><?php echo $value->review_skpa ?></td>
        <td class="text-center"><?php echo $value->review_selesai ?></td>

        <td class="text-center"><?php echo $value->sp_bt_kt ?></td>
        <td class="text-center"><?php echo $value->sp_bt_ks ?></td>
        <td class="text-center"><?php echo $value->sp_bt_b ?></td>
        <td class="text-center"><?php echo $value->sp_bt_j ?></td>

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
