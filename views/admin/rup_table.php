<!-- DataTables -->
<!-- <link rel="stylesheet" href="<?php //echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"> -->

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			RUP
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
			<li>RUP</li>
			<li>Data</li>
		</ol>
	</section>

	<section class="content">

<div class="row">
  <div class="col-xs-12">

    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Data RUP</h3>
				<a class="btn btn-primary pull-right" href="<?php echo base_url('rup/create') ?>"><i class="fa fa-refresh"></i> Sinkron Data</a>
        <!-- <a class="btn btn-success pull-right" href="#"><i class="fa fa-refresh"></i> SINKRON</a> -->
      </div>
      <!-- /.box-header -->
      <div class="box-body">

<form class="form-inline" action="<?php echo base_url() ?>rup/index/0/" method="get">

<div class="form-group">
	<label>Pencarian</label>
	<input type="text" name="search" placeholder="Masukkan katakunci kemudian enter" class="form-control">
</div>
<div class="form-group">
	<label></label>
	<?php include('pagination.php') ?>
</div>

</form>

				<?php echo $this->session->flashdata('msg') ?>

        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th width="50">No.</th>
              <th>Kode RUP</th>
              <th>Paket Pekerjaan</th>
							<th>Jenis</th>
							<th>Nama Satker</th>
              <th>Pagu RUP</th>
              <!-- <th width="120">#</th> -->
            </tr>
          </thead>
          <tbody>
            <?php $i=$this->uri->segment(3); foreach ($rup as $value) { $i++ ?>
              <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $value->kode_rup ?></td>
                <td><?php echo $value->nama_paket ?></td>
								<td class="text-capitalize"><?php echo $value->jenis_pengadaan ?></td>
								<td><?php echo $value->nama_satker ?></td>
                <td class="text-right"><?php echo number_format($value->pagu_rup) ?></td>
                <!-- <td> -->
									<!-- <a href="<?php //echo base_url('rup/update/'.$value->id) ?>" class="btn btn-success"><i class="fa fa-pencil"></i> Edit</a> -->
									<!-- <a href="<?php //echo base_url('rup/delete/'.$value->id) ?>" class="btn btn-danger"><i class="fa fa-remove"></i> Edit</a> -->
                <!-- </td> -->
              </tr>
            <?php } ?>
          </tbody>
        </table>
				<?php //include('pagination.php') ?>
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
<!-- <script src="<?php //echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script> -->
<!-- DataTables -->
<!-- <script src="<?php //echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script> -->

<!-- page script -->
<script>
  // $(function () {
  //   $('#example1').DataTable()
  // })
</script>
