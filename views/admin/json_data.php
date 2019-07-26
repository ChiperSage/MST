<?php
$rup = (count($data_rup) == 0) ? '' : $data_rup->url ;
$lelang = (count($data_lelang) == 0) ? '' : $data_lelang->url ;
$paket = (count($data_paket) == 0) ? '' : $data_paket->url ;
?>

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>JSON
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li>JSON</li>
			<li>Data</li>
		</ol>
	</section>

	<section class="content">

<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Data JSON</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->

  <div class="box-body">

    <form class="form-horizontal" method="post">

     <?php //echo validation_errors(); ?>

     <div class="form-group">
      <label for="" class="col-sm-2 control-label">RUP Url</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="rup" value="<?php echo $rup ?>" readonly placeholder="http://...">
      </div>
    </div>

		<div class="form-group">
		 <label for="" class="col-sm-2 control-label">Paket Url</label>
		 <div class="col-sm-6">
			 <input type="text" class="form-control" name="paket" value="<?php echo $paket ?>" readonly placeholder="http://...">
		 </div>
	 </div>

	 <div class="form-group">
		<label for="" class="col-sm-2 control-label">Lelang Url</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" name="lelang" value="<?php echo $lelang ?>" readonly placeholder="http://...">
		</div>
	</div>

    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label"></label>
      <div class="col-sm-10">
				<a href="<?php echo base_url('json/update') ?>" class="btn btn-success"><i class='fa fa-pencil'></i> Edit URL</a>
        <!-- <button type="submit" class="btn btn-primary"><i class='fa fa-save'></i> Update</button> -->
      </div>
    </div>

  </form>

</div>

</div>

</section>

</div>
