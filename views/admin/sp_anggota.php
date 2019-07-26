<?php
$nip = isset($detail) ? $detail->anggota_nip : '' ;
$jabatan = isset($detail) ? $detail->anggota_jabatan : '' ;
$keterangan = isset($detail) ? $detail->anggota_keterangan : '' ;
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
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Kasubbag</a></li>
			<li>SP</li>
			<li class="active">Anggota</li>
		</ol>
	</section>

	<section class="content">

		<div class="box box-info">
		  <div class="box-header with-border">
		    <h3 class="box-title">List Anggota <?php echo isset($sp->sp_kelompok) ? $sp->sp_kelompok : '' ; ?></h3>
		  </div>
		  <!-- /.box-header -->
		  <!-- form start -->

		  <div class="box-body">

		<form class="form-horizontal" method="post">

		 <?php //echo validation_errors(); ?>

		 <div class="form-group">
 			<label for="inputEmail3" class="col-sm-2 control-label">Pilih Pokja</label>
 			<div class="col-sm-2">
				<?php
				$field = array(''=>'Pilihan');
				foreach ($pokja_list as $value) {
					$field[$value->pokja_nip] = $value->pokja_nama.' ['.$value->tpaket.']';
				}
				echo form_dropdown('nip',$field,$nip,'class="form-control"');
				?>
				<span class="text-danger"><?php echo form_error('nip') ?></span>
 			</div>
 		</div>

		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Jabatan</label>
			<div class="col-sm-3">
				<?php
				$field = array('anggota'=>'Anggota');
				echo form_dropdown('jabatan', $field, $jabatan, 'class="form-control"');
				?>
				<span class="text-danger"><?php echo form_error('jabatan') ?></span>
			</div>
		</div>

		<div class="form-group">
		 <label for="inputEmail3" class="col-sm-2 control-label">Keterangan</label>
		 <div class="col-sm-6">
			 <input type="text" name="keterangan" value="<?php echo $keterangan ?>" class="form-control">
			 <!-- <span class="text-danger"><?php echo form_error('nip') ?></span> -->
		 </div>
	 </div>

		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label"></label>
			<div class="col-sm-10">
				<!-- <a class="btn btn-primary" onClick="show_button()"><i class="fa fa-return"></i><i class="fa fa-plus-circle"></i> Tambah</a> -->
				<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
				<a class="btn btn-default" href="<?php echo base_url('sp') ?>"><i class="fa fa-return"></i> Kembali</a>
			</div>
		</div>

		</form>

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
					<th width="150">#</th>
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
							<a class="btn btn-pencil btn-success btn-sm" href="<?php echo site_url('sp/anggota/'.$value->anggota_sp.'/'.$value->id) ?>"><i class="fa fa-edit"></i> Edit</a>
							<button type="button" class="btn btn-danger btn-sm" id="button" data-id="<?php echo $value->anggota_sp . '/' . $value->id ?>" data-toggle="modal" data-target="#modal-default"><i class="fa fa-trash"></i> Hapus</a>
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
		 document.getElementById('link').href = '<?php echo site_url('sp/delete_anggota/') ?>' + id;
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
								<a class="btn btn-danger" id="link" href="<?php echo base_url('sp/delete/0') ?>">Ya</a>
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
