<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			SKT<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Pokja</a></li>
      <li>SKT</li>
			<!-- <li class="active">Data</li> -->
		</ol>
	</section>

	<section class="content">

    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">SKT/SKA</h3>
				<!-- <a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url('skt/create') ?>"><i class="fa fa-plus-circle"></i> Tambah</a> -->
			</div>
      <!-- /.box-header -->
      <div class="box-body">

        <?php
        $npwp = isset($detail) ? $detail->npwp : '' ;
				$npwp_pribadi = isset($detail) ? str_replace(array('.','-'),'',$detail->npwp_pribadi) : '' ;
				$no_registrasi = isset($detail) ? $detail->no_registrasi : '' ;
        $jenis = isset($detail) ? $detail->jenis : '' ;
				$tanggal_skt = isset($detail) ? $detail->date_added : date('Y-m-d') ;
        $tanggal_mulai = isset($detail) ? $detail->tanggal_mulai : date('Y-m-d') ;
        $tanggal_akhir = isset($detail) ? $detail->tanggal_akhir : date('Y-m-d', strtotime('+1 months')) ;
        $nama = isset($detail) ? $detail->nama : '' ;
        $skt_ska = isset($detail) ? $detail->skt_ska : '' ;
        //$nama = isset($detail) ? $detail->nama : '' ;
				$keterangan = isset($detail) ? $detail->keterangan : '' ;
        $kode_rup = isset($detail) ? $detail->kode_rup : '' ;
        ?>

        <form class="form-horizontal" method="post">

         <?php //echo validation_errors() ?>

         <div class="form-group">
        	<label for="" class="col-sm-2 control-label">No. Reg</label>
        	<div class="col-sm-4">
        		<input type="text" class="form-control" name="no_registrasi" value="<?php echo $no_registrasi ?>">
        		<span class="text-danger"><?php echo form_error('no_registrasi') ?></span>
        	</div>
        </div>

				<div class="form-group">
				 <label for="" class="col-sm-2 control-label">NPWP Pribadi</label>
				 <div class="col-sm-4">
					 <input type="text" class="form-control" name="npwp_pribadi" value="<?php echo $npwp_pribadi ?>">
					 <span class="text-danger"><?php echo form_error('npwp_pribadi') ?></span>
				 </div>
				 <div class="col-sm-4">
<i>(inputan NPWP dalam angka)</i>
				 </div>
			 </div>

				<div class="form-group">
				 <label for="" class="col-sm-2 control-label">Jenis</label>
				 <div class="col-sm-4">
					 <?php
					 $field = array(''=>'Pilihan','non lumsum'=>'Non Lumsum','lumsum'=>'Lumsum','perencanaan'=>'Perencanaan');
					 echo form_dropdown('jenis', $field, $jenis, 'class="form-control"');
					 ?>
					 <span class="text-danger"><?php echo form_error('jenis') ?></span>
				 </div>
			 </div>

      <div class="form-group">
        	<label for="" class="col-sm-2 control-label">Perusahaan</label>
        	<div class="col-sm-4">
            <?php
            $field = array(''=>'Pilihan');
            foreach ($perusahaan_list as $value) {
              $field[$value->npwp] = $value->nama_perusahaan;
            }
            echo form_dropdown('npwp', $field, $npwp, 'class="form-control"');
            ?>
        		<span class="text-danger"><?php echo form_error('npwp') ?></span>
        	</div>
        </div>

        <div class="form-group">
         <label for="" class="col-sm-2 control-label">Nama</label>
         <div class="col-sm-6">
        	 <input type="text" class="form-control" name="nama" value="<?php echo $nama ?>">
					 <span class="text-danger"><?php echo form_error('nama') ?></span>
         </div>
        </div>

				<div class="form-group">
        <label for="" class="col-sm-2 control-label">Tgl. SKT</label>
        <div class="col-sm-5">
        	<input type="text" class="form-control" name="tanggal_skt" value="<?php echo $tanggal_skt ?>">
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
				xhttp.open("GET", "<?php echo base_url() ?>" + "skt/paket_dropdown/" + kode_rup, true);
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

        <div class="form-group">
        <label for="" class="col-sm-2 control-label">Awal Pekerjaan</label>
        <div class="col-sm-5">
        	<input type="text" class="form-control" name="tanggal_mulai" value="<?php echo $tanggal_mulai ?>">
        </div>
        </div>

        <div class="form-group">
        <label for="" class="col-sm-2 control-label">Akhir Pekerjaan</label>
        <div class="col-sm-5">
         <input type="text" class="form-control" name="tanggal_akhir" value="<?php echo $tanggal_akhir ?>">
        </div>
        </div>

        <div class="form-group">
        <label for="" class="col-sm-2 control-label">Keterangan</label>
        <div class="col-sm-6">
         <input type="text" class="form-control" name="keterangan" value="<?php echo $keterangan ?>">
        </div>
        </div>

        <div class="form-group">
        <label for="" class="col-sm-2 control-label"></label>
        <div class="col-sm-6">
         <button type="submit" class="btn btn-primary" name="button"><i class="fa fa-save"></i> Simpan</button>
         <a class="btn btn-default" href="<?php echo base_url('skt') ?>">Kembali</a>
        </div>
        </div>

        </form>

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

</section>

</div>
