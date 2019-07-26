<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Info<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li>Info</li>
			<!-- <li class="active">Data</li> -->
		</ol>
	</section>

	<section class="content">

    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Edit Info</h3>
			</div>
      <!-- /.box-header -->
      <div class="box-body">

				<?php //echo validation_errors(); ?>

<?php
$info = isset($detail) ? $detail->info : '' ;
$status = isset($detail) ? $detail->status : 1 ;
?>

<form class="form-horizontal" action="" method="post">

	<div class="form-group">
	 <label for="" class="col-sm-2 control-label">Info</label>
	 <div class="col-sm-6">
		 <textarea name="info" rows="8" cols='100'>
<?php echo $info ?>
		 </textarea>
		 <span class="text-danger"><?php echo form_error('info') ?></span>
	 </div>
	</div>

	<div class="form-group">
	 <label for="" class="col-sm-2 control-label">Status</label>
	 <div class="col-sm-3">
		 <?php
		 $field = array(1=>'Aktif',0=>'Tdk. Aktif');
		 echo form_dropdown('status',$field,$status,'class="form-control"');
		 ?>
	 </div>
	</div>

	<div class="form-group">
	 <label for="" class="col-sm-2 control-label"></label>
	 <div class="col-sm-5">
		 <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
		 <a class="btn btn-default" href="<?php echo base_url('info') ?>"><i class="fa fa-xundo"></i> Kembali</a>
	 </div>
	</div>

</form>

</div>
<!-- /.box-body -->
</div>
<!-- /.box -->

</section>

</div>
