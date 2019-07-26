<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			JSON
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li>JSON</li>
			<li>Data</li>
		</ol>
	</section>

	<section class="content">

<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Data Link JSON</h3>
		<a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url('json/create') ?>"><i class="fa fa-plus-circle"></i> Tambah</a>
  </div>
  <!-- /.box-header -->
  <!-- form start -->

  <div class="box-body">

		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th width="30">No.</th>
					<th width="100">Jenis Data</th>
					<th>URL</th>
					<th>Tahun</th>
					<th width="150">#</th>
				</tr>
			</thead>
			<tbody>
				<?php $i=0; foreach ($json as $value) { $i++ ?>
					<tr>
						<td><?php echo $i ?></td>
						<td class="text-capitalize"><?php echo $value->data ?></td>
						<td><?php echo $value->url ?></td>
						<td><?php echo $value->tahun ?></td>
						<td>
							<a class="btn btn-pencil btn-success btn-sm" href="<?php echo site_url('json/update/'.$value->id) ?>"><i class="fa fa-edit"></i> Edit</a>
							<a class="btn btn-trash btn-danger btn-sm" href="<?php echo site_url('json/delete/'.$value->id) ?>" onClick="return confirm('Hapus data ini?')"><i class="fa fa-trash"></i> Hapus</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>

	</div>

</div>

</section>

</div>
