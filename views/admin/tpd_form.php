<script type="text/javascript" src="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/select2/dist/js/select2.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/select2/dist/css/select2.min.css">

<script type="text/javascript">
// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
	$('.js-example-basic-single').select2();
});
</script>

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			SKPA
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> SKPA</a></li>
			<li>TPD</li>
		</ol>
	</section>

	<section class="content">

		<?php
		// sess data
		$id = $this->session->userdata('user_id');
		$data_login = $this->ion_auth->user($id)->row();

		// print_r($data_login->id_satker);

		$id = isset($detail) ? $detail->id : '' ;

		$kode_rup = isset($detail) ? $detail->kode_rup : '';
		$nama_pabung = isset($detail) ? $detail->nama_pabung : '' ;
		$nilai_hps = isset($detail) ? $detail->nilai_hps : '' ;
		$pengelola_teknis_kegiatan = isset($detail) ? $detail->pengelola_teknis_kegiatan : '' ;

		$nama_skpa = isset($detail) ? $detail->nama_skpa : '' ;
		$nama_pa = isset($detail) ? $detail->nama_pa : '' ;
		$nama_paket = isset($detail) ? $detail->nama_paket : '' ;
		$jenis_pengadaan = isset($detail) ? $detail->jenis_pengadaan : '' ;
		$lokasi_pekerjaan = isset($detail) ? $detail->lokasi_pekerjaan : '' ;
		$sumber_dana = isset($detail) ? $detail->sumber_dana : '' ;
		$nilai_pagu = isset($detail) ? $detail->nilai_pagu : '' ;
		$awal_pengadaan = isset($detail) ? $detail->awal_pengadaan : '' ;
		$akhir_pengadaan = isset($detail) ? $detail->akhir_pengadaan : '' ;
		$status_pengadaan = isset($detail) ? $detail->status_pengadaan : '' ;

		// $lokasi = isset($detail) ? $detail->lokasi : '' ;
		?>

		<div class="box box-primary">
		  <div class="box-header with-border">
		    <h3 class="box-title">TPD</h3>
		  </div>
		  <!-- /.box-header -->
		  <!-- form start -->

		  <div class="box-body">

		<form class="form-horizontal" method="post">

		 <?php //echo validation_errors(); ?>

		 <div class="form-group">
		  <label for="" class="col-sm-3 control-label">Paket (Kode SiRUP)</label>
		  <div class="col-sm-8">
			<?php
			$field = array(''=>'Pilihan');
			foreach ($list_rup as $value) {
				$field[$value->kode_rup] = $value->nama_paket.' ['.$value->kode_rup.']';
			}
			echo form_dropdown('kode_rup',$field,$kode_rup,'onchange="tampilpaket(this.value)" class="form-control js-example-basic-single"');
			?>
			<span class="text-danger"><?php echo form_error('kode_rup'); ?></span>
		  </div>
		 </div>

		 <script>
		 function tampilpaket(kode_rup) {
		 	var xhttp = new XMLHttpRequest(this);
		 	xhttp.onreadystatechange = function() {
		 	if (this.readyState == 4 && this.status == 200) {

			data_rup = this.responseText;
			var obj = JSON.parse(data_rup);

			// alert(data_rup);

			document.getElementsByName("nilai_hps")[0].value = obj.hps;
			document.getElementsByName("nama_skpa")[0].value = obj.nama_satker;
			document.getElementsByName("nama_pa")[0].value = obj.nama_kpa;
			document.getElementsByName("nama_paket")[0].value = obj.nama_paket;
			document.getElementsByName("jenis_pengadaan")[0].value = obj.jenis_pengadaan;
			document.getElementsByName("jenis_pengadaan")[0].value = obj.jenis_pengadaan;
			document.getElementsByName("lokasi_pekerjaan")[0].value = obj.lokasi;
			document.getElementsByName("sumber_dana")[0].value = obj.sumber_dana;
			document.getElementsByName("nilai_pagu")[0].value = obj.pagu_rup;
			document.getElementsByName("awal_pengadaan")[0].value = obj.awal_pengadaan;
			document.getElementsByName("akhir_pengadaan")[0].value = obj.akhir_pengadaan;
		 	}
		 };
		 xhttp.open("GET", "<?php echo base_url() ?>" + "tpd/tampilpaket/" + kode_rup, true);
		 xhttp.send();
		 }
		 </script>

		 <div class="form-group">
			<label for="" class="col-sm-3 control-label">Nama SKPA</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="nama_skpa" value="<?php echo $nama_skpa ?>" readonly>
			</div>
		</div>

		<div class="form-group">
		 <label for="" class="col-sm-3 control-label">Nama PA/KPA/PPK</label>
		 <div class="col-sm-5">
			 <input type="text" class="form-control" name="nama_pa" value="<?php echo $nama_pa ?>" readonly>
		 </div>
	 </div>

	 <div class="form-group">
		<label for="" class="col-sm-3 control-label">HP PA/KPA/PPK</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" name="hp_pa" value="<?php //echo $nama_pa ?>">
		</div>
	</div>

	 <div class="form-group">
		<label for="" class="col-sm-3 control-label">Nama PABUNG</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" name="nama_pabung" value="<?php echo $nama_pabung ?>">
			<span class="text-danger"><?php echo form_error('nama_pabung'); ?></span>
		</div>
	</div>

	<div class="form-group">
	 <label for="" class="col-sm-3 control-label">HP PABUNG</label>
	 <div class="col-sm-4">
		 <input type="text" class="form-control" name="hp_pabung" value="<?php //echo $nama_pabung ?>">
		 <span class="text-danger"><?php echo form_error('hp_pabung'); ?></span>
	 </div>
 </div>

	<div class="form-group">
	 <label for="" class="col-sm-3 control-label">Nilai HPS</label>
	 <div class="col-sm-5">
		 <input type="text" class="form-control" name="nilai_hps" value="<?php echo $nilai_hps ?>" readonly>
		 <span class="text-danger"><?php echo form_error('nilai_hps'); ?></span>
	 </div>
 </div>

	<div class="form-group">
	 <label for="" class="col-sm-3 control-label">Pengelola Teknis Kegiatan</label>
	 <div class="col-sm-5">
		 <input type="text" class="form-control" name="pengelola_teknis_kegiatan" value="<?php echo $pengelola_teknis_kegiatan ?>">
		 <span class="text-danger"><?php echo form_error('pengelola_teknis_kegiatan'); ?></span>
	 </div>
	</div>

	<div class="form-group">
	 <label for="" class="col-sm-3 control-label">HP Pengelola Teknis Kegiatan</label>
	 <div class="col-sm-4">
		 <input type="text" class="form-control" name="hp_ptk" value="<?php //echo $pengelola_teknis_kegiatan ?>">
		 <span class="text-danger"><?php echo form_error('hp_ptk'); ?></span>
	 </div>
	</div>

	<div class="form-group">
	 <label for="" class="col-sm-3 control-label">Nama Paket</label>
	 <div class="col-sm-8">
		 <input type="text" class="form-control" name="nama_paket" value="<?php echo $nama_paket ?>" readonly>
	 </div>
 </div>

 <div class="form-group">
	<label for="" class="col-sm-3 control-label">Jenis Pengadaan</label>
	<div class="col-sm-5">
		<input type="text" class="form-control" name="jenis_pengadaan" value="<?php echo $jenis_pengadaan ?>" readonly>
	</div>
 </div>

		<div class="form-group">
			<label for="" class="col-sm-3 control-label">Lokasi Pekerjaan</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" name="lokasi_pekerjaan" value="<?php echo $lokasi_pekerjaan ?>" readonly>
				<span class="text-danger"></span>
			</div>
		</div>

		<div class="form-group">
		 <label for="" class="col-sm-3 control-label">Sumber Dana</label>
		 <div class="col-sm-5">
			 <input type="text" class="form-control" name="sumber_dana" readonly value="<?php echo $sumber_dana ?>">
		 </div>
	 </div>

	 <div class="form-group">
		<label for="" class="col-sm-3 control-label">Nilai Pagu</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" name="nilai_pagu" value="<?php echo $nilai_pagu ?>" readonly>
		</div>
	</div>

 <div class="form-group">
	<label for="" class="col-sm-3 control-label">Awal Pengadaan</label>
	<div class="col-sm-4">
		<input type="text" class="form-control" name="awal_pengadaan" value="<?php echo $awal_pengadaan ?>" readonly>
	</div>
</div>

<div class="form-group">
 <label for="" class="col-sm-3 control-label">Akhir Pengadaan</label>
 <div class="col-sm-4">
	 <input type="text" class="form-control" name="akhir_pengadaan" value="<?php echo $akhir_pengadaan ?>" readonly>
 </div>
</div>

<div class="form-group">
 <label for="" class="col-sm-3 control-label">Status Pengadaan</label>
 <div class="col-sm-4">
	 <?php
	 $field = array(''=>'Pilihan','baru'=>'Baru','rutin'=>'Rutin','lanjutan'=>'Lanjutan','myc'=>'MYC');
	 echo form_dropdown('status_pengadaan',$field,$status_pengadaan,'class="form-control"');
	 ?>
 </div>
</div>

<!-- <div class="form-group">
 <label for="" class="col-sm-3 control-label"></label>
 <div class="col-sm-4">
	 <input type="radio" name="status_pengadaan" value="baru"> Baru
	 <input type="radio" name="status_pengadaan" value="rutin"> Rutin
	 <input type="radio" name="status_pengadaan" value="lanjutan"> Lanjutan
	 <input type="radio" name="status_pengadaan" value="myc"> MYC
 </div>
</div> -->

		<div class="form-group">
			<label for="inputPassword3" class="col-sm-3 control-label"></label>
			<div class="col-sm-5">
				<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
				<a class="btn btn-default" href="<?php echo base_url('tpd') ?>">Kembali</a>
			</div>
		</div>

		</form>

</div>

</div>

	</section>

</div>
