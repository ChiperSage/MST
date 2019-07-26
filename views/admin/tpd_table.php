<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			SKPA
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> SKPA</a></li>
			<li class="active">TPD</li>
		</ol>
	</section>

	<section class="content">

    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">TPD</h3>
        <a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url('tpd/create') ?>"><i class="fa fa-plus-circle"></i> Tambah</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

				<!-- <p>Surat penugasan untuk semua paket pekerjaan <?php echo $group_title ?></p> -->

        <?php echo $this->session->flashdata('msg') ?>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th width="50">No.</th>
							<th>Tanggal</th>
              <th>Nama Paket</th>
							<th>PABUNG</th>
							<th>Nilai HPS</th>
							<th>PTK</th>
							<th>Jenis</th>
							<th>Status</th>
              <th width="60">#</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=0; foreach ($tpd as $value) { $i++ ?>
              <tr>
								<td><?php echo $i ?></td>
								<td><?php echo $value->tanggal ?></td>
								<td><?php echo '<small class="text-danger">Kode RUP: '.$value->kode_rup.'</small><br/>'.$value->nama_paket ?></td>
								<td><?php echo $value->nama_pabung ?></td>
                <td><?php echo number_format($value->nilai_hps) ?></td>
								<td><?php echo $value->jenis_pengadaan ?></td>
								<td><?php echo $value->pengelola_teknis_kegiatan ?></td>
								<td class="text-uppercase"><?php echo $value->status_pengadaan ?></td>
								<td>
									<!-- <a class="btn btn-success btn-sm" href="<?php //echo site_url('tpd/update/'.$value->id) ?>"><i class="fa fa-edit"></i> Edit</a> -->
									<a class="btn btn-danger btn-sm" href="<?php echo site_url('tpd/delete/'.$value->kode_rup) ?>" onClick="return confirm('Hapus data ini?')"><i class="fa fa-trash"></i> Hapus</a>
								</td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

</section>

</div>

<script type="text/javascript">
$(document).on("click", "#button", function () {
     var id = $(this).data('id');
		 document.getElementById('link').href = '<?php echo base_url('tpd/delete/') ?>' + id;
});
</script>

<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
  })
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
								<a class="btn btn-danger" id="link" href="<?php echo base_url('tpd/delete/0') ?>">Ya</a>
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
