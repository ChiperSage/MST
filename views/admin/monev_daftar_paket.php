<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Monev
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Monev</a></li>
			<li class="active">Daftar Paket</li>
		</ol>
	</section>

	<section class="content">

		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title text-capitalize">daftar paket <?php echo str_replace('_',' ',$this->uri->segment(3)) ?></h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">

<form class="form-inline" action="" method="get">

<div class="row">
<div class="col-sm-8">

<p>

<select class="form-control" name="jenis_pengadaan">
	<option value="">Pilih Jenis Pengadaan</option>
	<option value="Pekerjaan Konstruksi">Pekerjaan Konstruksi</option>
	<option value="Jasa Konsultansi">Jasa Konsultansi</option>
	<option value="Barang">Barang</option>
	<option value="Jasa Lainnya">Jasa Lainnya</option>
</select>
<button type="submit" class="btn btn-primary">Submit</button>

<?php
$seg = $this->uri->segment(3);

if(isset($_GET['jenis_pengadaan'])){

$var = $this->uri->segment(3);
$jenis = $_GET['jenis_pengadaan'];
?>
<div class="btn-group">
	<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><i class="fa fa-print"></i> Cetak
	<span class="caret"></span>
	<span class="sr-only">Toggle Dropdown</span>
</button>
<ul class="dropdown-menu" role="menu">
	<li><a target="_blank" href="<?php echo base_url() ?>cetak/daftar_paket/<?php echo $var.'?jenis_pengadaan='.$jenis.'&type=pdf'; ?>">PDF</a></li>
	<li><a target="_blank" href="<?php echo base_url() ?>cetak/daftar_paket/<?php echo $var.'?jenis_pengadaan='.$jenis.'&type=image'; ?>">Gambar</a></li>
</ul>
</div>
<?php }else{ ?>
	<div class="btn-group">
		<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><i class="fa fa-print"></i> Cetak
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li><a target="_blank" href="<?php echo base_url() ?>cetak/daftar_paket/<?php echo $seg.'?&type=pdf'; ?>">PDF</a></li>
		<li><a target="_blank" href="<?php echo base_url() ?>cetak/daftar_paket/<?php echo $seg.'?&type=image'; ?>">Gambar</a></li>
	</ul>
	</div>
<?php } ?>

</p>



</div>
</div>

</form>

				<div class="table-responsive">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr style="text-align:center">
							<th class="text-center">No</th>
							<th class="text-center" width="120">Kode Lelang</th>
							<th class="text-center" width="100">Kode RUP</th>
							<th class="text-center">Nama Pekerjaan</th>
							<th class="text-center">Pagu</th>
							<th class="text-center">JP</th>
							<th class="text-center">Kelompok</th>
							<?php if($seg == 'belum_tayang'){ ?>
							<th class="text-center">Status</th>
							<th class="text-center">Keterangan</th>
							<?php }else{ ?>
							<th class="text-center">Keterangan</th>
							<?php } ?>
						</tr>
					</thead>
					<tbody>
						<?php $i=1; foreach ($paket as $value) { $i++ ?>
							<tr>
								<?php
	              if(empty($value->kode_lelang.$value->kode_rup)){
	                $i = 0;
	              }
	              ?>
	              <td class="text-center"><?php echo ($i != 0) ? $i : '' ; ?></td>
								<td><?php echo $value->kode_lelang ?></td>
								<td><?php echo $value->kode_rup ?></td>
								<td <?php echo ($value->kode_rup == '') ? 'class="text-bold"' : '' ; ?>><?php echo $value->nama_pekerjaan ?></td>
								<td <?php echo ($value->kode_rup == '') ? 'class="text-bold text-right"' : '' ; ?> class="text-right"><?php echo (!empty($value->pagu)) ? number_format($value->pagu) : '' ; ?></td>
								<td><?php echo explode(';',$value->jenis_pengadaan)[0] ?></td>
								<td><?php echo $value->kelompok ?></td>
								<?php if($seg == 'belum_tayang'){ ?>
								<td><?php echo $value->status ?></td>
								<td><?php echo $value->ket ?></td>
								<?php }else{ ?>
								<td><?php echo $value->keterangan ?></td>
								<?php } ?>
							</tr>
						<?php } ?>
					</tbody>
				</table>

				</div>


			</div>
		</div>

	</section>

</div>

<!-- DataTables -->
<script src="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable({'order':[]})
    $('#example2').DataTable()
  })
</script>
