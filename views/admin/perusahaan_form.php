<?php
$id = isset($detail) ? $detail->id : 0 ;
$npwp = isset($detail) ? $detail->npwp : '' ;
$nama = isset($detail) ? $detail->nama_perusahaan : '' ;
$ekuitas = isset($detail) ? $detail->ekuitas : '' ;
$jenis_pengadaan = isset($detail) ? $detail->jenis_pengadaan : '' ;
$kualifikasi = isset($detail) ? $detail->kualifikasi : '' ;
$keterangan = isset($detail) ? $detail->keterangan : '' ;
?>

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Perusahaan
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Pokja</a></li>
      <li>Perusahaan</li>
			<!-- <li class="active">Data</li> -->
		</ol>
	</section>

	<section class="content">

        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data Perusahaan</h3>
						<?php
						$seg = $this->uri->segment(2);
						if($seg == 'create' || $seg == 'update'){
						?>
						<!-- <a class="btn btn-default pull-right" href="<?php //echo base_url('perusahaan') ?>"><i class="fa fa-undo"></i> Kembali</a> -->
						<?php }else{ ?>
						<a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url('perusahaan/create') ?>"><i class="fa fa-plus-circle"></i> Tambah</a>
						<?php } ?>
          </div>
          <!-- /.box-header -->
          <div class="box-body">

<form class="form-horizontal" method="post">

<?php //echo validation_errors() ?>

<div class="form-group">
	<label for="" class="col-sm-2 control-label">NPWP</label>
	<div class="col-sm-4">
		<input type="text" class="form-control" name="npwp" value="<?php echo $npwp ?>">
		<span class="text-danger"><?php echo form_error('npwp') ?></span>
	</div>
</div>

<div class="form-group">
 <label for="" class="col-sm-2 control-label">Nama Perusahaan</label>
 <div class="col-sm-6">
	 <input type="text" class="form-control" name="nama" value="<?php echo $nama ?>">
	 <span class="text-danger"><?php echo form_error('nama') ?></span>
 </div>
</div>

<div class="form-group">
<label for="" class="col-sm-2 control-label">Ekuitas</label>
<div class="col-sm-6">
	<input type="text" class="form-control" name="ekuitas" value="<?php echo $ekuitas ?>">
	<span class="text-danger"><?php echo form_error('ekuitas') ?></span>
</div>
</div>

<div class="form-group">
<label for="" class="col-sm-2 control-label">Jenis Pengadaan</label>
<div class="col-sm-6">
  <?php
  $field = array(''=>'Pilihan',
    'barang'=>'Barang','konstruksi'=>'Konstruksi','konsultansi'=>'Konsultansi','jasa lainnya'=>'Jasa Lainnya');
  echo form_dropdown('jenis_pengadaan',$field,$jenis_pengadaan,'class="form-control"');
  ?>
	<!-- <input type="text" class="form-control" name="jenis_pengadaan" value="<?php //echo $ekuitas ?>"> -->
	<span class="text-danger"><?php //echo form_error('ekuitas') ?></span>
</div>
</div>

<div class="form-group">
<label for="" class="col-sm-2 control-label">Kualifikasi</label>
<div class="col-sm-6">
  <?php
  $field = array(''=>'Pilihan','non kecil'=>'Non Kecil','kecil'=>'Kecil');
  echo form_dropdown('kualifikasi',$field,$kualifikasi,'class="form-control"');
  ?>
	<!-- <input type="text" class="form-control" name="kualifikasi" value="<?php //echo $ekuitas ?>"> -->
	<span class="text-danger"><?php //echo form_error('ekuitas') ?></span>
</div>
</div>

<div class="form-group">
<label for="" class="col-sm-2 control-label">Keterangan</label>
<div class="col-sm-6">
 <input type="text" class="form-control" name="keterangan" value="<?php echo $keterangan ?>">
</div>
</div>

<div class="form-group">
<label for="" class="col-sm-2 control-label"></label>
<div class="col-sm-6">
 <button type="submit" class="btn btn-sm btn-primary" name="button"><i class="fa fa-save"></i> Simpan</button>
 <a class="btn btn-sm btn-default" href="<?php echo base_url('perusahaan') ?>">Kembali</a>
</div>
</div>

</form>

</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</section>
</div>
