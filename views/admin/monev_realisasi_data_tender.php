<div class="content-wrapper">

 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			MONEV
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Monev</a></li>
      <li class="active">Laporan</li>
		</ol>
	</section>

	<section class="content">

    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title"><b class="text-uppercase">Realisasi Proses Tender APBA <?php echo date('Y') ?></b></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

				<div class="btn-group">
					<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><i class="fa fa-print"></i> Cetak
					<span class="caret"></span>
				<span class="sr-only">Toggle Dropdown</span>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li><a target="_blank" href="<?php echo base_url() ?>cetak/tender?type=pdf">PDF</a></li>
					<li><a target="_blank" href="<?php echo base_url() ?>cetak/tender?type=image">Image</a></li>
				</ul>
				</div>
				<br>

<div class="table-responsive">

	<small class="pull-right text-bold"> <?php echo date('d M Y, H:i:s') ?> </small>

				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th rowspan="2" class="text-center" style="vertical-align:middle">No.</th>
							<th class="text-center" width="200" rowspan="2" style="vertical-align:middle">SKPA</th>
							<th class="text-center" colspan="2" width="250" style="vertical-align:middle">Paket Masuk SPSE <br>(Tender)</br></th>
							<!-- <th class="text-center" colspan="2" width="250" style="vertical-align:middle">Paket Masuk SPSE <br>(Non Tender)</br></th> -->
							<th colspan="4" class="text-center bg-red">Belum Tayang <br><?php echo $total[0]->sbt ?></br></th>
							<th colspan="4" class="text-center bg-yellow">Tayang <br><?php echo $total[0]->st ?></br></th>
							<th colspan="4" class="text-center bg-green">Umum Pemenang <br><?php echo $total[0]->sup ?></br></th>
							<th colspan="4" class="text-center" style="background-color:#CCC;">Paket Batal <br><?php echo $total[0]->spb ?></br></th>
						</tr>
						<tr>
							<th class="text-center">Total Paket</th>
							<th class="text-center">Total Pagu (Rp)</th>
							<!-- <th class="text-center">Total Paket</th> -->
							<!-- <th class="text-center">Total Pagu (Rp)</th> -->

							<th class="text-center">KT</th>
							<th class="text-center">KS</th>
							<th class="text-center">B</th>
							<th class="text-center">J</th>
							<th class="text-center">KT</th>
							<th class="text-center">KS</th>
							<th class="text-center">B</th>
							<th class="text-center">J</th>
							<th class="text-center">KT</th>
							<th class="text-center">KS</th>
							<th class="text-center">B</th>
							<th class="text-center">J</th>
							<th class="text-center">KT</th>
							<th class="text-center">KS</th>
							<th class="text-center">B</th>
							<th class="text-center">J</th>
						</tr>
					</thead>
					<tbody>
						<tr class="text-bold">
							<td colspan="2" class="text-center">Jumlah</td>
							<td class="text-center"><?php echo $total[0]->tpaket ?></td>
							<td class="text-right"><?php echo number_format($total[0]->tpagu) ?></td>

							<!-- <td class="text-center" style="vertical-align:middle"><?php //echo $total[0]->tpaket_non_tender ?></td> -->
							<!-- <td class="text-right" style="vertical-align:middle"><?php //echo number_format($total[0]->tpagu_non_tender) ?></td> -->


							<td class="text-center"><?php echo $total[0]->sbt_kt ?></td>
							<td class="text-center"><?php echo $total[0]->sbt_ks ?></td>
							<td class="text-center"><?php echo $total[0]->sbt_b ?></td>
							<td class="text-center"><?php echo $total[0]->sbt_j ?></td>
							<td class="text-center"><?php echo $total[0]->st_kt ?></td>
							<td class="text-center"><?php echo $total[0]->st_ks ?></td>
							<td class="text-center"><?php echo $total[0]->st_b ?></td>
							<td class="text-center"><?php echo $total[0]->st_j ?></td>
							<td class="text-center"><?php echo $total[0]->sup_kt ?></td>
							<td class="text-center"><?php echo $total[0]->sup_ks ?></td>
							<td class="text-center"><?php echo $total[0]->sup_b ?></td>
							<td class="text-center"><?php echo $total[0]->sup_j ?></td>
							<td class="text-center"><?php echo $total[0]->pb_kt ?></td>
							<td class="text-center"><?php echo $total[0]->pb_ks ?></td>
							<td class="text-center"><?php echo $total[0]->pb_b ?></td>
							<td class="text-center"><?php echo $total[0]->pb_j ?></td>
						</tr>
						<?php $i=0; foreach ($lap as $value) { $i++ ?>
							<tr>
								<td><?php echo $i ?></td>
								<td class="text-uppercase"><?php echo $value->singkatan ?></td>
								<td class="text-center"><?php echo $value->tpaket ?></td>
								<td class="text-right"><?php echo number_format($value->tpagu) ?></td>

								<!-- <td class="text-center"><?php //echo $value->tpaket_non_tender ?></td> -->
								<!-- <td class="text-right"><?php //echo number_format($value->tpagu_non_tender) ?></td> -->

								<td class="text-center"><?php echo $value->bt_kt ?></td>
								<td class="text-center"><?php echo $value->bt_ks ?></td>
								<td class="text-center"><?php echo $value->bt_b ?></td>
								<td class="text-center"><?php echo $value->bt_j ?></td>
								<td class="text-center"><?php echo $value->t_kt ?></td>
								<td class="text-center"><?php echo $value->t_ks ?></td>
								<td class="text-center"><?php echo $value->t_b ?></td>
								<td class="text-center"><?php echo $value->t_j ?></td>
								<td class="text-center"><?php echo $value->m_kt ?></td>
								<td class="text-center"><?php echo $value->m_ks ?></td>
								<td class="text-center"><?php echo $value->m_b ?></td>
								<td class="text-center"><?php echo $value->m_j ?></td>
								<td class="text-center"><?php echo $value->b_kt ?></td>
								<td class="text-center"><?php echo $value->b_ks ?></td>
								<td class="text-center"><?php echo $value->b_b ?></td>
								<td class="text-center"><?php echo $value->b_j ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>

				</div>

      </div>
    </div>

	</section>

</div>
