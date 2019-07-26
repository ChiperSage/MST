<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			SKP<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Pokja</a></li>
      <li>SKP</li>
		</ol>
	</section>

	<section class="content">

    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">SKP</h3>
				<!-- <a class="btn btn-primary pull-right" href="<?php echo base_url('skp/create') ?>"><i class="fa fa-plus-circle"></i> Tambah</a> -->
			</div>
      <!-- /.box-header -->
      <div class="box-body">

				<?php
				// if(isset($perusahaan_detail)){
				// 	$npwp = isset($detail) ? $detail->npwp : $perusahaan_detail->npwp ;
				// 	$nama_perusahaan = isset($detail) ? $detail->nama_perusahaan : $perusahaan_detail->nama_perusahaan ;
				// }else{
				// 	$npwp = isset($detail) ? $detail->npwp : '' ;
				// 	$nama_perusahaan = isset($detail) ? $detail->nama_perusahaan : '' ;
				// }
				// $no_registrasi = isset($detail) ? $detail->skt : '' ;
				$npwp = isset($detail) ? $detail->npwp : '' ;
				$kode_rup = isset($detail) ? $detail->kode_rup : '' ;
				$nilai_paket = isset($detail) ? $detail->nilai_paket : 0 ;

				$awal_pekerjaan = isset($detail) ? $detail->awal_pekerjaan : date('Y-m-d') ;
				$akhir_pekerjaan = isset($detail) ? $detail->akhir_pekerjaan : date('Y-m-d',strtotime('+30 day'));
				?>

				<form class="form-horizontal" action="" method="post">

					<div class="form-group">
					 <label for="" class="col-sm-2 control-label">Perusahaan</label>
					 <div class="col-sm-4">
						 <?php
						 $field = array(''=>'Pilih Perusahaan');
						 foreach ($perusahaan_list as $value) {
							 $field[$value->npwp] = $value->nama_perusahaan;
						 }
						 echo form_dropdown('npwp', $field, $npwp, 'class="form-control"');
						 ?>
						 <span class="text-danger"><?php echo form_error('npwp') ?></span>
					 </div>
					</div>

					<div class="form-group">
					 <label for="" class="col-sm-2 control-label">Satker</label>
					 <div class="col-sm-6">
						 <?php
						 $field = array(''=>'Pilih Satker');
						 foreach ($satker_list as $value) {
							 $field[$value->id_satker] = $value->nama_satker;
						 }
						 echo form_dropdown('id_satker',$field,0,'onchange="tampilpaket(this.value)" class="form-control"');
						 ?>
					 </div>
					</div>

					<script>
		 		 	function tampilpaket(kode_rup) {
		 			 	var xhttp = new XMLHttpRequest(this);
		 				xhttp.onreadystatechange = function() {
		 				if (this.readyState == 4 && this.status == 200) {
		 				document.getElementById("demo").innerHTML = this.responseText;
		 				}
		 			};
		 			xhttp.open("GET", "<?php echo base_url() ?>" + "skp/paket_dropdown/" + kode_rup, true);
		 			xhttp.send();
		 			}
		 		</script>

					<div class="form-group">
					 <label for="" class="col-sm-2 control-label">Paket</label>
					 <div class="col-sm-6">
						 <div id="demo">
						 <?php
						 $field = array(''=>'Pilih Paket');
						 echo form_dropdown('kode_rup',$field,$kode_rup,'class="form-control"');
						 ?>
						 	</div>
						 <span class="text-danger"><?php echo form_error('kode_rup') ?></span>
					 </div>
					</div>

					<div class="form-group">
					 <label for="" class="col-sm-2 control-label">Nilai Paket</label>
					 <div class="col-sm-4">
						 <input type="text" name="nilai_paket" value="<?php echo $nilai_paket ?>" class="form-control">
						 <span class="text-danger"><?php echo form_error('nilai_paket') ?></span>
					 </div>
					</div>

					<div class="form-group">
					 <label for="" class="col-sm-2 control-label">Awal Pekerjaan</label>
					 <div class="col-sm-5">
						 <input type="text" name="awal_pekerjaan" value="<?php echo $awal_pekerjaan ?>" class="form-control">
						 <span class="text-danger"><?php echo form_error('awal_pekerjaan') ?></span>
					 </div>
					</div>

					<div class="form-group">
					 <label for="" class="col-sm-2 control-label">Akhir Pekerjaan</label>
					 <div class="col-sm-5">
						 <input type="text" name="akhir_pekerjaan" value="<?php echo $akhir_pekerjaan ?>" class="form-control">
						 <span class="text-danger"><?php echo form_error('akhir_pekerjaan') ?></span>
					 </div>
					</div>

					<div class="form-group">
					 <label for="" class="col-sm-2 control-label"></label>
					 <div class="col-sm-5">
						 <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
						 <a href="<?php echo base_url('skp') ?>" class="btn btn-default">Kembali</a>
					 </div>
					</div>

				</form>

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

</section>

</div>
