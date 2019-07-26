<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			SP
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Kasubbag</a></li>
			<li class="active">SP</li>
		</ol>
	</section>

<?php
if($this->ion_auth->in_group('barang_jasa') == 1){
	$group_title = 'pada bidang Barang Jasa.';
}elseif($this->ion_auth->in_group('jasa_lain') == 1){
	$group_title = 'pada bidang Jasa Lain.';
}elseif($this->ion_auth->in_group('konstruksi') == 1){
	$group_title = 'pada bidang Konstruksi.';
}elseif($this->ion_auth->in_group('konsultansi') == 1){
	$group_title = 'pada bidang Konsultansi.';
}else{
	$group_title = '';
}
?>

	<section class="content">

    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Surat Penugasan</h3>
        <a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url('sp/create') ?>"><i class="fa fa-plus-circle"></i> Tambah</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

				<!-- <p>Surat penugasan untuk semua paket pekerjaan <?php //echo $group_title ?></p> -->

        <?php echo $this->session->flashdata('msg') ?>

				<script>
	 		 	function tampil_anggota(id_sp){

		 		 	var xhttp = new XMLHttpRequest(this);
		 		 	xhttp.onreadystatechange = function() {
		 		 	if(this.readyState == 4 && this.status == 200)
					{
						data_rup = this.responseText;
						// alert(data_rup);
						document.getElementById('list_anggota').innerHTML = data_rup;
		 		 	}

	 		 	};
	 		 xhttp.open("GET", "<?php echo base_url('sp/ajax_list_anggota/') ?>" + id_sp, true);
	 		 xhttp.send();
	 		 }
	 		 </script>

        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th width="40">No.</th>
              <th>Nomor</th>
              <th>Tanggal</th>
							<th>Kelompok</th>
							<!-- <th>Ketua</th> -->
							<th class="text-center">Anggota</th>
							<th class="text-center">Paket</th>
              <th class="text-center">Keterangan</th>
              <th width="150">#</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=0; foreach ($sp as $value) { $i++ ?>
              <tr>
								<td><?php echo $i ?></td>
                <td><?php echo $value->sp_nomor ?></td>
                <td><?php echo date('d-m-Y',strtotime($value->sp_tanggal)) ?></td>
								<td><a href="#" id="<?php echo $value->sp_id ?>" data-toggle="modal" data-target="#modal-default-1" onClick="tampil_anggota(this.id)"><?php echo $value->sp_kelompok ?></a></td>
								<!-- <td><?php //echo $value->ketua_pokja ?></td> -->
								<?php //if($value->sp_status != 2){ ?>
								<td class="text-center"> <a href="<?php echo base_url('sp/anggota/'.$value->sp_id) ?>" class="btn btn-default btn-sm"> <?php echo $value->tanggota ?> </a> </td>
                <td class="text-center"> <a href="<?php echo base_url('sp/paket/'.$value->sp_id) ?>" class="btn btn-default btn-sm"> <?php echo $value->tpaket ?> </a></td>
								<?php //}else{ ?>
								<!-- <td class="text-center"><?php //echo $value->tanggota ?></td> -->
								<!-- <td class="text-center"><?php //echo $value->tpaket ?></td> -->
								<?php //} ?>
								<td class="text-center text-danger"><?php echo ($value->tketerangan > 0) ? 'Ganti ('.$value->tketerangan.')' : '-' ; ?></td>
								<td>
									<?php if($value->sp_status != 2){ ?>
									<a class="btn btn-pencil btn-success btn-sm" href="<?php echo site_url('sp/update/'.$value->sp_id) ?>"><i class="fa fa-edit"></i> Edit</a>
									<button id="button" type="button" class="btn btn-danger btn-sm" data-id="<?php echo $value->sp_id ?>" data-toggle="modal" data-target="#modal-default"><i class="fa fa-trash"></i> Hapus</button>
								  <?php }elseif($value->sp_status == 2){ ?>
									<a class="btn btn-warning btn-sm" target="_blank" href="<?php echo site_url('sp/cetak/'.$value->sp_id) ?>"><i class="fa fa-print"></i> Cetak</a>
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

<script type="text/javascript">
// add delete link
$(document).on("click", "#button", function () {
     var id = $(this).data('id');
		 document.getElementById('link').href = '<?php echo base_url('sp/delete/') ?>' + id;
});
</script>

<div class="modal fade" id="modal-default" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Konfirmasi</h4>
              </div>
              <div class="modal-body">
                <p>Hapus data ini?</p>
              </div>
              <div class="modal-footer">
								<a class="btn btn-danger" id="link" href="<?php echo base_url('sp/delete/0') ?>">Ya</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

				<div class="modal fade" id="modal-default-1" style="display: none;">
				          <div class="modal-dialog">
				            <div class="modal-content">
				              <div class="modal-header">
				                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                  <span aria-hidden="true">×</span></button>
				                <h4 class="modal-title">Detail Anggota</h4>
				              </div>
				              <div class="modal-body" id="list_anggota">

											</div>
				            </div>
				            <!-- /.modal-content -->
				          </div>
				          <!-- /.modal-dialog -->
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
