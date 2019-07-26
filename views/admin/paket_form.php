<?php
$nama = isset($paket_detail) ? $paket_detail->paket_nama : '' ;
$bidang = isset($paket_detail) ? $paket_detail->paket_bidang : '' ;
$pagu = isset($paket_detail) ? $paket_detail->paket_pagu : 0 ;
$metode = isset($paket_detail) ? $paket_detail->paket_metode : '' ;
$lokasi = isset($paket_detail) ? $paket_detail->paket_lokasi : '' ;
$pejabat = isset($paket_detail) ? $paket_detail->paket_pejabat : '' ;
$status = isset($paket_detail) ? $paket_detail->paket_status : '' ;
$keterangan = isset($paket_detail) ? $paket_detail->paket_keterangan : '' ;
?>

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Paket Pekerjaan
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
			<li class="active">Paket</li>
		</ol>
	</section>

	<section class="content">

<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Edit Paket</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->

  <div class="box-body">

    <form class="form-horizontal" method="post">

     <?php echo validation_errors(); ?>

     <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Paket Pekerjaan</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="nama" value="<?php echo $nama ?>">
      </div>
    </div>

		<div class="form-group">
		 <label for="inputEmail3" class="col-sm-2 control-label">Bidang</label>
		 <div class="col-sm-3">
			 <!-- <input type="text" class="form-control" name="nama" value="<?php echo $nama ?>"> -->
			 <?php
			 $field = array(''=>'Pilihan',
				 'barang_jasa'=>'Barang Jasa','jasa_lain'=>'Jasa Lain','konstruksi'=>'Konstruksi','konsultansi'=>'Konsultansi');
			 echo form_dropdown('bidang',$field,$bidang,'class="form-control"')
			 ?>
		 </div>
	 </div>

    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Pagu</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="pagu" value="<?php echo $pagu ?>">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Metode</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="metode" value="<?php echo $metode ?>">
      </div>
    </div>

    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Lokasi</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name='lokasi' value="<?php echo $lokasi ?>">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Pejabat</label>
      <div class="col-sm-4">
        <?php
        $field = array();
				foreach ($user_list as $value) {
					$field[$value->id] = $value->first_name . ' ' . $value->last_name;
				}

        echo form_dropdown('pejabat', $field, $pejabat, 'class="form-control"');
        ?>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Status</label>
      <div class="col-sm-4">
        <?php
        $field = array('publish'=>'Tayang','draft'=>'Blm Tayang','cancel'=>'Batal');
        echo form_dropdown('status', $field, $status, 'class="form-control"');
        ?>
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Keterangan</label>
      <div class="col-sm-6">
				<textarea name="keterangan" class="form-control" rows="8" cols="80"><?php echo $keterangan ?></textarea>
        <!-- <input type="text" class="form-control" name="keterangan" value="<?php echo $keterangan ?>"> -->
      </div>
    </div>

    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label"></label>
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
				<a href="<?php echo base_url('paket') ?>" class="btn btn-default">Kembali</a>
      </div>
    </div>

  </form>

</div>

</div>

</section>

</div>
