<link rel="stylesheet" href="<?php echo base_url() ?>vendor/fancybox/dist/jquery.fancybox.min.css">

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
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
			<li class="active">POKJA</li>
		</ol>
	</section>

	<section class="content">

    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">POKJA</h3>
				<a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url('pokja/create') ?>"><i class="fa fa-plus-circle"></i> Tambah</a>
			</div>
      <!-- /.box-header -->
      <div class="box-body">

				<?php echo $this->session->flashdata('msg') ?>

        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th width="40">No.</th>
              <th>NIP</th>
							<th>Nama</th>
              <th>Email</th>
							<th>Pangkat</th>
							<th>Golongan</th>
							<th>Tahun Masuk</th>
							<th>Status</th>
              <th>Foto</th>
              <th width="150">#</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=0; foreach ($pokja as $value) { $i++ ?>
              <tr>
								<td><?php echo $i ?></td>
                <td><?php echo $value->pokja_nip ?></td>
								<td><?php echo $value->pokja_nama ?></td>
                <td><?php echo $value->pokja_email ?></td>
								<td><?php echo $value->pokja_pangkat ?></td>
								<td><?php echo $value->pokja_golongan ?></td>
								<td><?php echo trim($value->pokja_tahun) ?></td>
								<td><?php echo ($value->pokja_status == 1) ? 'Aktif' : 'Non Aktif' ; ?></td>
                <td>
									<?php if(!empty($value->pokja_foto)){ ?>
									<a data-fancybox="gallery" style="transform:rotate(270deg)" href="<?php echo base_url() . $value->pokja_foto ?>">
										<img width="50" style="transform:rotate(270deg)" src="<?php echo base_url() . $value->pokja_foto ?>">
									</a>
									<?php } ?>
								</td>
                <td>
									<a class="btn btn-success btn-sm" href="<?php echo base_url('pokja/update/'.$value->pokja_id) ?>"><i class="fa fa-edit"></i> Edit</a>
									<a class="btn btn-danger btn-sm" href="<?php echo base_url('pokja/delete/'.$value->pokja_id) ?>" onClick="return confirm('Hapus data ini?')"><i class="fa fa-trash"></i> Hapus</a>
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

<script type="text/javascript" src="<?php echo base_url() ?>vendor/fancybox/dist/jquery.fancybox.min.js"></script>

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
