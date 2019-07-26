<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Advokasi
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li>Advokasi</li>
			<li class="active">Data</li>
		</ol>
	</section>

	<section class="content">

<div class="row">
  <div class="col-xs-12">

    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Data Advokasi</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

				<?php echo $this->session->flashdata('msg') ?>

				<p>
				<div class="btn-group">
					<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><i class="fa fa-print"></i> Cetak
					<span class="caret"></span>
				<span class="sr-only">Toggle Dropdown</span>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li><a target="_blank" href="<?php echo base_url() ?>monev/advokasi?cetak=pdf">PDF</a></li>
				</ul>
				</div>
			</p>

<div class="table-responsive">

        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr class="text-center">
              <th width="30">No.</th>
							<th class="text-center">Tanggal</th>
							<th class="text-center">No. Surat</th>
              <th class="text-center">Lembaga</th>
              <th class="text-center">Alamat</th>
							<th class="text-center">Nama Paket</th>
							<th class="text-center">Materi</th>
							<th class="text-center">Tahap</th>
							<th class="text-center">Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=0; foreach ($advokasi as $value) { $i++ ?>
              <tr>
                <td class="text-center"><?php echo $i ?></td>
								<td><?php echo $value->tanggal ?></td>
								<td><?php echo $value->nomor_surat ?></td>
								<td><?php echo $value->lembaga ?></td>
								<td><?php echo $value->alamat ?></td>
								<td><?php echo $value->nama_paket ?></td>
								<td><?php echo $value->materi ?></td>
								<td><?php echo $value->tahap ?></td>
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
