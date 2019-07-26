<?php
$nip = isset($pejabat_detail) ? $pejabat_detail->nip : '' ;
$first_name = isset($pejabat_detail) ? $pejabat_detail->first_name : '' ;
$last_name = isset($pejabat_detail) ? $pejabat_detail->last_name : '' ;
$phone = isset($pejabat_detail) ? $pejabat_detail->phone : '' ;
$gender = isset($pejabat_detail) ? $pejabat_detail->gender : '' ;
$biro = isset($pejabat_detail) ? $pejabat_detail->biro : '' ;
?>

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Pejabat
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li>Pejabat</li>
			<li class="active">Data</li>
		</ol>
	</section>

	<section class="content">

<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Edit Pejabat</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->

  <div class="box-body">

    <form class="form-horizontal" method="post">

     <?php echo validation_errors(); ?>

     <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">NIP</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="nip" value="<?php echo $nip ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Nama Depan</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="first_name" value="<?php echo $first_name ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Nama Belakang</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="last_name" value="<?php echo $last_name ?>">
      </div>
    </div>

    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Telp/HP</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name='phone' value="<?php echo $phone ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Gender</label>
      <div class="col-sm-4">
        <?php
        $field = array('laki-laki'=>'Laki-laki','perempuan'=>'Perempuan');
        echo form_dropdown('gender', $field, $gender, 'class="form-control"');
        ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Biro</label>
      <div class="col-sm-4">
        <?php
        $field = array();
				foreach ($biro_list as $value){
					$field[$value->biro_id] = $value->biro_nama ;
				}
        echo form_dropdown('biro', $field, $biro, 'class="form-control"');
        ?>
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
