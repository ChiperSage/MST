<?php
$paket_id = isset($detail) ? $detail->paket_id : '' ;
// $nama = isset($detail) ? $detail->anggota_nama : '' ;
// $jabatan = isset($detail) ? $detail->anggota_jabatan : '' ;
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
			<li class="active">Paket</li>
		</ol>
	</section>

	<section class="content">

		<div class="box box-info">
		  <div class="box-header with-border">
		    <h3 class="box-title">Data Paket <?php //echo $sp->sp_kelompok ?></h3>
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
					<th>Nama Paket</th>
					<th>Keterangan</th>
					<th width="40">#</th>
				</tr>
			</thead>
			<tbody>
				<?php $i=0; foreach ($paket as $value) { $i++ ?>
					<tr>
						<td><?php echo $i ?></td>
						<td><?php echo $value->sp_kelompok ?></td>
						<td><?php echo $value->nama_paket ?></td>
						<td><?php echo date('d-m-Y',strtotime($value->paket_keterangan)) ?></td>
						<td>
							<!-- <a class="btn btn-pencil btn-success btn-sm" href="<?php echo site_url('sp/paket/'.$value->paket_sp.'/'.$value->id) ?>"><i class="fa fa-edit"></i> Edit</a> -->
							<!-- <button class="btn btn-danger btn-sm" id="button" data-id="<?php echo $value->paket_sp . '/' . $value->id ?>" data-toggle="modal" data-target="#modal-default"><i class="fa fa-trash"></i> Hapus</button> -->
							<?php if($value->sp_status){ ?>
							<!-- <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-print"></i> Cetak</a> -->
							<?php } ?>
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
		 document.getElementById('link').href = '<?php echo site_url('sp/delete_paket/') ?>' + id;
});
</script>

<div class="modal fade" id="modal-default" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Konfirmasi</h4>
              </div>
              <div class="modal-body">
                <p>Hapus data ini?</p>
              </div>
              <div class="modal-footer">
								<a class="btn btn-danger" id="link" href="<?php echo site_url('sp/delete_paket/0') ?>">Ya</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
              </div>
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
