<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			SKN<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Pokja</a></li>
      <li>SKN</li>
		</ol>
	</section>

	<section class="content">

    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">SKN</h3>
			</div>
      <!-- /.box-header -->
      <div class="box-body">

				<?php
				$npwp = isset($detail) ? $detail->npwp : '' ;
				$kode_rup = isset($detail) ? $detail->kode_rup : '' ;
				$nilai_paket = isset($detail) ? $detail->nilai_paket : 0 ;
				$nilai_progres = isset($detail) ? $detail->nilai_progres : 0 ;

				$nama_paket = isset($detail) ? $detail->nama_paket : '' ;
				$lokasi = isset($detail) ? $detail->lokasi : '' ;

				$awal_pekerjaan = isset($detail) ? $detail->awal_pekerjaan : date('Y-m-d') ;
				$akhir_pekerjaan = isset($detail) ? $detail->akhir_pekerjaan : date('Y-m-d',strtotime('+30 day'));
				?>

				<form class="form-horizontal" action="" method="post">

					<div class="form-group">
					 <label for="" class="col-sm-2 control-label">Sumber Dana</label>
					 <div class="col-sm-3">
						 <?php
						 $field = array('apba'=>'APBA','non apba'=>'Non APBA');
						 echo form_dropdown('sumber_dana', $field, set_value('sumber_dana'), 'onChange="sumberdana(this.value)" class="form-control"');
						 ?>
						 <span class="text-danger"><?php //echo form_error('npwp') ?></span>
					 </div>
					</div>

					<div class="form-group">
					 <label for="" class="col-sm-2 control-label">Perusahaan</label>
					 <div class="col-sm-5">
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
		 			xhttp.open("GET", "<?php echo base_url() ?>" + "skn/paket_dropdown/" + kode_rup, true);
		 			xhttp.send();
		 			}
		 		</script>

					<div class="form-group">
					 <label for="" class="col-sm-2 control-label">Paket</label>
					 <div class="col-sm-6">
						 <div id="demo">
						 <?php
						 $field = array(''=>'Pilih Paket');
						 echo form_dropdown('kode_rup', $field, $kode_rup, 'class="form-control"');
						 ?>
						 </div>
						 <span class="text-danger"><?php echo form_error('kode_rup') ?></span>
					 </div>
					</div>

					<script type="text/javascript">
		 		 	function data_rup(kode_rup){

		 		 	var xhttp = new XMLHttpRequest(this);
		 		 	xhttp.onreadystatechange = function() {
		 		 	if (this.readyState == 4 && this.status == 200) {

		 			data_rup = this.responseText;
		 			var obj = JSON.parse(data_rup);

		 			document.getElementsByName("lokasi")[0].value = obj.lokasi;
		 		 	}
		 		 };
		 		 xhttp.open("GET", "<?php echo base_url() ?>" + "skn/ajax_rup/" + kode_rup, true);
		 		 xhttp.send();
		 		 }
		 		 	</script>

					<div class="form-group">
					 <label for="" class="col-sm-2 control-label">Nama Paket</label>
					 <div class="col-sm-5">
						 <input type="text" name="nama_paket" value="<?php echo $nama_paket ?>" disabled class="form-control">
						 <span class="text-danger"><?php echo form_error('nama_paket') ?></span>
					 </div>
					</div>

					<div class="form-group">
					 <label for="" class="col-sm-2 control-label">Lokasi</label>
					 <div class="col-sm-5">
						 <input type="text" name="lokasi" value="<?php echo $lokasi ?>" disabled class="form-control">
						 <span class="text-danger"><?php echo form_error('lokasi') ?></span>
					 </div>
					</div>

					<div class="form-group">
					 <label for="" class="col-sm-2 control-label">Nilai Kontrak</label>
					 <div class="col-sm-4">
						 <input type="money" name="nilai_paket" value="<?php echo $nilai_paket ?>" onkeyup="maskme(this.value)" class="form-control">
						 <span class="text-danger"><?php echo form_error('nilai_paket') ?></span>
					 </div>
					 <div class="col-sm-4" id="mask"></div>
					</div>

					<script type="text/javascript">
					function maskme(num){
						num.formatMoney(3,'.');
						document.getElementById('mask').innerHTML = num;
					}
					</script>

					<div class="form-group">
					 <label for="" class="col-sm-2 control-label">Nilai Progres</label>
					 <div class="col-sm-4">
						 <input type="text" name="nilai_progres" value="<?php echo $nilai_progres ?>" class="form-control">
						 <span class="text-danger"><?php echo form_error('nilai_progres') ?></span>
					 </div>
					 <div class="col-sm-4"></div>
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
						 <a class="btn btn-default" href="<?php echo base_url('skn') ?>"> Kembali</a>
					 </div>
					</div>

				</form>

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

</section>

</div>

<?php if($this->uri->segment(2) == 'update'){ ?>
<script type="text/javascript">

document.getElementsByName('sumber_dana')[0].disabled = true;
document.getElementsByName('npwp')[0].disabled = true;
document.getElementsByName('id_satker')[0].disabled = true;
document.getElementsByName('kode_rup')[0].disabled = true;

document.getElementsByName('nilai_paket')[0].readOnly = true;
document.getElementsByName('awal_pekerjaan')[0].readOnly = true;
document.getElementsByName('akhir_pekerjaan')[0].readOnly = true;

</script>
<?php } ?>

<script type="text/javascript">
	function sumberdana(val)
	{
		if(val == 'non apba'){
			// document.getElementsByName('npwp')[0].disabled = true;
			document.getElementsByName('id_satker')[0].disabled = true;
			document.getElementsByName('kode_rup')[0].disabled = true;

			document.getElementsByName('nama_paket')[0].disabled = false;
			document.getElementsByName('lokasi')[0].disabled = false;
		}else{
			// document.getElementsByName('npwp')[0].disabled = false;
			document.getElementsByName('id_satker')[0].disabled = false;
			document.getElementsByName('kode_rup')[0].disabled = false;

			document.getElementsByName('nama_paket')[0].disabled = true;
			document.getElementsByName('lokasi')[0].disabled = true;
		}
	}
</script>
