<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Non Tender
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
			<li>Non Tender</li>
		</ol>
	</section>

	<section class="content">

<div class="row">
  <div class="col-xs-12">

    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Non Tender</h3>
        <a class="btn btn-primary pull-right" href="<?php echo base_url('non_tender/create') ?>"><i class="fa fa-refresh"></i> Sinkron Data</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <?php echo $this->session->flashdata('msg') ?>

				<div class="table-responsive">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No.</th>
              <th>Kode Lelang</th>
              <th>Kode RUP</th>
              <th>Nama Paket</th>
              <th>Pagu</th>
              <th>HPS</th>
							<th>Tahun</th>
							<th>Paket Status</th>
              <th>UKPBJ</th>
							<th>Status Lelang</th>
							<th>Tahapan</th>
							<th>Tgl. Mulai</th>
							<th>Tgl. Selesai</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=0; foreach ($lelang as $value) { $i++ ?>
              <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $value->kode_lelang ?></td>
                <td><?php echo $value->kode_rup ?></td>
                <td><?php echo $value->nama_paket ?></td>
                <td class="text-right"><?php echo number_format($value->pagu) ?></td>
                <td class="text-right"><?php echo number_format($value->hps) ?></td>
								<td><?php echo $value->tahun ?></td>
								<td><?php echo $value->paket_status ?></td>
                <td><?php echo $value->ukpbj ?></td>
								<td><?php echo $value->status_lelang ?></td>
								<td><?php echo $value->tahapan ?></td>
								<td><?php echo $value->tgl_mulai ?></td>
								<td><?php echo $value->tgl_selesai ?></td>
                <td><?php echo $value->keterangan ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>

				</div>

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>

</section>

<!-- /.content -->
</div>

<!-- DataTables -->
<script src="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
