<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Surat Penugasan</title>

  <!-- Normalize or reset CSS with your favorite library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

  <!-- Load paper.css for happy printing -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">

	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/twbs/bootstrap/dist/css/bootstrap-cust.min.css">

  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <style>
	@page { size: A4 }
	@font-face { font-family: sylfaen; src: url('http://localhost/monev/vendor/sylfaen.ttf'); }
	.font-18{font-size: 18pt;}
	.container{font-size: 12pt; font-family: sylfaen !important;}
	</style>

</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body class="A4">

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <section class="sheet padding-10mm">

    <!-- Write HTML just like a web page -->
    <article>

			<div class="text-center font-18">PEMERINTAH ACEH</div>
	    <div class="text-center font-18">BIRO PENGADAAN BARANG DAN JASA</div>

	<!-- <p class="text-center">Jalan Teuku Nyak Arif No. 219, Banda Aceh 23125 <br> Email: biro.pengadaan@acehprov.go.id</p> -->

	<hr style="border-top-width: 2px; border-bottom-width: 5px; border-style:double; border-color:black;">

	<div class="text-center text-uppercase"><u><b>surat penugasan</b></u></div>
	<div class="text-center">Nomor: 027/SP/<?php echo $sp->sp_nomor ?>/BPJ/<?php echo date('Y') ?></div>

	<br>

	<label for="">DASAR:</label>

	<ol>
	  <li>Undang-undang Nomor 11 Tahun 2006 Tentang Pemerintah Aceh;</li>
	  <li>Peraturan Presiden Nomor 16 Tahun 2018 Tentang Pengadaan Barang/Jasa Pemerintah beserta peraturan turunannya;</li>
	  <li>Qanun Aceh Nomor 13 Tahun 2016 Tentang Pembentukan dan Susunan Perangkat Aceh;</li>
	  <li>Peraturan Gubernur Aceh Nomor 97 Tahun 2016 Tentang Kedudukan, Susunan Organisasi, Tugas, Fungsi dan Tata Kerja Sekretariat Daerah Aceh;</li>
	</ol>

	<label for=""><?php echo $sp->sp_kelompok ?></label>

	<table class="table table-bordered">
	  <tr>
	    <th width="50">No.</th>
	    <th class="text-center">NAMA/NIP</th>
	    <th class="text-center">JABATAN</th>
	    <th class="text-center">KETERANGAN</th>
	  </tr>
	  <?php
	  $i = 1;
	  foreach ($sp_anggota as $value){
	  ?>
	  <tr>
	    <td><?php echo $i++; ?></td>
	    <td><?php echo $value->pokja_nama.'<br>NIP. '.$value->anggota_nip; ?></td>
	    <td class="text-capitalize"><?php echo $value->anggota_jabatan; ?></td>
	    <td></td>
	  </tr>
	  <?php } ?>
	</table>

	<label for="">UNTUK:</label>

	<ol>
	  <li>Melaksanakan proses pelelangan secara elektronik berdasarkan Peraturan Presiden Nomor 16 Tahun 2018 dan berserta peraturan turunannya</li>
	  <li>Demikian disampaikan untuk dipatuhi dan dilaksanakan sebagaimana mestinya.</li>
	</ol>

	<br>

	<div class="row">
	  <div class="col-sm-4 offset-6">

	    <?php if($sp->sp_status == 2){ ?>

	    <table class="tg text-center">
	      <tr>
	        <td class="tg-0lax">
	          <!-- <img src="<?php //echo base_url($paraf_kasubbag->paraf) ?>" alt=""> -->
	        </td>
	        <td class="tg-0lax">
	          <p>Banda Aceh, <?php echo tanggal_indo(date('d F Y',strtotime($sp_paket_tanggal))) ?><p>
	            <strong>KEPALA BIRO<br/>
	          PENGADAAN BARANG DAN JASA</strong>
	        </td>
	        <td class="tg-0lax">
	          <!-- <img src="<?php //echo base_url($paraf_kabag->paraf) ?>" alt=""> -->
	        </td>
	      </tr>
	      <tr>
	        <td class="tg-0lax" colspan="3">
	<img src="<?php echo base_url($paraf_karo->paraf) ?>" width="150" alt="">
	        </td>
	      </tr>
	      <tr>
	        <td class="tg-0lax" colspan="3">
	          <p>
	          <u><strong>IRAWAN PANDU NEGARA, S.IP, M.Si</strong></u><br>
	          PEMBINA TK I<br>
	          NIP. 197210181992031001
	          </p>
	        </td>
	      </tr>
	    </table>

	    <?php } ?>

	  </div>
	</div>

		</article>

  </section>

</body>
</html>
