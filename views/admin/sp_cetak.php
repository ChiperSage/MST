<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Surat Penugasan</title>

    <!-- Normalize or reset CSS with your favorite library -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css"> -->

    <!-- Load paper.css for happy printing -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/papercss/dist/paper.min.css"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css">

    <style>
  	@page { size: A4 }
  	@font-face { font-family: sylfaen; src: url('<?php echo base_url(); ?>vendor/sylfaen.ttf'); }
  	body{font-size: 12pt; font-family: sylfaen;}
    .container{padding: 50px 0;}
    .table th, .table td{border:1px solid}
    .font-18{font-size: 18pt;}
    .font-20{font-size: 20pt;}
  	</style>

  </head>
  <body>

<style media="screen">
  /* @font-face { font-family: sylfaen; src: url('<?php //echo base_url(); ?>vendor/sylfaen.ttf'); }
  table{border: 5px;}
  .font-18{font-size: 18pt;}
  .container{font-size: 12pt; font-family: sylfaen;} */
</style>

<div class="container">

    <div class="text-center font-18">PEMERINTAH ACEH</div>
    <div class="text-center" style="font-size:20pt">SEKRETARIAT DAERAH</div>
    <div class="text-center font-18">BIRO PENGADAAN BARANG DAN JASA</div>

<!-- <p class="text-center">Jalan Teuku Nyak Arif No. 219, Banda Aceh 23125 <br> Email: biro.pengadaan@acehprov.go.id</p> -->

<hr style="border-top-width: 2px; border-bottom-width: 5px; border-style:double; border-color:black;">

<div class="text-center text-uppercase"><u><b>surat penugasan</b></u></div>
<div class="text-center">Nomor: 027/SP/<?php echo $sp->sp_nomor ?>/BPJ/<?php echo date('Y') ?></div>

<br><br>

<label for="">DASAR:</label>

<ol>
  <li>Undang-undang Nomor 11 Tahun 2006 Tentang Pemerintahan Aceh;</li>
  <li>Peraturan Presiden Nomor 16 Tahun 2018 Tentang Pengadaan Barang/Jasa Pemerintah beserta peraturan turunannya;</li>
<li>Peraturan Lembaga Kebijakan Pengadaan Barang/Jasa Pemerintah Nomor 12 Tahun 2018 Tentang Pedoman Pengadaan Barang/Jasa Yang Dikecualikan Pada Pengadaan Barang/Jasa Pemerintah;</li>
  <li>Qanun Aceh Nomor 13 Tahun 2016 Tentang Pembentukan dan Susunan Perangkat Aceh;</li>
  <li>Peraturan Gubernur Aceh Nomor 97 Tahun 2016 Tentang Kedudukan, Susunan Organisasi, Tugas, Fungsi dan Tata Kerja Sekretariat Daerah Aceh;</li>
</ol>

<label for=""><?php echo $sp->sp_kelompok ?></label>

<table class="table">
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

<br><br><br><br>

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
          NIP. 19721018 199203 1 001
          </p>
        </td>
      </tr>
    </table>

    <?php } ?>

  </div>
</div>

</div>

<div class="container">

<div>
  <label for="">LAMPIRAN:</label>
  <ul class="list-unstyled">
    <li>SURAT PENUGASAN</li>
    <li><?php echo $sp->sp_kelompok ?></li>
    <li>Nomor: 027/SP/<?php echo $sp->sp_nomor ?>/PBJ/<?php echo date('Y') ?></li>
  </ul>
</div>

<table class="table">
  <tr>
    <th width="50">NO.</th>
    <th class="text-center">KODE RUP</th>
    <th class="text-center">NAMA PAKET</th>
    <th class="text-center">SINGKATAN</th>
    <th class="text-center">HPS</th>
    <th class="text-center">KETERANGAN</th>
  </tr>
  <?php
  $i = 1;
  foreach ($sp_paket as $value){
  ?>
  <tr>
    <td><?php echo $i++; ?></td>
    <td><?php echo $value->kode_rup ?></td>
    <td><?php echo $value->nama_paket ?></td>
    <td class="text-uppercase"><?php echo $value->singkatan ?></td>
    <td class="text-right"><?php echo number_format($value->hps) ?></td>
    <td><?php echo $value->paket_keterangan ?></td>
  </tr>
  <?php } ?>
</table>

<br><br><br>

<div class="row">
  <div class="col-sm-4 offset-6">

    <?php if($sp->sp_status == 2){ ?>

    <table class="tg text-center">
      <tr>
        <td class="tg-0lax">
          <!-- <img src="<?php echo base_url($paraf_kasubbag->paraf) ?>" alt=""> -->
        </td>
        <td class="tg-0lax">
          <p>Banda Aceh, <?php echo tanggal_indo(date('d F Y',strtotime($sp_paket_tanggal))) ?></p>
            <strong>KEPALA BIRO<br/>
          PENGADAAN BARANG DAN JASA</strong>
        </td>
        <td class="tg-0lax">
          <!-- <img src="<?php echo base_url($paraf_kabag->paraf) ?>" alt=""> -->
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
          NIP. 19721018 199203 1 001
          </p>
        </td>
      </tr>
    </table>

    <?php } ?>

  </div>
</div>

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <!-- <section class="sheet padding-10mm"></section> -->

</div>

  </body>
</html>
