<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CheckList DPP</title>

    <!-- Normalize or reset CSS with your favorite library -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css"> -->

    <!-- Load paper.css for happy printing -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/papercss/dist/paper.min.css"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css">

<!-- Set also "landscape" if you need -->
    <style>
      @page{ size: legal }
    </style>

  </head>
  <body>

    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/font-awesome/css/font-awesome.min.css">

<div class="container">

<br><br>

<table class="table table-sm table-bordered">
  <tr>
    <th></th>
    <th colspan="2">LEMBAR VERIFIKASI KELENGKAPAN DOKUMEN PERSIAPAN PENGADAAN</th>
    <th>Hard</th>
    <th>SPSE</th>
  </tr>
  <tr>
    <th>A</th>
    <td colspan="2">Data Umum SKPA</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Kode SiRUP</td>
    <td>: <?php echo $tpd->kode_rup ?></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Nama SKPA</td>
    <td>: <?php echo $tpd->nama_skpa ?></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Nama PA/KPA/PPK</td>
    <td>: <?php echo $tpd->nama_pa.' '.$tpd->hp_pa ?></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Nama PABUNG</td>
    <td>: <?php echo $tpd->nama_pabung.' '.$tpd->hp_pabung ?></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Nama Paket</td>
    <td>: <?php echo $tpd->nama_paket ?></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Jenis Pengadaan</td>
    <td>: <?php echo $tpd->jenis_pengadaan ?></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Lokasi Pekerjaan</td>
    <td>: <?php echo $tpd->lokasi_pekerjaan ?></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Sumber Dana</td>
    <td>: <?php echo $tpd->sumber_dana ?></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Nilai Pagu</td>
    <td>: RP. <?php echo number_format($tpd->nilai_pagu) ?></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Nilai HPS</td>
    <td>: Rp. <?php echo number_format($tpd->nilai_hps) ?></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Rencana Waktu Pemilihan (SiRUP)</td>
    <td>Mulai: <?php echo date('d-m-Y', strtotime($tpd->awal_pengadaan)) ?> Akhir: <?php echo date('d-m-Y', strtotime($tpd->akhir_pengadaan)) ?></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Pengelola Teknis Kegiatan</td>
    <td>: <?php echo $tpd->pengelola_teknis_kegiatan.' '.$tpd->hp_pengelola_teknis_kegiatan ?></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>B</th>
    <th>Data Akun KPA/PPK (disampaikan cukup 1 kali)</th>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>1. Fotocopy SK KPA/PPK</td>
    <td></td>
    <td class="text-center"><?php echo ($tpd->fotocopy_sk == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>2. Biodata KPA/PPK</td>
    <td></td>
    <td class="text-center"><?php echo ($tpd->biodata_kpa == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
    <td></td>
  </tr>
  <tr>
    <th>C</th>
    <th>Data Dokumen Persiapan Pengadaan</th>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>1. Surat Pelimpahan Dokumen Persiapan Pengadaan</td>
    <td></td>
    <td class="text-center"><?php echo ($tpd->surat_pelimpahan == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>- Lampiran Daftar Paket Pengadaan</td>
    <td></td>
    <td class="text-center"><?php echo ($tpd->lampiran_daftar == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>2. Lembar Data Pengadaan pada DPA-SKPA</td>
    <td></td>
    <td class="text-center"><?php echo ($tpd->lembar_data == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>3. Cetak RUP</td>
    <td></td>
    <td class="text-center"><?php echo ($tpd->cetak_rup == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>4. Harga Perkiraan Sendiri (HPS)</td>
    <td></td>
    <td class="text-center"><?php echo ($tpd->harga_perkiraan == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>a. Rekapitulasi Harga</td>
    <td></td>
    <td class="text-center"><?php echo ($tpd->rekapitulasi_harga == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>b. Daftar Kuantitas dan Harga</td>
    <td></td>
    <td class="text-center"><?php echo ($tpd->daftar_kuantitas == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
    <td class="text-center"><?php echo ($tpd->daftar_kuantitas_spse == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
  </tr>
  <tr>
    <td></td>
    <td>c. Daftar upah, bahan dan peralatan</td>
    <td></td>
    <td class="text-center"><?php echo ($tpd->daftar_upah == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>d. Riwayat (rekam jejak) perhitungan HPS</td>
    <td></td>
    <td class="text-center"><?php echo ($tpd->riwayat_perhitungan == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>5. Kerangka Acuan Kerja (KAK)</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>a. Uraian Kegiatan</td>
    <td></td>
    <td class="text-center"><?php echo ($tpd->uraian_kegiatan == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
    <td class="text-center"><?php echo ($tpd->uraian_kegiatan_spse == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
  </tr>
  <tr>
    <td></td>
    <td>b. Waktu Pelaksanaan Pekerjaan</td>
    <td class="text-center"><?php echo $tpd->hari_kalender ?> Hari Kalender</td>
    <td class="text-center"><?php echo ($tpd->jangka_waktu == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>c. Daftar Kebutuhan Tenaga Terampil</td>
    <td></td>
    <td class="text-center"><?php echo ($tpd->daftar_kebutuhan == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
    <td class="text-center"><?php echo ($tpd->daftar_kebutuhan_spse == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
  </tr>
  <tr>
    <td></td>
    <td>d. Gambar Peralatan Utama</td>
    <td></td>
    <td class="text-center"><?php echo ($tpd->daftar_peralatan == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
    <td class="text-center"><?php echo ($tpd->daftar_peralatan_spse == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
  </tr>
  <tr>
    <td></td>
    <td>e. Spesifikasi Teknis</td>
    <td></td>
    <td class="text-center"><?php echo ($tpd->spesifikasi_teknis == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
    <td class="text-center"><?php echo ($tpd->spesifikasi_teknis_spse == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
  </tr>
  <tr>
    <td></td>
    <td>f. Gambar</td>
    <td></td>
    <td class="text-center"><?php echo ($tpd->gambar_rencana == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
    <td class="text-center"><?php echo ($tpd->gambar_rencana_spse == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
  </tr>
  <tr>
    <td></td>
    <td>6. Rancangan Kontrak</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>a. Naskah Rancangan Kontrak (ditandatangani KPA/PPK)</td>
    <td></td>
    <td class="text-center"><?php echo ($tpd->naskah_rancangan == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
    <td class="text-center"><?php echo ($tpd->naskah_rancangan_spse == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
  </tr>
  <tr>
    <td></td>
    <td>b. Syarat-syarat umum kontrak (SSUK)</td>
    <td></td>
    <td class="text-center"><?php echo ($tpd->syarat_umum == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
    <td class="text-center"><?php echo ($tpd->syarat_umum_spse == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
  </tr>
  <tr>
    <td></td>
    <td>c. Syarat-syarat khusus kontrak (SSKK)</td>
    <td></td>
    <td class="text-center"><?php echo ($tpd->syarat_khusus == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
    <td class="text-center"><?php echo ($tpd->syarat_khusus_spse == 1) ? '<i class="fa fa-check"></i>' : '' ; ?></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="2" class="text-uppercase text-center">Hasil Verifikasi Kelengkapan Dokumen</td>
    <td colspan="4" rowspan="3" class="text-center">
Banda Aceh, <?php echo tanggal_indo(date('d F Y', strtotime($tpd->tanggal))) //tanggal_indo(date('d F Y')) ?><br>Pemeriksa,
    </td>
  </tr>
  <tr>
    <td></td>
    <td><?php echo ($tpd->kelengkapan == 1) ? '<i class="fa fa-check"></i> Lengkap' : '' ; ?></td>
    <td><?php echo ($tpd->kelengkapan == 0) ? '<i class="fa fa-check"></i> Tidak Lengkap' : '' ; ?></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="2" class="text-uppercase text-center">catatan hasil verifikasi</td>
  </tr>
  <tr>
    <td></td>
    <td colspan="2"><?php echo $tpd->keterangan ?></td>
    <td colspan="4" class="text-center">
<?php echo $tpd->first_name.' '.$tpd->last_name ?>
    </td>
  </tr>
</table>

</div>

  </body>
</html>
