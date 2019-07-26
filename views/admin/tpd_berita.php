<script type="text/javascript" src="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/select2/dist/js/select2.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/select2/dist/css/select2.min.css">

<script type="text/javascript">
// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
	$('.js-example-basic-single').select2();
});
</script>

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			TPD
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> TPD</a></li>
			<li>Berita Acara</li>
		</ol>
	</section>

	<section class="content">

		<div class="box box-primary">
		  <div class="box-header with-border">
		    <h3 class="box-title">Cetak Berita Acara</h3>
		  </div>
		  <!-- /.box-header -->
		  <!-- form start -->

		  <div class="box-body">

		<form class="form-horizontal" target="_blank" action="<?php echo base_url('tpd_check/berita_acara') ?>" method="get">

		 <?php //echo validation_errors(); ?>
		 <div class="form-group">
			<label for="" class="col-sm-2 control-label">Tanggal</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="tanggal" value="<?php echo date('Y-m-d') ?>">
			</div>
		</div>

		 <div class="form-group">
		  <label for="" class="col-sm-2 control-label">SKPA</label>
		  <div class="col-sm-6">
			<?php
			$field = array(''=>'Pilihan');
			foreach ($list_skpa as $value) {
				$field[$value->id_satker] = $value->nama_satker;
			}
			echo form_dropdown('skpa', $field, '','class="form-control"');
			?>
			<span class="text-danger"><?php echo form_error('kode_rup'); ?></span>
		  </div>
		 </div>

		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label"></label>
			<div class="col-sm-5">
				<button type="submit" class="btn btn-primary"><i class="fa fa-print"></i> Cetak</button>
				<a class="btn btn-default" href="<?php echo base_url('tpd_check') ?>">Kembali</a>
			</div>
		</div>

		</form>

</div>
</div>
</section>
</div>

<script type="text/javascript">
	function select(){
		if(document.getElementsByName('skpa')[0].value == ''){
			alert('Pilih satker terlebih dahulu.');
		}
	}
</script>
