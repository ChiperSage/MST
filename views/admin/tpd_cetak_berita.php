<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Berita Acara</title>

  <!-- Normalize or reset CSS with your favorite library -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css"> -->

  <!-- Load paper.css for happy printing -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css"> -->

  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <link rel="stylesheet" href="<?php echo base_url() ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css" >

  <style>
	@page { size: A4 }
	@font-face { font-family: sylfaen; src: url('http://localhost/monev/vendor/sylfaen.ttf'); }
	body{font-size: 12pt; font-family: sylfaen;}
  .container{padding: 50px 0;}
	</style>

</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body class="A4">

<?php //print_r($tpd) ?>

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <section class="sheet padding-10mm">
    <article>
		</article>
  </section>

  <div class="container">

    <h4 class="text-center">BERITA ACARA VERIFIKASI KELENGKAPAN</h4>
    <h4 class="text-center">DOKUMEN PERSIAPAN PENGADAAN</h4>

<br><br>

  <p>
    Pada hari ini <?php echo hari_indo(date('l')) ?> tanggal <?php echo date('d') ?> bulan <?php echo tanggal_indo(date('F')) ?> Tahun Dua Ribu Sembilan Belas, kami yang bertanda tangan di bawah ini:<br/>
  </p>

  <table>
    <tr>
      <td width="150">Nama</td>
      <td>: <?php echo isset($berita[0]->nama_pabung) ? $berita[0]->nama_pabung : '' ; ?></td>
    </tr>
    <tr>
      <td>Jabatan/SKPA</td>
      <td>: Pebung SKPA <?php echo isset($berita[0]->nama_skpa) ? $berita[0]->nama_skpa : '' ; ?></td>
    </tr>
  </table>

<p>Selanjutnya disebut PIHAK PERTAMA</p>

<table>
  <tr>
    <td width="150">Nama</td>
    <td>: <?php echo isset($berita[0]->petugas) ? $berita[0]->petugas : '' ; ?></td>
  </tr>
  <tr>
    <td>Jabatan/Sebagai</td>
    <td>: Tim Penerima Dokumen Biro Pengadaan Barang/Jasa</td>
  </tr>
</table>

<p>Selanjutnya disebut PIHAK KEDUA</p>

<p>PIHAK PERTAMA telah menyerahkan Dokumen Persiapan Pengadaan Barang/Jasa kepada PIHAK KEDUA. PIHAK KEDUA melakukan verifikasi kelengkapan Dokumen sesuai dengan APBA T.A 2019 SKPA ... sebagai berikut</p>

<table class="table table-bordered">
  <tr class="text-center">
    <td width="50" rowspan="2">No</td>
    <td rowspan="2">Nama Paket</td>
    <td colspan="2">Kode</td>
    <td colspan="4">Status Pengadaan</td>
    <td>Jenis Pengadaan</td>
    <td colspan="2">Nilai Rupiah</td>
  </tr>
  <tr class="text-center">
    <td>SiRUP</td>
    <td>SPSE</td>
    <td>Baru</td>
    <td>Rutin</td>
    <td>Lanjutan</td>
    <td>MYC</td>
    <td></td>
    <td>Pagu</td>
    <td>HPS</td>
  </tr>
  <?php $i = 1; foreach ($berita as $value) {?>
  <tr>
    <td><?php echo $i++ ?></td>
    <td><?php echo $value->nama_paket ?></td>
    <td><?php echo $value->kode_rup ?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><?php echo $value->jenis_pengadaan ?></td>
    <td class="text-right"><?php echo number_format($value->nilai_pagu) ?></td>
    <td class="text-right"><?php echo number_format($value->nilai_hps) ?></td>
  </tr>
  <?php } ?>
</table>

<p>PIHAK KEDUA telah melakukan verifikasi kelengkapan dokumen sesuai dengan Petunjuk Teknis Penerimaan Dokumen Persiapan Pengadaan dan dinyatakan LENGKAP untuk di terima, selanjutnya diproses tender sesuai dengan mekanisme dan ketentuan yang berlaku. Terlampir resume pemeriksaan yang merupakan satu kesatuan dari Berita Acara ini</p>
<p>Demikian Berita Acara Verifikasi Kelengkapan Dokumen Persiapan Pengadaan ini dibuat pada hari, tanggal, bulan dan tahun tersebut di atas untuk dapat dipergunakan seperlunya.</p>

<table class="text-center">
  <tr>
    <td width="33%">PIHAK KEDUA</td>
    <td width="33%"></td>
    <td width="33%">PIHAK PERTAMA</td>
  </tr>
  <tr>
    <td>Yang Menerima</td>
    <td></td>
    <td>Yang Menyerahkan</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>
    <?php
    $id = $this->session->userdata('user_id');
    $user = $this->db->get_where('users',array('id'=>$id))->row();
    echo $user->first_name.' '.$user->last_name;
    //echo isset($berita[0]->petugas) ? $berita[0]->petugas : '' ;
    ?>
    </td>
    <td></td>
    <td><?php echo isset($berita[0]->nama_pabung) ? $berita[0]->nama_pabung : '' ; ?></td>
  </tr>
</table>

  </div>

</body>
</html>
