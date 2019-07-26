<?php
$data = (isset($detail)) ? $detail->data : '' ;
$url = (isset($detail)) ? $detail->url : '' ;
$tahun = (isset($detail)) ? $detail->tahun : '' ;
?>

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			JSON
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

     <?php echo validation_errors() ?>

     <div class="form-group">
      <label for="" class="col-sm-2 control-label">RUP Url</label>
      <div class="col-sm-3">
				<?php
				$field = array(''=>'Pilih Data','rup'=>'RUP','lelang'=>'Lelang','non_tender'=>'Non Tender','paket'=>'Paket');
				echo form_dropdown('data', $field, $data, 'class="form-control"');
				?>
        <!-- <input type="text" class="form-control" name="rup" value="<?php echo $rup ?>" placeholder="http://..."> -->
      </div>
    </div>

		<div class="form-group">
		 <label for="" class="col-sm-2 control-label">Url</label>
		 <div class="col-sm-6">
			 <input type="text" class="form-control" name="url" value="<?php echo $url ?>" placeholder="http://...">
		 </div>
	 </div>

	 <div class="form-group">
		<label for="" class="col-sm-2 control-label">Tahun</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" name="tahun" value="<?php echo $tahun ?>" placeholder="http://...">
		</div>
	</div>

    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label"></label>
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary"><i class='fa fa-save'></i> Update</button>
				<a href="<?php echo base_url('json') ?>" class="btn btn-default"><i class='fa fa-pencilx'></i> Kembali</a>
      </div>
    </div>

  </form>

</div>

</div>

</section>

</div>
