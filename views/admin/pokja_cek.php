<?php
// $nama = isset($rekanan_detail) ? $rekanan_detail->rekanan_nama : '' ;
// $deskripsi = isset($rekanan_detail) ? $rekanan_detail->rekanan_deskripsi : '' ;
?>

  <div class="content-wrapper">
     <!-- Content Header (Page header) -->
    <section class="content-header">
    		<h1>
    			Perusahaan
    			<small>Control Panel</small>
    		</h1>
    		<ol class="breadcrumb">
    			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
          <li>Pokja</li>
    			<li class="active">Data Perusahaan</li>
    		</ol>
    </section>

    <section class="content">

    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Form Input</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->

      <div class="box-body">

        <form class="form-horizontal" method="post">

         <?php echo validation_errors(); ?>

         <div class="form-group">
          <label for="" class="col-sm-2 control-label">NPWP Perusahaan</label>
          <div class="col-sm-6">
            <div class="input-group">
            <input type="text" class="form-control" name="npwp" placeholder="">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-warning"><i class="fa fa-search"></i> Cari</button>
              <?php if($this->session->userdata('sess_npwp') == 0){ ?>
<a href="<?php echo base_url('perusahaan/create') ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Perusahaan Baru</a>
<?php }else{ ?>
  <a href="#" class="btn btn-primary"><i class="fa fa-refresh"></i> Proses SKP</a>
<?php } ?>
            </span>
            </div>

            <?php
            $result = $this->session->userdata('sess_npwp');
            if($result == 0){
            ?>
            <span class="text-danger">Perusahaan tidak ditemukan.</span>
            <?php } ?>

          </div>
        </div>

      </form>

      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th width="40">No.</th>
            <th>NPWP</th>
            <th>Nama Perusahaan</th>
            <th>Ekuitas</th>
            <th width="160">#</th>
          </tr>
        </thead>
        <tbody>
          <?php //$i=0; foreach ($paket as $value) { $i++ ?>
            <tr>
              <td><?php //echo $i ?></td>
              <td><?php //echo $value->nama_paket ?></td>
              <td><?php //echo $value->pokja_nama ?></td>
              <td class="text-capitalize"><?php //echo $value->anggota_jabatan ?></td>
              <td>
                <a class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                <a class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
              </td>
            </tr>
          <?php //} ?>
        </tbody>
      </table>

    </div>
    </div>

</section>

</div>
