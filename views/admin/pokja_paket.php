<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			POKJA
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Pokja</a></li>
			<li class="active">Paket SP Pokja</li>
		</ol>
	</section>

	<section class="content">

    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Paket SP POKJA</h3>
				<!-- <a class="btn btn-primary btn-sm pull-right" href="<?php //echo base_url('pokja/create') ?>"><i class="fa fa-plus-circle"></i> Tambah</a> -->
			</div>
      <!-- /.box-header -->
      <div class="box-body">

				<?php //echo $this->session->flashdata('msg') ?>

				<script>
	 		 function setuju_batal(val)
	 		 {
	 			// var kode_rup = document.getElementsByName("kode_rup")[0].value;
	 			var xhttp = new XMLHttpRequest(this);
	 		 	xhttp.onreadystatechange = function(){
	 		 	if(this.readyState == 4 && this.status == 200){

	 			}
	 		 };
	 		 xhttp.open("GET", "<?php echo base_url() ?>" + "pokja_paket/ajax_setuju_batal/" + val, true);
	 		 xhttp.send();
	 		 }
	 		 </script>

        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th width="30">No.</th>
              <th>Paket Pekerjaan</th>
							<th>Pokja</th>
							<th>Jabatan</th>
							<th>Tahun Masuk</th>
							<th>Kelompok</th>
							<th>Total Setuju</th>
              <th width="100">Setuju Batal</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=0; foreach ($paket as $value) { $i++ ?>
              <tr>
								<td><?php echo $i ?></td>
								<td><?php echo $value->nama_paket ?></td>
                <td><?php echo $value->pokja_nama ?></td>
								<td class="text-capitalize"><?php echo $value->anggota_jabatan ?></td>
                <td><?php echo $value->paket_keterangan ?></td>
								<td><?php echo $value->sp_kelompok ?></td>
								<td><?php //echo $value->tpokja.'/'.$value->tsetuju ?></td>
								<td>
									<input type="checkbox" id="<?php echo $value->anggota_nip.'-'.$value->paket_id.'-'.$value->hapus ?>" <?php echo ($value->hapus == 1) ? 'checked' : '' ; ?> name="setuju_hapus" onClick="setuju_batal(this.id)">
									<a class="btn btn-danger btn-sm" id="button" data-id="<?php echo $value->kode_rup ?>" data-toggle="modal" data-target="#modal-default"><i class="fa fa-remove"></i> Batalkan</a>
								</td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
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
						<form class="" action="<?php echo site_url('pokja_paket/batal') ?>" method="post">

            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Konfirmasi</h4>
              </div>
              <div class="modal-body">
                <p>Batalkan paket ini?</p>
								<form class="" method="post">
									<input type="hidden" id="id" name="id" class="form-control" readonly>
									<input type="text" name="keterangan" class="form-control" placeholder="keterangan batal">
								</form>
              </div>
              <div class="modal-footer">
								<button type="submit" class="btn btn-danger">Ya</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
              </div>

            </div>
            <!-- /.modal-content -->
          </div>
					</form>
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
