<?php
$tgl_update = isset($rup_detail) ? $rup_detail->tanggal_terakhir_di_update : date('Y-m-d') ;
$kode_kldi = isset($rup_detail) ? $rup_detail->kode_kldi : '' ;
$id_satker = isset($rup_detail) ? $rup_detail->id_satker : '' ;
$kode_satker_asli = isset($rup_detail) ? $rup_detail->kode_satker_asli : '' ;
$jenis = isset($rup_detail) ? $rup_detail->jenis : '' ;

$kldi = isset($rup_detail) ? $rup_detail->kldi : '' ;
$kode_rup = isset($rup_detail) ? $rup_detail->kode_rup : '' ;
$nama_satker = isset($rup_detail) ? $rup_detail->nama_satker : '' ;
$nama_paket = isset($rup_detail) ? $rup_detail->nama_paket : '' ;
$program = isset($rup_detail) ? $rup_detail->program : '' ;

$kode_string_program = isset($rup_detail) ? $rup_detail->kode_string_program : '' ;
$kegiatan = isset($rup_detail) ? $rup_detail->kegiatan : '' ;
$kode_string_kegiatan = isset($rup_detail) ? $rup_detail->kode_string_kegiatan : '' ;
$volume = isset($rup_detail) ? $rup_detail->volume : '' ;
$pagu_rup = isset($rup_detail) ? $rup_detail->pagu_rup : '' ;

$mak = isset($rup_detail) ? $rup_detail->mak : '' ;
$lokasi = isset($rup_detail) ? $rup_detail->lokasi : '' ;
$detail_lokasi = isset($rup_detail) ? $rup_detail->detail_lokasi : '' ;
$sumber_dana = isset($rup_detail) ? $rup_detail->sumber_dana : '' ;
$metode_pemilihan = isset($rup_detail) ? $rup_detail->metode_pemilihan : '' ;

$jenis_pengadaan = isset($rup_detail) ? $rup_detail->jenis_pengadaan : '' ;
$pagu_perjenis_pengadaan = isset($rup_detail) ? $rup_detail->pagu_perjenis_pengadaan : '' ;
$awal_pengadaan = isset($rup_detail) ? $rup_detail->awal_pengadaan : date('Y-m-d') ;
$akhir_pengadaan = isset($rup_detail) ? $rup_detail->akhir_pengadaan : date('Y-m-d') ;
$awal_pekerjaan = isset($rup_detail) ? $rup_detail->awal_pekerjaan : date('Y-m-d') ;
$akhir_pekerjaan = isset($rup_detail) ? $rup_detail->akhir_pekerjaan : date('Y-m-d') ;

$tanggal_kebutuhan = isset($rup_detail) ? $rup_detail->tanggal_kebutuhan : '' ;
$spesifikasi = isset($rup_detail) ? $rup_detail->spesifikasi : '' ;
$id_swakelola = isset($rup_detail) ? $rup_detail->id_swakelola : '' ;
$nama_kpa = isset($rup_detail) ? $rup_detail->nama_kpa : '' ;
$penyedia_didalam_swakelola = isset($rup_detail) ? $rup_detail->penyedia_didalam_swakelola : '' ;

$tkdn = isset($rup_detail) ? $rup_detail->tkdn : '' ;
$pradipa = isset($rup_detail) ? $rup_detail->pradipa : '' ;
$status_aktif = isset($rup_detail) ? $rup_detail->status_aktif : '' ;
$status_umumkan = isset($rup_detail) ? $rup_detail->status_umumkan : '' ;
$id_client = isset($rup_detail) ? $rup_detail->id_client : '' ;
?>

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			RUP
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
			<li class="active">RUP</li>
		</ol>
	</section>

	<section class="content">

<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title"><?php echo ($this->uri->segment(3) == 'create') ? 'INPUT' : 'EDIT' ; ?> RUP APBN</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->

  <div class="box-body">

    <form class="form-horizontal" method="post">

     <?php echo validation_errors(); ?>

		 <div class="form-group">
		 	<label for="inputEmail3" class="col-sm-2 control-label">Kode KLDI</label>
		 	<div class="col-sm-4">
		 		<input type="text" class="form-control" name="kode_kldi" value="<?php echo $kode_kldi ?>">
		 	</div>
		 </div>

		<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Kode Satker Asli</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="kode_satker_asli" value="<?php echo $kode_satker_asli ?>">
      </div>
    </div>

		<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Jenis</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="jenis" value="<?php echo $jenis ?>">
      </div>
    </div>

		<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">KLDI</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="kldi" value="<?php echo $kldi ?>">
      </div>
    </div>

		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Kode RUP</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="kode_rup" value="<?php echo $kode_rup ?>">
			</div>
		</div>

		<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Nama Satker</label>
		<div class="col-sm-8">
			<?php
			$field = array(''=>'Pilih Satker');
			foreach ($satker as $val) {
				$field[$val->kode] = $val->nama;
			}
			echo form_dropdown('id_satker', $field, $id_satker, 'class="form-control"');
			?>
			<input type="hidden" class="form-control" name="nama_satker" value="<?php echo $nama_satker ?>">
		</div>
		</div>

		<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Nama Paket</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="nama_paket" value="<?php echo $nama_paket ?>">
      </div>
    </div>

		<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Program</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="program" value="<?php echo $program ?>">
      </div>
    </div>

		<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Kode String Program</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="kode_string_program" value="<?php echo $kode_string_program ?>">
      </div>
    </div>

		<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Kegiatan</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="kegiatan" value="<?php echo $kegiatan ?>">
      </div>
    </div>

		<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Pagu RUP</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="pagu_rup" value="<?php echo $pagu_rup ?>">
      </div>
    </div>

		<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Mak</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="mak" value="<?php echo $mak ?>">
      </div>
    </div>

		<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Lokasi</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="lokasi" value="<?php echo $lokasi ?>">
      </div>
    </div>

		<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Detail Lokasi</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="detail_lokasi" value="<?php echo $detail_lokasi ?>">
      </div>
    </div>

		<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Metode Pemilihan</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="metode_pemilihan" value="<?php echo $metode_pemilihan ?>">
      </div>
    </div>

		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Jenis Pengadaan</label>
			<div class="col-sm-4">
				<?php
				$field = array(''=>'Pilihan',
					'Barang'=>'Barang',
					'Jasa Lainnya'=>'Jasa Lainnya',
					'Pekerjaan Konstruksi'=>'Pekerjaan Konstruksi',
					'Jasa Konsultansi'=>'Jasa Konsultansi');
				echo form_dropdown('jenis_pengadaan', $field, $jenis_pengadaan, 'class="form-control"');
				?>
			</div>
		</div>

		<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Pagu Perjenis Pengadaan</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="pagu_perjenis_pengadaan" value="<?php echo $pagu_perjenis_pengadaan ?>">
      </div>
    </div>

		<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Awal Pengadaan</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="awal_pengadaan" value="<?php echo $awal_pengadaan ?>">
      </div>
    </div>

		<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Akhir Pengadaan</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="akhir_pengadaan" value="<?php echo $akhir_pengadaan ?>">
      </div>
    </div>

		<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Awal Pekerjaan</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="awal_pekerjaan" value="<?php echo $awal_pekerjaan ?>">
      </div>
    </div>

		<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Akhir Pekerjaan</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="akhir_pekerjaan" value="<?php echo $akhir_pekerjaan ?>">
      </div>
    </div>

		<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Kebutuhan</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="tanggal_kebutuhan" value="<?php echo $tanggal_kebutuhan ?>">
      </div>
    </div>

		<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Spesifikasi</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="spesifikasi" value="<?php echo $spesifikasi ?>">
      </div>
    </div>

		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">ID Swakelola</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="id_swakelola" value="<?php echo $id_swakelola ?>">
			</div>
		</div>

		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Nama KPA</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="nama_kpa" value="<?php echo $nama_kpa ?>">
			</div>
		</div>

		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Penyedia Didalam Swakelola</label>
			<div class="col-sm-4">
				<?php
				$field = array(''=>'Pilihan','ya'=>'Ya','tidak'=>'Tidak');
				echo form_dropdown('penyedia_didalam_swakelola', $field, $penyedia_didalam_swakelola, 'class="form-control"');
				?>
			</div>
		</div>

		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">TKDN</label>
			<div class="col-sm-4">
				<?php
				$field = array(''=>'Pilihan','ya'=>'Ya','tidak'=>'Tidak');
				echo form_dropdown('tkdn', $field, $tkdn, 'class="form-control"');
				?>
			</div>
		</div>

		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Pradipa</label>
			<div class="col-sm-4">
				<?php
				$field = array(''=>'Pilihan','ya'=>'Ya','tidak'=>'Tidak');
				echo form_dropdown('pradipa', $field, $pradipa, 'class="form-control"');
				?>
			</div>
		</div>

		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Status Aktif</label>
			<div class="col-sm-4">
				<?php
				$field = array(''=>'Pilihan','ya'=>'Ya','tidak'=>'Tidak');
				echo form_dropdown('status_aktif', $field, $status_aktif, 'class="form-control"');
				?>
			</div>
		</div>

		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Status Umumkan</label>
			<div class="col-sm-4">
				<?php
				$field = array(''=>'Pilihan','sudah'=>'Sudah','belum'=>'Belum');
				echo form_dropdown('status_umumkan', $field, $status_umumkan, 'class="form-control"');
				?>
			</div>
		</div>

		<div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label"></label>
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
        <a href="<?php echo base_url('rup_apbn') ?>" class="btn btn-default">Kembali</a>
      </div>
    </div>

  </form>

</div>

</div>

</section>

</div>
