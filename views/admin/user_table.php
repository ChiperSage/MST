<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Pengguna
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
			<li class="active">Data Pengguna</li>
		</ol>
	</section>

	<section class="content">

<div class="row">
  <div class="col-xs-12">

    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Data Pengguna</h3>
				<a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url('user/create_user') ?>"><i class="fa fa-plus-circle"></i> Tambah</a>
        <!-- <a class="btn btn-warning btn-sm" href="<?php echo base_url('group') ?>"><i class="fa fa-users"></i> List Group</a> -->
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No.</th>
							<th>Username</th>
							<th>Nama</th>
							<th>Email</th>
              <th>Grup</th>
              <th>Status</th>
              <th width="150">#</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=0; foreach ($users as $user) { $i++ ?>
              <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $user->username ?></td>
                <td><?php echo $user->first_name.' '.$user->last_name.' <br/><span class="text-danger">'.$user->nip.'</span>' ?></td>
								<td><?php echo $user->email ?></td>
                <td>
                  <?php foreach ($user->groups as $group):?>
                    <?php echo htmlspecialchars($group->name,ENT_QUOTES,'UTF-8').', ' ;?>
                  <?php endforeach?>
                </td>
                <td><?php echo ($user->active) ? anchor("user/deactivate/".$user->id, lang('index_active_link')) : anchor("user/activate/". $user->id, lang('index_inactive_link'));?></td>
                <td>
                  <a class="btn btn-success btn-sm" href="<?php echo base_url('user/edit_user/'.$user->id) ?>"><i class="fa fa-edit"></i> Edit</a>
                  <a class="btn btn-danger btn-sm" href="<?php echo base_url('user/delete_user/'.$user->id) ?>"><i class="fa fa-trash"></i> Hapus</a>
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
