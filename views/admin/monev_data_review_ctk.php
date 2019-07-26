<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Data Review</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css">

  </head>
  <body>

		<style media="screen">
			.nowrap{white-space: nowrap}
		</style>

<div class="container-fluid">

	<script src="<?php echo base_url() ?>vendor/jsimage/jquery.min.js"></script>
	<div id="html-content-holder" style="background-color: #FFF; padding-left: 0px; padding-top: 0px;">

    <div class="row">
      <div class="col-sm-3">
        <img src="<?php echo base_url() ?>files/logo-monev-report.jpeg" width="250" alt="">
      </div>
      <div class="col-sm-6 text-center">
<h3 class="text-uppercase" style="letter-spacing:1pt;">Data Review <?php echo $this->uri->segment(3) ?></h3>
      </div>
      <div class="col-sm-3">
        <img class="pull-right" src="<?php echo base_url() ?>files/logo-bps-2.jpg" width="250" alt="">
      </div>
    </div>
		<small class="pull-right text-bold"> <?php echo date('d M Y H:i') ?> WIB </small>

		<table class="table table-bordered table-striped table-sm">
			<thead>
				<tr style="text-align:center;">
					<th width="30">No.</th>
					<th class="text-center nowrap">Kode RUP</th>
					<th class="text-center">Singkatan</th>
					<th class="text-center">Nama Paket</th>
          <th class="text-center">Nama Satker</th>
          <th class="text-center">Kelompok</th>
					<th class="text-center">Status</th>
					<th class="text-center">Keterangan</th>
				</tr>
			</thead>
			<tbody>
				<?php $i=0; foreach ($data_review as $val) { $i++ ?>
					<tr>
						<td><?php echo $i ?></td>
						<td class="text-capitalize"><?php echo $val->kode_rup ?></td>
						<td><?php echo $val->singkatan ?></td>
						<td><?php echo $val->nama_paket ?></td>
            <td><?php echo $val->nama_satker ?></td>
						<td><?php echo $val->sp_kelompok ?></td>
            <td><?php echo $val->status ?></td>
						<td><?php echo $val->ket ?></td>
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
