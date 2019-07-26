<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Barang Jasa
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Kasubbag</a></li>
      <li>Barang Jasa</li>
			<li class="active">Paket</li>
		</ol>
	</section>

	<section class="content">

		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title">Paket Barang Jasa</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">

				<?php echo $this->session->flashdata('msg') ?>
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="60">No.</th>
							<th>Nama Paket</th>
							<th>Jenis Pengadaan</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=0; foreach ($paket as $value) { $i++ ?>
							<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $value->nama_paket ?></td>
								<td class="text-capitalize"><?php echo $value->jenis_pengadaan ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>

			</div>
		</div>

	</section>

</div>
