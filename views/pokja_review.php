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
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> POKJA</a></li>
      <li>Data</li>
		</ol>
	</section>

	<section class="content">

		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title">Review Paket</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">

				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="30">No.</th>
							<th>Kode RUP</th>
							<th>Paket Pekerjaan</th>
							<th>Nama SKPA</th>
							<th>Nama KPA</th>
							<th>Kelompok</th>
							<th>Tgl. Update Review</th>
							<th>Keterangan</th>
							<th width="170">Review</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=0; foreach ($review as $value) { $i++ ?>
							<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $value->kode_rup ?></td>
								<td><?php echo $value->nama_paket ?></td>
								<td><?php echo $value->nama_satker ?></td>
								<td><?php echo $value->nama_kpa ?></td>
								<td><?php echo $value->sp_kelompok ?></td>
								<td><?php echo $value->tgl_review ?></td>
								<td><?php echo $value->ket_review ?></td>
								<td>

								<?php if($value->status == 1){ ?>

								<a class="btn btn-sm btn-danger" id="button" data-id="<?php echo $value->kode_rup ?>-0" data-toggle="modal" data-target="#modal-default"> Pokja</a>
								<a class="btn btn-sm btn-warning" disabled> SKPA</a>
								<a class="btn btn-sm btn-success" id="button" data-id="<?php echo $value->kode_rup ?>-2" data-toggle="modal" data-target="#modal-default"> Selesai</a>

								<?php }elseif($value->status == 2){ ?>

								<a class="btn btn-sm btn-danger" disabled> Pokja</a>
								<a class="btn btn-sm btn-warning" disabled> SKPA</a>
								<a class="btn btn-sm btn-success" disabled> Selesai</a>

								<?php }else{ ?>

								<a class="btn btn-sm btn-danger" id="button" data-id="<?php echo $value->kode_rup ?>-0" data-toggle="modal" data-target="#modal-default"> Pokja</a>
								<a class="btn btn-sm btn-warning" disabled> SKPA</a>
								<a class="btn btn-sm btn-success" disabled> Selesai</a>

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

<!-- popup -->
<script type="text/javascript">

$(document).on("click", "#button", function () {
     var data = $(this).data('id');
		 var arr = data.split('-');
		 document.getElementById('kode_rup').value = arr[0];
		 document.getElementById('status').value = arr[1];

		 document.getElementById('simpan').disabled = true;
});

$(document).on("keyup", "#keterangan", function () {
	if(document.getElementById('keterangan').value != ''){
		document.getElementById('simpan').disabled = false;
	}else{
		document.getElementById('simpan').disabled = true;
	}
});

</script>

<div class="modal fade" id="modal-default" style="display: none;">
	<div class="modal-dialog">
		<form class="" action="<?php echo site_url('pokja_paket/review_update') ?>" method="post">

            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Review</h4>
              </div>
              <div class="modal-body">
                <p>Keterangan Review?</p>
								<form class="" method="post">
									<input type="hidden" id="kode_rup" name="kode_rup" class="form-control">
									<input type="hidden" id="status" name="status" class="form-control">
									<input type="text" id="keterangan" name="keterangan" class="form-control">
								</form>
              </div>
              <div class="modal-footer">
								<button type="submit" id="simpan" class="btn btn-danger">Review</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
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
