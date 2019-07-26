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
      <li class="active">Paket SP Batal</li>
		</ol>
	</section>

	<section class="content">

<div class="row">
  <div class="col-xs-12">

    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Paket SP Batal</h3>
        <!-- <a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url('biro/create') ?>"><i class="fa fa-plus-circle"></i> Tambah</a> -->
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <?php echo $this->session->flashdata('msg') ?>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th width="60">No.</th>
							<th>Kode RUP</th>
							<th>Nama Paket</th>
              <th>Jns. Pengadaan</th>
							<th>Kelompok</th>
							<th>Keterangan</th>
              <th width="60">#</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=0; foreach ($paket as $value) { $i++ ?>
              <tr>
								<td><?php echo $i ?></td>
								<td><?php echo $value->batal_paket ?></td>
								<td><?php echo $value->nama_paket ?></td>
                <td class="text-capitalize"><?php echo $value->jenis_pengadaan ?></td>
								<td><?php echo $value->sp_kelompok ?></td>
								<td><?php echo $value->batal_keterangan ?></td>
                <td>
									<a class="btn btn-success btn-sm" id="button" data-id="<?php echo $value->id ?>" data-toggle="modal" data-target="#modal-default" href=""><i class="fa fa-refresh"></i> SP Ulang</a>
									<!-- <a class="btn btn-trash btn-danger btn-sm" href="<?php echo site_url('biro/delete/'.$value->biro_id) ?>" onClick="return confirm('Hapus data ini?')"><i class="fa fa-trash"></i> Hapus</a> -->
								</td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>

</section>
</div>

<script type="text/javascript">
$(document).on("click", "#button", function () {
     var id = $(this).data('id');
		 document.getElementById('link').href = '<?php echo site_url('sp/paketbatal/') ?>' + id;
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
                <p>SP ulang paket ini?</p>
              </div>
              <div class="modal-footer">
								<a class="btn btn-danger" id="link" href="">Ya</a>
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
