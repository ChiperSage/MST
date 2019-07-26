<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			TPD
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

		// $lokasi = isset($detail) ? $detail->lokasi : '' ;
		?>

		<div class="box box-primary">
		  <div class="box-header with-border">
		    <h3 class="box-title">Form Check List</h3>
		  </div>
		  <!-- /.box-header -->
		  <!-- form start -->

		  <div class="box-body">

		<form class="form-horizontal" method="post">

			<input type="hidden" name="id_satker" value="<?php echo $detail->vid_satker ?>">
			<input type="hidden" name="kode_rup" value="<?php echo $detail->vkode_rup ?>">

		 <script>
		 function update_berkas(val)
		 {
			var kode_rup = document.getElementsByName("kode_rup")[0].value;

			var xhttp = new XMLHttpRequest(this);
		 	xhttp.onreadystatechange = function(){
		 	if(this.readyState == 4 && this.status == 200){

			}
		 };
		 xhttp.open("GET", "<?php echo base_url() ?>" + "tpd_check/ajax_update/" + kode_rup + "/" + val, true);
		 xhttp.send();
		 }
		 </script>

<table id="example1" class="table table-bordered table-striped">
<tbody>
	<tr>
	<th>Data Umum SKPA</th>
	<td></td>
	<th>Data Akun KPA/PPK (disampaikan cukup 1 kali)</th>
	<th width="40">Hard</th>
	<th width="40">SPSE</th>
	</tr>
	<tr>
	<td>Kode SiRUP</td>
	<td><?php echo $detail->vkode_rup ?></td>
	<td>Fotocopy SK KPA/PPK</td>
	<td><input type="checkbox" id="fotocopy_sk-<?php echo $detail->fotocopy_sk ?>" <?php echo ($detail->fotocopy_sk == 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)"></td>
	<td></td>
</tr>
	<tr>
	<td>Nama SKPA</td>
	<td><?php echo $detail->nama_skpa ?></td>
	<td>Biodata KPA/PPK</td>
	<td><input type="checkbox" id="biodata_kpa-<?php echo $detail->biodata_kpa ?>" <?php echo ($detail->biodata_kpa == 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)"></td>
	<td></td>
	</tr>
	<tr>
	<td>Nama PA/KPA/PPK</td>
	<td><?php echo $detail->nama_pa ?></td>
	<td>1. Surat Pelimpahan Dokumen Persiapan Pengadaan</td>
	<td><input type="checkbox" id="surat_pelimpahan-<?php echo $detail->surat_pelimpahan ?>" <?php echo ($detail->surat_pelimpahan == 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)"></td>
	<td></td>
	</tr>
	<tr>
	<td>Nama PABUNG</td>
	<td><?php echo $detail->nama_pabung ?></td>
	<td>- Lampiran Daftar Paket Pengadaan</td>
	<td><input type="checkbox" id="lampiran_daftar-<?php echo $detail->lampiran_daftar ?>" <?php echo ($detail->lampiran_daftar == 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)"></td>
	<td></td>
	</tr>
	<tr>
	<td>Nilai HPS</td>
	<td><?php echo 'Rp. '.number_format($detail->nilai_hps) ?></td>
	<td>2. Lembar Data Pengadaan pada DPA-SKPA</td>
	<td><input type="checkbox" id="lembar_data-<?php echo $detail->lembar_data ?>" <?php echo ($detail->lembar_data == 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)"></td>
<td></td>
	</tr>
	<tr>
	<td>Pengelola Teknis Kegiatan</td>
	<td><?php echo $detail->pengelola_teknis_kegiatan ?></td>
	<td>3. Cetak RUP</td>
	<td><input type="checkbox" id="cetak_rup-<?php echo $detail->cetak_rup ?>" <?php echo ($detail->cetak_rup == 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)"></td>
<td></td>
	</tr>
	<tr>
	<td>Nama Paket</td>
	<td><?php echo $detail->nama_paket ?></td>
	<td>4. Harga Perkiraan Sendiri (HPS)</td>
	<td><input type="checkbox" id="harga_perkiraan-<?php echo $detail->harga_perkiraan ?>" <?php echo ($detail->harga_perkiraan == 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)"></td>
<td></td>
	</tr>
	<tr>
	<td>Jenis Pengadaan</td>
	<td><?php echo $detail->jenis_pengadaan ?></td>
	<td>- Rekapitulasi Harga</td>
	<td><input type="checkbox" id="rekapitulasi_harga-<?php echo $detail->rekapitulasi_harga ?>" <?php echo ($detail->rekapitulasi_harga == 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)"></td>
<td></td>
	</tr>
	<tr>
	<td>Lokasi Pekerjaan</td>
	<td><?php echo $detail->lokasi_pekerjaan ?></td>
	<td>- Daftar Kuantitas dan Harga</td>
	<td><input type="checkbox" id="daftar_kuantitas-<?php echo $detail->daftar_kuantitas ?>" <?php echo ($detail->daftar_kuantitas == 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)"></td>
	<td><input type="checkbox" id="daftar_kuantitas_spse-<?php echo $detail->daftar_kuantitas_spse ?>" <?php echo ($detail->daftar_kuantitas_spse == 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)"></td>
	</tr>
	<tr>
	<td>Sumber Dana</td>
	<td><?php echo $detail->sumber_dana ?></td>
	<td>- Riwayat (rekam jejak) perhitungan HPS</td>
	<td><input type="checkbox" id="riwayat_perhitungan-<?php echo $detail->riwayat_perhitungan ?>" <?php echo ($detail->riwayat_perhitungan == 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)"></td>
<td></td>
	</tr>
	<tr>
	<td>Nilai Pagu</td>
	<td><?php echo 'Rp. '.number_format($detail->nilai_pagu) ?></td>
	<td>5. Kerangka Acuan Kerja (KAK)</td>
	<td></td>
	<td></td>
	</tr>
	<tr>
	<td>Awal Pengadaan</td>
	<td><?php echo $detail->awal_pengadaan ?></td>
	<td>- Uraian kegiatan</td>
	<td><input type="checkbox" id="uraian_kegiatan-<?php echo $detail->uraian_kegiatan ?>" <?php echo ($detail->uraian_kegiatan == 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)"></td>
	<td><input type="checkbox" id="uraian_kegiatan_spse-<?php echo $detail->uraian_kegiatan_spse ?>" <?php echo ($detail->uraian_kegiatan_spse == 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)"></td>
	</tr>
	<tr>
	<td>Akhir Pengadaan</td>
	<td><?php echo $detail->akhir_pengadaan ?></td>
	<td>- Waktu pelaksaan pekerjaan</td>
	<td><input type="checkbox" id="jangka_waktu-<?php echo $detail->jangka_waktu ?>" <?php echo ($detail->jangka_waktu == 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)"></td>
	<td><input type="checkbox" id="jangka_waktu_spse-<?php echo $detail->jangka_waktu_spse ?>" <?php echo ($detail->jangka_waktu_spse == 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)"></td>
	</tr>
	<tr>
	<td></td>
	<td></td>
	<td>- Hari Kalender</td>
	<td><input type="text" size="5" value="<?php echo $detail->hari_kalender ?>" onKeyup="update_berkas('hari_kalender-' + this.value)"></td>
	<td></td>
	</tr>
	<tr>
	<td></td>
	<td></td>
	<td>- Spesifikasi teknis Barang</td>
	<td><input type="checkbox" id="spesifikasi_teknis-<?php echo $detail->spesifikasi_teknis ?>" <?php echo ($detail->spesifikasi_teknis == 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)"></td>
	<td><input type="checkbox" id="spesifikasi_teknis_spse-<?php echo $detail->spesifikasi_teknis_spse ?>" <?php echo ($detail->spesifikasi_teknis_spse == 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)"></td>
	</tr>
	<tr>
	<td></td>
	<td></td>
	<td>- Gambar (apabila ada tempahan)</td>
	<td><input type="checkbox" id="gambar_rencana-<?php echo $detail->gambar_rencana ?>" <?php echo ($detail->gambar_rencana == 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)"></td>
	<td><input type="checkbox" id="gambar_rencana_spse-<?php echo $detail->gambar_rencana_spse ?>" <?php echo ($detail->gambar_rencana_spse == 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)"></td>
	</tr>
	<tr>
	<td></td>
	<td></td>
	<td>- Brosur barang</td>
	<td><input type="checkbox" id="brosur_barang-<?php echo $detail->brosur_barang ?>" <?php echo ($detail->brosur_barang == 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)"></td>
<td></td>
	</tr>
	<tr>
	<td></td>
	<td></td>
	<td>6. Rancangan Kontrak</td>
	<td></td>
	<td></td>
	</tr>
	<tr>
	<td>Kelengkapan</td>
	<td>
		<input type="radio" name="kelengkapan" id="kelengkapan-<?php echo $detail->kelengkapan ?>" <?php echo ($detail->kelengkapan == 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)">
		Lengkap
		<input type="radio" name="kelengkapan" id="kelengkapan-<?php echo $detail->kelengkapan ?>" <?php echo ($detail->kelengkapan != 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)">
		Tidak Lengkap
	</td>
	<td>- Naskah Rancangan Kontrak (ditanda tangani KPA/PPK)</td>
	<td><input type="checkbox" id="naskah_rancangan-<?php echo $detail->naskah_rancangan ?>" <?php echo ($detail->naskah_rancangan == 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)"></td>
	<td><input type="checkbox" id="naskah_rancangan_spse-<?php echo $detail->naskah_rancangan_spse ?>" <?php echo ($detail->naskah_rancangan_spse == 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)"></td>
	</tr>
	<tr>
	<td>Catatan</td>
	<td><input type="text" name="keterangan" value="<?php echo $detail->keterangan ?>" onKeyup="update_berkas('keterangan-' + this.value)" class="form-control"></td>
	<td>- Syarat-syarat umum kontrak (SSUK)</td>
	<td><input type="checkbox" id="syarat_umum-<?php echo $detail->syarat_umum ?>" <?php echo ($detail->syarat_umum == 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)"></td>
	<td><input type="checkbox" id="syarat_umum_spse-<?php echo $detail->syarat_umum_spse ?>" <?php echo ($detail->syarat_umum_spse == 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)"></td>
	</tr>
	<tr>
	<td></td>
	<td></td>
	<td>- Syarat-syarat khusus kontrak (SSKK)</td>
<td><input type="checkbox" id="syarat_khusus-<?php echo $detail->syarat_khusus ?>" <?php echo ($detail->syarat_khusus == 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)"></td>
<td><input type="checkbox" id="syarat_khusus_spse-<?php echo $detail->syarat_khusus_spse ?>" <?php echo ($detail->syarat_khusus_spse == 1) ? 'checked' : '' ; ?> onChange="update_berkas(this.id)"></td>
	</tr>
</tbody>
</table>

		<div class="form-group">
			<label for="inputPassword3" class="col-sm-8 control-label"></label>
			<div class="col-sm-4">
				<a class="btn btn-warning" target="_blank" href="<?php echo base_url('tpd_check/cetak2/'.$detail->vkode_rup) ?>"><i class="fa fa-print"></i> Cetak</a>
				<a class="btn btn-default" href="<?php echo base_url('tpd_check') ?>"> Kembali</a>
			</div>
		</div>

		</form>

</div>

</div>

	</section>

</div>
