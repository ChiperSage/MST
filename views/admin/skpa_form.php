<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			SKPA<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li>SKPA</li>
		</ol>
	</section>

	<section class="content">

    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">SKPA</h3>
			</div>
      <!-- /.box-header -->
      <div class="box-body">

				<?php
				$kode = isset($detail) ? $detail->kode : '' ;
				$nama = isset($detail) ? $detail->nama : '' ;
				$singkatan = isset($detail) ? $detail->singkatan : '' ;
				?>

				<form class="form-horizontal" action="" method="post">

					<div class="form-group">
					 <label for="" class="col-sm-2 control-label">Kode Satker</label>
					 <div class="col-sm-3">
						 <input type="text" name="kode" value="<?php echo $kode ?>" class="form-control">
						 <span class="text-danger"><?php echo form_error('kode') ?></span>
					 </div>
					</div>

					<div class="form-group">
					 <label for="" class="col-sm-2 control-label">Nama Satker</label>
					 <div class="col-sm-8">
						 <input type="text" name="nama" value="<?php echo $nama ?>" class="form-control">
						 <span class="text-danger"><?php echo form_error('nama') ?></span>
					 </div>
					</div>

					<div class="form-group">
					 <label for="" class="col-sm-2 control-label">Singkatan</label>
					 <div class="col-sm-5">
						 <input type="text" name="singkatan" value="<?php echo $singkatan ?>" class="form-control">
						 <span class="text-danger"><?php echo form_error('singkatan') ?></span>
					 </div>
					</div>

					<div class="form-group">
					 <label for="" class="col-sm-2 control-label"></label>
					 <div class="col-sm-5">
						 <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
						 <a class="btn btn-default" href="<?php echo base_url('skpa') ?>"> Kembali</a>
					 </div>
					</div>

				</form>

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

</section>

</div>
