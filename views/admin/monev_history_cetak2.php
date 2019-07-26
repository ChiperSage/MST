<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Cetak History Review</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css">

  </head>
  <body>

<div class="container-fluid">

<script src="<?php echo base_url() ?>vendor/jsimage/jquery.min.js"></script>

<div id="html-content-holder" style="background-color: #FFF; padding-left: 0px; padding-top: 0px;">

<div class="row">
  <div class="col-sm-3">
    <img src="<?php echo base_url() ?>files/logo-monev-report.jpeg" width="250" alt="">
  </div>
  <div class="col-sm-6 text-center">
    <h3 class="text-uppercase" style="letter-spacing:1pt;">Review History</h3>
  </div>
  <div class="col-sm-3">
    <img class="pull-right" src="<?php echo base_url() ?>files/logo-bps-2.jpg" width="250" alt="">
  </div>
</div>
<small class="pull-right text-bold"> <?php echo date('d M Y, H:i:s') ?> </small>

<table class="table table-bordered">
  <thead>
    <tr>
      <th width="30">No.</th>
      <th class="text-center">Kode RUP</th>
      <th class="text-center">Paket Pekerjaan</th>
      <th class="text-center">Nama SKPA</th>
      <!-- <th>Nama KPA</th> -->
      <!-- <th>Kelompok</th> -->
      <th class="text-center">Tgl. Update Review</th>
      <th class="text-center">Status</th>
      <th class="text-center">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=0; foreach ($history as $value) { $i++;
    ?>
      <tr>
        <?php
        if(empty($value->nama_kpa)){
          $i = ($i-1);
        }
        ?>
        <td><?php echo (!empty($value->nama_kpa)) ? $i : '' ; ?></td>
        <td><?php echo ($value->nama_kpa != '') ? $value->kode_rup : ''; ?></td>
        <td><?php echo ($value->nama_kpa != '') ? $value->nama_paket : ''; ?></td>
        <td><?php echo ($value->nama_kpa != '') ? $value->nama_satker : ''; ?></td>
        <!-- <td><?php //echo $value->nama_kpa ?></td> -->
        <!-- <td><?php // echo $value->kelompok ?></td> -->
        <td><?php echo $value->tgl_review ?></td>
        <td><?php echo $value->status ?></td>
        <td><?php echo $value->keterangan ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>

</div>

      <?php if(isset($_GET['type']) && $_GET['type'] == 'image'){ ?>

        <input id="btn-Preview-Image" type="button" value="Preview"/>
        <a id="btn-Convert-Html2Image" href="#">Download</a>
        <br/>
        <div id="previewImage"></div>

      <?php } ?>

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
          $("#btn-Convert-Html2Image").attr("download", "cetak_paket_history.png").attr("href", newData);
      });

      });

      </script>

<script src="<?php echo base_url() ?>vendor/jsimage/html2canvas.js"></script>

</div>

  </body>
</html>
