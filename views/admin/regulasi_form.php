<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Regulasi
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> POKJA</a></li>
			<li>Regulasi</li>
      <li>Upload</li>
		</ol>
	</section>

	<section class="content">

<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Upload File</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <div class="box-body">

		<form class="form-horizontal" method="post" enctype="multipart/form-data">

		 <?php echo validation_errors(); ?>

		 <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Nama File</label>
			<div class="col-sm-7">
				<input type="text" class="form-control" name="nama" value="">
			</div>
		</div>

		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Keterangan</label>
			<div class="col-sm-8">
				<textarea name="keterangan" class="form-control" rows="7"></textarea>
			</div>
		</div>

		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Browse File</label>
			<div class="col-sm-8">
				<input type="file" name="userfile" class="form-control">
			</div>
		</div>

		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label"></label>
			<div class="col-sm-10">
				<button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i> Upload</button>
			</div>
		</div>

		</form>

	</div>
</div>
</section>

</div>
