<?php
$id = isset($detail) ? $detail->sp_id : 0 ;
$tanggal = isset($detail) ? $detail->sp_tanggal : date('Y-m-d') ;
$nomor = isset($detail) ? $detail->sp_nomor : $autonomor ;
$kelompok = isset($detail) ? $detail->sp_kelompok : '' ;
?>

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			SP
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
			<li>SP</li>
			<li class="active">Edit</li>
		</ol>
	</section>

	<section class="content">

		<div class="box box-info">
		  <div class="box-header with-border">
		    <h3 class="box-title">Edit</h3>
		  </div>
		  <!-- /.box-header -->
		  <!-- form start -->

		  <div class="box-body">

		<form class="form-horizontal" method="post">

		 <?php //echo validation_errors(); ?>

		 <div class="form-group">
			<label for="" class="col-sm-2 control-label">Nomor</label>
			<div class="col-sm-2">
				<input type="hidden" class="form-control" name="id" value="<?php echo $id ?>">
				<input type="text" class="form-control" name="nomor" readonly value="<?php echo $nomor ?>">
				<span class="text-danger"><?php echo form_error('nomor'); ?></span>
			</div>
		</div>

		<div class="form-group">
			<label for="" class="col-sm-2 control-label">Tanggal</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="tanggal" value="<?php echo $tanggal ?>">
				<span class="text-danger"><?php echo form_error('tanggal'); ?></span>
			</div>
		</div>

		<div class="form-group">
			<label for="" class="col-sm-2 control-label">Kelompok</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="kelompok" value="<?php echo $kelompok ?>">
				<span class="text-danger"><?php echo form_error('kelompok'); ?></span>
			</div>
		</div>

		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label"></label>
			<div class="col-sm-10">
				<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
				<a class="btn btn-default" href="<?php echo base_url('sp') ?>"><i class="fa fa-return"></i> Kembali</a>
			</div>
		</div>

		</form>

</div>

</div>

	</section>

</div>
