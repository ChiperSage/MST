<?php
$tgl_update = isset($rup_detail) ? $rup_detail->tanggal_terakhir_di_update : date('Y-m-d') ;
$nama_paket = isset($rup_detail) ? $rup_detail->nama_paket : '' ;
$jenis_pengadaan = isset($rup_detail) ? $rup_detail->jenis_pengadaan : '' ;

// $jenis_pengadaan = isset($rup_detail) ? $rup_detail->jenis_pengadaan : '' ;
// $metode = isset($rup_detail) ? $rup_detail->metode : '' ;
// $pemilihan = isset($rup_detail) ? $rup_detail->pemilihan : date('Y-m-d') ;
// $kldi = isset($rup_detail) ? $rup_detail->kldi : '' ;
// $satuan_kerja = isset($rup_detail) ? $rup_detail->satuan_kerja : '' ;
// $lokasi = isset($rup_detail) ? $rup_detail->lokasi : '' ;
?>

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			RUP
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
			<li class="active">RUP</li>
		</ol>
	</section>

	<section class="content">

<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">RUP</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->

  <div class="box-body">

    <form class="form-horizontal" method="post">

     <?php echo validation_errors(); ?>

     <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Tgl. Terakhir Update</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="tanggal_update" value="<?php echo $tgl_update ?>">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Nama Paket</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="nama_paket" value="<?php echo $nama_paket ?>">
      </div>
    </div>

		<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Jenis Pengadaan</label>
      <div class="col-sm-4">
				<?php
				$field = array(''=>'Pilihan',
					'Barang'=>'Barang',
					'Jasa Lainnya'=>'Jasa Lainnya',
					'Pekerjaan Konstruksi'=>'Pekerjaan Konstruksi',
					'Jasa Konsultansi'=>'Jasa Konsultansi');
				echo form_dropdown('jenis_pengadaan', $field, $jenis_pengadaan,'class="form-control"');
				?>
        <!-- <input type="text" class="form-control" name="nama_paket" value="<?php echo $jenis_pengadaan ?>"> -->
      </div>
    </div>

		<div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label"></label>
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
      </div>
    </div>

  </form>

</div>

</div>

</section>

</div>
