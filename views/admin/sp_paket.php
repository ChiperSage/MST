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
			<li class="active">Paket</li>
		</ol>
	</section>

	<section class="content">

		<div class="box box-info">
		  <div class="box-header with-border">
		    <h3 class="box-title"><?php echo $sp->sp_kelompok ?></h3>
		  </div>
		  <!-- /.box-header -->
		  <!-- form start -->

		  <div class="box-body">

<?php
$paket_id = isset($detail) ? $detail->paket_id : '' ;
?>

		<form class="form-horizontal" method="post">

		 <?php //echo validation_errors(); ?>

		 <div class="form-group">
		  <label for="" class="col-sm-2 control-label">Satker</label>
		  <div class="col-sm-6">
		 	 <?php
		 	 $field1 = array(''=>'Pilih Satker');
		 	 foreach ($satker_list as $value) {
		 		 $field1[$value->id_satker] = $value->nama_satker;
		 	 }
		 	 echo form_dropdown('satker_id', $field1, set_value('satker_id'), 'onChange="tampilpaket(this.value)" class="form-control"');
		 	 ?>
		 	 <span class="text-danger"><?php //echo form_error('satker_id') ?></span>
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
			xhttp.open("GET", "<?php echo base_url() ?>" + "sp/paket_dropdown/" + kode_rup, true);
			xhttp.send();
			}
		</script>

		 <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Paket Pekerjaan</label>
			<div class="col-sm-8">
				<div id="demo">
				<?php
				$field = array(''=>'Pilih Paket');
				foreach ($paket_list as $value) {
					$field[$value->kode_rup] = $value->nama_paket;
				}
				echo form_dropdown('paket_id', $field, $paket_id, 'class="form-control"');
				?>
				</div>
				<span class="text-danger"><?php echo form_error('paket_id') ?></span>
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
					<th>Paket Pekerjaan</th>
					<th>Keterangan</th>
					<th width="120">#</th>
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
							<button class="btn btn-danger btn-sm" id="button" data-id="<?php echo $value->paket_sp . '/' . $value->id ?>" data-toggle="modal" data-target="#modal-default"><i class="fa fa-trash"></i> Hapus</button>
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
