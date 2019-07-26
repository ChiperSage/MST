<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			RUP APBN
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
			<li>RUP APBN</li>
			<li>Data</li>
		</ol>
	</section>

	<section class="content">

<div class="row">
  <div class="col-xs-12">

    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Data RUP</h3>
				<a class="btn btn-primary pull-right" href="<?php echo base_url('rup_apbn/create') ?>"><i class="fa fa-plus-circle"></i> Tambah</a>
        <!-- <a class="btn btn-success pull-right" href="#"><i class="fa fa-refresh"></i> SINKRON</a> -->
      </div>
      <!-- /.box-header -->
      <div class="box-body">

<form class="form-inline" action="<?php echo base_url() ?>rup_apbn/index/0/" method="get">

<!-- <div class="form-group">
	<label>Pencarian</label>
	<input type="text" name="search" placeholder="Masukkan katakunci kemudian enter" class="form-control">
</div> -->

<div class="form-group">
	<?php //include('pagination.php') ?>
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
              <th width="140">#</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=$this->uri->segment(3); foreach ($rup as $val) { $i++ ?>
              <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $val->kode_rup ?></td>
                <td><?php echo $val->nama_paket ?></td>
								<td class="text-capitalize"><?php echo $val->jenis_pengadaan ?></td>
								<td><?php echo $val->nama_satker ?></td>
                <td class="text-right"><?php echo number_format($val->pagu_rup) ?></td>
                <td>
									<a href="<?php echo base_url('rup_apbn/update/'.$val->kode_rup) ?>" class="btn btn-success"><i class="fa fa-pencil"></i> Edit</a>
									<!-- <a href="<?php //echo base_url('rup_apbn/delete/'.$val->kode_rup) ?>" class="btn btn-danger" onClick="return confirm('Hapus data ini?')"><i class="fa fa-remove"></i> Hapus</a> -->
                </td>
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
<script src="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>
