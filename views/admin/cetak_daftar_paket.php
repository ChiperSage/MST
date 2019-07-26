<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cetak Daftar Paket</title>
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

    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css">

  </head>
  <body>

<div class="container-fluid">

  <?php $seg = $this->uri->segment(3); ?>

<div id="html-content-holder" style="background-color: #FFF; padding-left: 0px; padding-top: 0px;">

  <div class="row">
    <div class="col-sm-3">
      <img src="<?php echo base_url() ?>files/logo-monev-report.jpeg" width="250" alt="">
    </div>
    <div class="col-sm-6 text-center">
      <h3><b class="text-uppercase">Daftar Paket <?php echo str_replace('_',' ',$this->uri->segment(3)) ?></b></h3>
      <p class="text-capitalize"><?php echo isset($_GET['jenis_pengadaan']) ? $_GET['jenis_pengadaan'] : '' ; ?></p>
    </div>
    <div class="col-sm-3">
      <img class="pull-right" src="<?php echo base_url() ?>files/logo-bps-2.jpg" width="250" alt="">
    </div>
  </div>

  <small class="pull-right text-bold"> <?php echo date('d M Y, H:i:s') ?> </small>

  <table class="table table-bordered table-sm">
    <thead>
      <tr style="text-align:center">
        <th class="text-center">No</th>
        <th class="text-center" width="120">Kode Lelang</th>
        <th class="text-center" width="100">Kode RUP</th>
        <th class="text-center">Nama Pekerjaan</th>
        <th class="text-center">Pagu</th>
        <th class="text-center">JP</th>
        <th class="text-center">Kelompok</th>
        <?php if($seg == 'belum_tayang'){ ?>
        <th class="text-center">Status</th>
        <th class="text-center">Keterangan</th>
        <?php }else{ ?>
        <th class="text-center">Keterangan</th>
        <?php } ?>
      </tr>
    </thead>
    <tbody>
      <?php $i=1; foreach ($paket as $value) { $i++ ?>
        <tr>
          <?php
          if(empty($value->kode_lelang.$value->kode_rup)){
            $i = 0;
          }
          ?>
          <td class="text-center"><?php echo ($i != 0) ? $i : '' ; ?></td>
          <td><?php echo $value->kode_lelang ?></td>
          <td><?php echo $value->kode_rup ?></td>
          <td <?php echo ($value->kode_rup == '') ? 'class="text-bold"' : '' ; ?>><?php echo $value->nama_pekerjaan ?></td>
          <td <?php echo ($value->kode_rup == '') ? 'class="text-bold text-right"' : '' ; ?> class="text-right"><?php echo (!empty($value->pagu)) ? number_format($value->pagu) : '' ; ?></td>
          <td><?php echo explode(';',$value->jenis_pengadaan)[0] ?></td>
          <td><?php echo $value->kelompok ?></td>
          <?php if($seg == 'belum_tayang'){ ?>
          <td><?php echo $value->status ?></td>
          <td><?php echo $value->ket ?></td>
          <?php }else{ ?>
          <td><?php echo $value->keterangan ?></td>
          <?php } ?>
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

    <script src="../vendor/jsimage/jquery.min.js"></script>
    <script src="../vendor/jsimage/html2canvas.js"></script>

    </div>

  </body>
</html>
