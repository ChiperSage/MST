<?php
$nip = isset($detail) ? $detail->pokja_nip : set_value('nip') ;
$nama = isset($detail) ? $detail->pokja_nama : set_value('nama') ;
$email = isset($detail) ? $detail->pokja_email : set_value('email') ;
$pangkat = isset($detail) ? $detail->pokja_pangkat : '' ;
$golongan = isset($detail) ? $detail->pokja_golongan : '' ;
$tahun = isset($detail) ? $detail->pokja_tahun : date('Y-').'01-01' ;
$status = isset($detail) ? $detail->pokja_status : 1 ;
?>

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>POKJA<small>Control Panel</small></h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
			<li>Pokja</li>
			<li class="active">Edit</li>
		</ol>
	</section>

	<section class="content">

    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Edit</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

				<form class="form-horizontal" method="post" enctype="multipart/form-data">

				 <?php //echo validation_errors() ?>

				 <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">NIP</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="nip" value="<?php echo $nip ?>">
						<span class="text-danger"><?php echo form_error('nip'); ?></span>
					</div>
				</div>

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="nama" value="<?php echo $nama ?>">
						<span class="text-danger"><?php echo form_error('nama'); ?></span>
					</div>
				</div>

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="email" value="<?php echo $email ?>">
						<span class="text-danger"><?php echo form_error('email'); ?></span>
					</div>
				</div>

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Pangkat</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="pangkat" value="<?php echo $pangkat ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Golongan</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="golongan" value="<?php echo $golongan ?>">
					</div>
				</div>

								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Tahun Masuk</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" name="tahun" readonly value="<?php echo $tahun ?>">
									</div>
								</div>

								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Status</label>
									<div class="col-sm-3">
										<?php
										$field = array(1=>'Aktif',0=>'Non Aktif');
										echo form_dropdown('status', $field, $status, 'class="form-control"');
										?>
									</div>
								</div>

								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Foto</label>
									<div class="col-sm-3">
										<input type="file" name="userfile">
									</div>
								</div>

				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label"></label>
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
						<a class="btn btn-default" href="<?php echo base_url('pokja') ?>"><i class="fa fa-return"></i> Kembali</a>
					</div>
				</div>

				</form>

      </div>
      <!-- /.box-body -->
    </div>

</section>

</div>
