<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cetak Advokasi</title>
  </head>
  <body>

<link rel="stylesheet" href="<?php echo base_url() ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css">

<h3>Data Advokasi</h3>

<small class="pull-right"><?php echo date('d/m/Y H:i') ?></small>

<table class="table table-bordered">
  <thead>
    <tr class="text-center">
      <th width="30">No.</th>
      <th>Tanggal</th>
      <th>No. Surat</th>
      <th>Lembaga</th>
      <th>Alamat</th>
      <th>Nama Paket</th>
      <th>Materi</th>
      <th>Tahap</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=0; foreach ($advokasi as $value) { $i++ ?>
      <tr>
        <td class="text-center"><?php echo $i ?></td>
        <td><?php echo $value->tanggal ?></td>
        <td><?php echo $value->nomor_surat ?></td>
        <td><?php echo $value->lembaga ?></td>
        <td><?php echo $value->alamat ?></td>
        <td><?php echo $value->nama_paket ?></td>
        <td><?php echo $value->materi ?></td>
        <td><?php echo $value->tahap ?></td>
        <td><?php echo $value->keterangan ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>

  </body>
</html>
