<?php
$nama = isset($detail) ? $detail->biro_nama : '' ;
$keterangan = isset($detail) ? $detail->biro_keterangan : '' ;
?>

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Biro
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li>Biro</li>
			<li>Edit</li>
		</ol>
	</section>

	<section class="content">

<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Edit Biro</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->

  <div class="box-body">

    <form class="form-horizontal" method="post">

     <?php echo validation_errors(); ?>

     <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Biro</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="nama" value="<?php echo $nama ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Keterangan</label>
      <div class="col-sm-6">
				<textarea name="keterangan" class="form-control" rows="8" cols="80"><?php echo $keterangan ?></textarea>
      </div>
    </div>

    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label"></label>
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>

  </form>

</div>

</div>

</section>

</div>
