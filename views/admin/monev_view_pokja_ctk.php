<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cetak View Pokja</title>
    <meta name="description" content="">

  </head>
  <body>

<script src="<?php echo base_url() ?>vendor/jsimage/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css">

<div id="html-content-holder" style="background-color: #FFF; padding-left: 0px; padding-top: 0px;">

  <h3 class="text-capitalize" style="letter-spacing:1pt;">Daftar Paket</h3>
  <small class="pull-right text-bold"> <?php echo date('d M Y, H:i:s') ?> </small>

	<table class="table table-bordered table-striped">
		<thead>
			<tr style="vertical-align:middle">
				<th rowspan="2" class="text-center" style="vertical-align:middle">No.</th>

				<th class="text-center" width="200" rowspan="2" style="vertical-align:middle">POKJA</th>
				<th class="text-center" colspan="2" width="200" style="vertical-align:middle">Jumlah Paket</br></th>

				<th class="text-center bg-primary" colspan="4">Paket SP <p><?php echo $total[0]->tsp ?></p></th>
				<th class="text-center" colspan="4" style="background-color:#CCC;">Review <p><?php echo $total[0]->review_total ?></p></th>
				<th colspan="4" class="text-center bg-danger">Belum Tayang <p><?php echo $total[0]->tbt ?></p></th>
				<th colspan="4" class="text-center bg-warning">Tayang <p><?php echo $total[0]->tt ?></p></th>
				<th colspan="4" class="text-center bg-success">Umum Pemenang <p><?php echo $total[0]->tm ?></p></th>
				<th colspan="4" class="text-center" style="background-color:#333; color: #FFF;">Paket Batal <p><?php echo $total[0]->tb ?></p></th>
			</tr>
			<tr style="vertical-align:middle">
				<th class="text-center">Total Paket</th>
				<th class="text-center">Total Pagu (Rp)</th>

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
			</tr>
		</thead>
		<tbody>
			<tr class="text-bold">
				<td colspan="2" class="text-center" style="vertical-align:middle">Jumlah</td>
				<td class="text-center" style="vertical-align:middle"><?php echo $total[0]->tpaket_masuk ?></td>
				<td class="text-right" style="vertical-align:middle"><?php echo number_format($total[0]->tpagu_masuk) ?></td>

				<td class="text-center"><?php echo $total[0]->tsp_kt ?></td>
				<td class="text-center"><?php echo $total[0]->tsp_ks ?></td>
				<td class="text-center"><?php echo $total[0]->tsp_b ?></td>
				<td class="text-center"><?php echo $total[0]->tsp_j ?></td>

				<td class="text-center"><?php echo $total[0]->review_belum ?></td>
				<td class="text-center"><?php echo $total[0]->review_pokja ?></td>
				<td class="text-center"><?php echo $total[0]->review_skpa ?></td>
				<td class="text-center"><?php echo $total[0]->review_selesai ?></td>

				<td class="text-center"><?php echo $total[0]->tbt_kt ?></td>
				<td class="text-center"><?php echo $total[0]->tbt_ks ?></td>
				<td class="text-center"><?php echo $total[0]->tbt_b ?></td>
				<td class="text-center"><?php echo $total[0]->tbt_j ?></td>

				<td class="text-center"><?php echo $total[0]->tt_kt ?></td>
				<td class="text-center"><?php echo $total[0]->tt_ks ?></td>
				<td class="text-center"><?php echo $total[0]->tt_b ?></td>
				<td class="text-center"><?php echo $total[0]->tt_j ?></td>

				<td class="text-center"><?php echo $total[0]->tm_kt ?></td>
				<td class="text-center"><?php echo $total[0]->tm_ks ?></td>
				<td class="text-center"><?php echo $total[0]->tm_b ?></td>
				<td class="text-center"><?php echo $total[0]->tm_j ?></td>

				<td class="text-center"><?php echo $total[0]->tb_kt ?></td>
				<td class="text-center"><?php echo $total[0]->tb_ks ?></td>
				<td class="text-center"><?php echo $total[0]->tb_b ?></td>
				<td class="text-center"><?php echo $total[0]->tb_j ?></td>
			</tr>

			<?php $i=0; foreach ($lap as $value) { $i++ ?>
				<tr>
					<td><?php echo $i ?></td>
					<td class="text-uppercase" style="white-space:nowrap;"><?php echo $value->sp_kelompok ?></td>

					<td class="text-center"><?php echo $value->tpaket_masuk ?></td>
					<td class="text-right"><?php echo number_format($value->tpagu_masuk) ?></td>

					<td class="text-center"><?php echo $value->sp_kt ?></td>
					<td class="text-center"><?php echo $value->sp_ks ?></td>
					<td class="text-center"><?php echo $value->sp_b ?></td>
					<td class="text-center"><?php echo $value->sp_j ?></td>

					<td class="text-center"><?php echo $value->review_belum ?></td>
					<td class="text-center"><?php echo $value->review_pokja ?></td>
					<td class="text-center"><?php echo $value->review_skpa ?></td>
					<td class="text-center"><?php echo $value->review_selesai ?></td>

					<td class="text-center"><a href="#" onClick="detail_paket(this)" data-id="<?php // echo $value->sp_id ?>-belum_tayang-pekerjaan_konstruksi" data-toggle="modal" data-target="#modal-default"><?php echo $value->bt_kt ?></a></td>
					<td class="text-center"><a href="#" onClick="detail_paket(this)" data-id="<?php // echo $value->kode ?>-belum_tayang-jasa_konsultansi" data-toggle="modal" data-target="#modal-default"><?php echo $value->bt_ks ?></a></td>
					<td class="text-center"><a href="#" onClick="detail_paket(this)" data-id="<?php // echo $value->kode ?>-belum_tayang-barang" data-toggle="modal" data-target="#modal-default"><?php echo $value->bt_b ?></a></td>
					<td class="text-center"><a href="#" onClick="detail_paket(this)" data-id="<?php //echo $value->kode ?>-belum_tayang-jasa_lainnya" data-toggle="modal" data-target="#modal-default"><?php echo $value->bt_j ?></a></td>

					<td class="text-center"><a href="#" onClick="detail_paket(this)" data-id="<?php //echo $value->kode ?>-tayang-pekerjaan_konstruksi" data-toggle="modal" data-target="#modal-default"><?php echo $value->t_kt ?></a></td>
					<td class="text-center"><a href="#" onClick="detail_paket(this)" data-id="<?php //echo $value->kode ?>-tayang-jasa_konsultansi" data-toggle="modal" data-target="#modal-default"><?php echo $value->t_ks ?></a></td>
					<td class="text-center"><a href="#" onClick="detail_paket(this)" data-id="<?php //echo $value->kode ?>-tayang-barang" data-toggle="modal" data-target="#modal-default"><?php echo $value->t_b ?></a></td>
					<td class="text-center"><a href="#" onClick="detail_paket(this)" data-id="<?php //echo $value->kode ?>-tayang-jasa_lainnya" data-toggle="modal" data-target="#modal-default"><?php echo $value->t_j ?></a></td>

					<td class="text-center"><a href="#" onClick="detail_paket(this)" data-id="<?php //echo $value->kode ?>-menang-pekerjaan_konstruksi" data-toggle="modal" data-target="#modal-default"><?php echo $value->m_kt ?></a></td>
					<td class="text-center"><a href="#" onClick="detail_paket(this)" data-id="<?php //echo $value->kode ?>-menang-jasa_konsultansi" data-toggle="modal" data-target="#modal-default"><?php echo $value->m_ks ?></a></td>
					<td class="text-center"><a href="#" onClick="detail_paket(this)" data-id="<?php //echo $value->kode ?>-menang-barang" data-toggle="modal" data-target="#modal-default"><?php echo $value->m_b ?></a></td>
					<td class="text-center"><a href="#" onClick="detail_paket(this)" data-id="<?php //echo $value->kode ?>-menang-jasa_lainnya" data-toggle="modal" data-target="#modal-default"><?php echo $value->m_j ?></a></td>

					<td class="text-center"><?php echo $value->b_kt ?></td>
					<td class="text-center"><?php echo $value->b_ks ?></td>
					<td class="text-center"><?php echo $value->b_b ?></td>
					<td class="text-center"><?php echo $value->b_j ?></td>
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
          $("#btn-Convert-Html2Image").attr("download", "cetak_paket_review.png").attr("href", newData);
      });

      });

      </script>

      <script src="../vendor/jsimage/html2canvas.js"></script>

  </body>
</html>
