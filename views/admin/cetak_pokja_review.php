<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cetak Paket Review</title>
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

<div id="html-content-holder" class="table-responsive" style="background-color: #FFF; padding-left: 0px; padding-top: 0px;">

  <h3><b class="text-uppercase">Pokja Review</b></h3>
  <small class="pull-right text-bold"> <?php echo date('d M Y, H:i:s') ?> </small>

  <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th width="30">No.</th>
        <th>Kode RUP</th>
        <th>Paket Pekerjaan</th>
        <th>Nama SKPA</th>
        <th>Nama KPA</th>
        <th>Kelompok</th>
        <th>Tgl. Update Review</th>
        <th>Keterangan</th>
      </tr>
    </thead>
    <tbody>
      <?php $i=0; foreach ($review as $value) { $i++ ?>
        <tr>
          <td><?php echo $i ?></td>
          <td><?php echo $value->kode_rup ?></td>
          <td><?php echo $value->nama_paket ?></td>
          <td><?php echo $value->nama_satker ?></td>
          <td><?php echo $value->nama_kpa ?></td>
          <td><?php echo $value->sp_kelompok ?></td>
          <td><?php echo $value->tgl_review ?></td>
          <td><?php echo $value->ket_review ?></td>
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
