<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			TPD
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> TPD</a></li>
			<li class="active">Home</li>
		</ol>
	</section>

	<section class="content">

					<div class="box box-primary">
            <div class="box-header with-border">

              <h3 class="box-title"> TPD </h3>
              <!-- <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div> -->

            </div>
            <div class="box-body">

							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th width="40">No.</th>
										<th>Tanggal</th>
										<th>Paket</th>
										<th>Jns. Pengadaan</th>
										<th width="auto">PABUNG</th>
										<th>Nilai Pagu</th>
										<th>Nilai HPS</th>
										<th width="auto">PTK</th>
										<th>Ket</th>
										<th>Checklist</th>
									</tr>
								</thead>
								<tbody>
									<?php $i=0; foreach ($tpd as $value) { $i++ ?>
										<tr>
											<td><?php echo $i ?></td>
											<td><?php echo $value->tanggal ?></td>
											<td><?php echo '<small class="text-danger">'.$value->kode_rup.'</small><br/>'.$value->nama_paket ?></td>
											<td><?php echo $value->jenis_pengadaan ?></td>
											<td><?php echo $value->nama_pabung ?></td>
											<td class="text-right"><?php echo number_format($value->nilai_pagu) ?></td>
											<td class="text-right"><?php echo number_format($value->nilai_hps) ?></td>
											<td><?php echo $value->pengelola_teknis_kegiatan ?></td>
											<td><?php //echo $value->pengelola_teknis_kegiatan ?></td>
											<td>
												<a class="btn btn-success btn-sm" href="<?php echo site_url('tpd_check/update/'.$value->kode_rup) ?>"><i class="fa fa-edit"></i></a>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>

            </div>
            </div>
            <!-- /.box-body -->

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
