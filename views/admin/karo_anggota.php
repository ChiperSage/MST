<?php
$nip = isset($detail) ? $detail->anggota_nip : '' ;
// $nama = isset($detail) ? $detail->anggota_nama : '' ;
$jabatan = isset($detail) ? $detail->anggota_jabatan : '' ;
?>

<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			SP
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
			<li>Karo</li>
			<li class="active">SP</li>
		</ol>
	</section>

	<section class="content">

		<div class="box box-info">
		  <div class="box-header with-border">
		    <h3 class="box-title">Data Anggota <?php echo isset($sp->sp_kelompok) ? $sp->sp_kelompok : '' ; ?></h3>
				<a class="btn btn-default btn-sm pull-right" href="<?php echo base_url('karo/sp') ?>"><i class="fa fa-back"></i> Kembali</a>
		  </div>
		  <!-- /.box-header -->
		  <!-- form start -->

		  <div class="box-body">

		<?php echo $this->session->flashdata('msg') ?>

		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th width="40">No.</th>
					<th>Kelompok</th>
					<th>NIP</th>
					<th>Nama</th>
					<th>Jabatan</th>
					<th>Keterangan</th>
					<th width="60">#</th>
				</tr>
			</thead>
			<tbody>
				<?php $i=0; foreach ($anggota as $value) { $i++ ?>
					<tr>
						<td><?php echo $i ?></td>
						<td><?php echo $value->sp_kelompok ?></td>
						<td><?php echo $value->anggota_nip ?></td>
						<td><?php echo $value->pokja_nama ?></td>
						<td class="text-capitalize"><?php echo $value->anggota_jabatan ?></td>
						<td><?php echo $value->anggota_keterangan ?></td>
						<td>
							<button class="btn btn-success btn-sm" id="button" data-id="<?php echo $value->id ?>" data-toggle="modal" data-target="#modal-default" href=""><i class="fa fa-refresh"></i> <?php echo ($value->anggota_keterangan == 'ganti') ? '' : 'Ganti' ; ?></button>
							<!-- <button type="button" class="btn btn-danger btn-sm" id="button" data-id="<?php echo $value->anggota_sp . '/' . $value->id ?>" data-toggle="modal" data-target="#modal-default"><i class="fa fa-trash"></i> Hapus</a> -->
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>

</div>

</div>

	</section>

</div>

<script type="text/javascript">
$(document).on("click", "#button", function () {
     var id = $(this).data('id');
		 document.getElementById('id').value = id;
});
</script>

<div class="modal fade" id="modal-default" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">

<form class="" action="<?php echo site_url('karo/anggota_ganti/'.$this->uri->segment(3)) ?>" method="post">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Konfirmasi</h4>
              </div>
              <div class="modal-body">

<p>Ganti anggota ini?</p>
<input type="hidden" id="id" name="id" class="form-control" readonly>
<input type="text" name="keterangan" class="form-control" placeholder="keterangan..">

							</div>
              <div class="modal-footer">
								<button type="submit" class="btn btn-success" name="button">Ya</button>
								<!-- <a class="btn btn-danger" id="link" href="<?php echo base_url('sp/delete/0') ?>">Ya</a> -->
                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
              </div>

</form>

            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

<!-- DataTables -->
<script src="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>
