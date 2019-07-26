<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Perusahaan
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Pokja</a></li>
      <li>Perusahaan</li>
			<!-- <li class="active">Data</li> -->
		</ol>
	</section>

	<section class="content">

        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data Perusahaan</h3>
						<?php
						$seg = $this->uri->segment(2);
						if($seg == 'create' || $seg == 'update'){
						?>
						<!-- <a class="btn btn-default pull-right" href="<?php //echo base_url('perusahaan') ?>"><i class="fa fa-undo"></i> Kembali</a> -->
						<?php }else{ ?>
						<a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url('perusahaan/create') ?>"><i class="fa fa-plus-circle"></i> Tambah</a>
						<?php } ?>
          </div>
          <!-- /.box-header -->
          <div class="box-body">

						<?php
						// $seg = $this->uri->segment(2);
						// if($seg == 'create' || $seg == 'update'){
						// 	include('perusahaan_form.php');
						// }
						?>

            <?php echo $this->session->flashdata('msg') ?>

            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th width="60">No.</th>
                  <th>NPWP</th>
									<th>Nama Perusahaan</th>
									<th>Ekuitas</th>
									<th>Jenis Pengadaan</th>
									<th>Kualifikasi</th>
                  <th>Keterangan</th>
                  <th width="80">#</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=0; foreach ($perusahaan as $value) { $i++ ?>
                  <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $value->npwp ?></td>
                    <td><?php echo $value->nama_perusahaan ?></td>
										<td class="text-right"><?php echo number_format($value->ekuitas) ?></td>
										<td class="text-capitalize"><?php echo $value->jenis_pengadaan ?></td>
										<td class="text-capitalize"><?php echo $value->kualifikasi ?></td>
                    <td><?php echo $value->keterangan ?></td>
                    <td>
                      <a class="btn btn-success btn-sm" href="<?php echo site_url('perusahaan/update/'.$value->id) ?>"><i class="fa fa-edit"></i> Edit</a>
                      <!-- <a class="btn btn-danger btn-sm" href="<?php echo site_url('perusahaan/delete/'.$value->id) ?>" onClick="return confirm('Hapus data ini?')"><i class="fa fa-trash"></i> Hapus</a> -->
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
