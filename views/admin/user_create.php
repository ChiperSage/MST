<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Pengguna
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
			<li>Pengguna</li>
			<li class="active">Baru</li>
		</ol>
	</section>

	<section class="content">

<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Tambah Pengguna Baru</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form class="form-horizontal" method="post" action="<?php echo base_url('user/create_user') ?>">
    <div class="box-body">

      <p><?php echo lang('create_user_subheading');?></p>
      <div id="infoMessage"><?php //echo $message;?></div>

      <?php if($identity_column!=='email') { ?>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
          <div class="col-sm-3">
            <?php
            // echo form_error('identity');
            echo form_input($identity);
            ?>
						<span class="text-danger"><?php echo form_error('identity'); ?></span>
          </div>
        </div>

      <?php } ?>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-4">
          <?php echo form_input($email);?>
					<span class="text-danger"><?php echo form_error('email'); ?></span>
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Nama Depan</label>
        <div class="col-sm-5">
          <?php echo form_input($first_name);?>
					<span class="text-danger"><?php echo form_error('first_name'); ?></span>
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Nama Belakang</label>
        <div class="col-sm-5">
          <?php echo form_input($last_name);?>
					<span class="text-danger"><?php echo form_error('last_name'); ?></span>
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-4">
          <?php echo form_input($password);?>
					<span class="text-danger"><?php echo form_error('password'); ?></span>
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Ulangi Password</label>
        <div class="col-sm-4">
          <?php echo form_input($password_confirm);?>
					<span class="text-danger"><?php echo form_error('password_confirm'); ?></span>
        </div>
      </div>

			<div class="form-group">
	      <label for="inputEmail3" class="col-sm-2 control-label">Paraf</label>
	      <div class="col-sm-4">
	        <?php echo form_input($paraf);?>
	      </div>
	    </div>

    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Tambah</button>
            <a class="btn btn-default" href="<?php echo base_url('user') ?>">Kembali</a> </p>

            <!-- <input type="checkbox"> Remember me -->
          </div>
        </div>
      </div>

      <!-- <button type="submit" class="btn btn-info pull-right">Sign in</button> -->
    </div>
    <!-- /.box-footer -->
  </form>
</div>

</section>

</div>
