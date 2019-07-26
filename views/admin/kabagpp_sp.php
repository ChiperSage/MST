<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Kabag PP
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
			<li>Kabag PP</li>
			<li class="active">SP</li>
		</ol>
	</section>

	<section class="content">

    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Surat Penunjukan</h3>
        <!-- <a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url('sp/create') ?>"><i class="fa fa-plus-circle"></i> Tambah</a> -->
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <?php echo $this->session->flashdata('msg') ?>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th width="40">No.</th>
              <th>Nomor</th>
              <th>Tanggal</th>
							<th>Kelompok</th>
							<th>Ketua</th>
							<th class="text-center">Anggota</th>
              <th class="text-center">Paket</th>
              <th width="30">Status</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=0; foreach ($sp as $value) { $i++ ?>
              <tr>
								<td><?php echo $i ?></td>
                <td><?php echo $value->sp_nomor ?></td>
                <td><?php echo date('d-m-Y',strtotime($value->sp_tanggal)) ?></td>
								<td><?php echo $value->sp_kelompok ?></td>
								<td><?php echo $value->ketua_pokja ?></td>
								<td class="text-center"> <a href="<?php echo base_url('kabagpp/sp_anggota/'.$value->sp_id) ?>" class="btn btn-default btn-sm"> <?php echo $value->tanggota ?> </a> </td>
                <td class="text-center"> <?php echo $value->tpaket ?> </td>
                <td class="text-center">
								<?php if($value->sp_status == 0){ ?>
								<a class="btn btn-default btn-sm" href="<?php echo site_url('kabagpp/confirm/'.$value->sp_id.'/'.$value->sp_status) ?>">KONFIRMASI</a>
								<?php }elseif($value->sp_status == 1){ ?>
								<i class="fa fa-check"></i>
								<?php }elseif($value->sp_status == 2){ ?>
								<i class="fa fa-check-circle"></i>
								<?php } ?>
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
  })
</script>
