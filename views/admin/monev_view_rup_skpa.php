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
        <h3 class="box-title"><b class="text-uppercase">Realisasi Jenis Pengadaan (RUP) Tahun <?php echo date('Y') ?> Per SKPA</b></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

<div class="btn-group">
	<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><i class="fa fa-print"></i> Cetak
	<span class="caret"></span>
<span class="sr-only">Toggle Dropdown</span>
</button>
<ul class="dropdown-menu" role="menu">
	<!-- <li><a target="_blank" href="<?php echo base_url() ?>cetak/rup_skpa?type=pdf">PDF</a></li> -->
	<!-- <li><a target="_blank" href="<?php echo base_url() ?>cetak/rup_skpa?type=image">Image</a></li> -->
	<li><a target="_blank" href="<?php echo base_url() ?>monev/view_rup_skpa?type=pdf">PDF</a></li>
	<li><a target="_blank" href="<?php echo base_url() ?>monev/view_rup_skpa?type=excel">Excel</a></li>
</ul>
</div>

<br>

<div id="html-content-holder" class="table-responsive">

<small class="text-bold pull-right"> <?php echo date('Y-m-d H:i:s') ?> </small>

				<table class="table table-bordered table-sm">
					<thead>
						<tr>
							<th rowspan="4" style="vertical-align:middle">No.</th>
							<th class="text-center text-capitalize" rowspan="4" style="vertical-align:middle">Nama Satker</th>
							<th class="text-center" rowspan="2" colspan="2" style="vertical-align:middle">Tender</th>
							<th class="text-center" rowspan="2" colspan="2" style="vertical-align:middle">Tender Cepat</th>
							<th class="text-center" style="vertical-align:middle" colspan="8"> Paket Non Tender</th>
							<th class="text-center" style="vertical-align:middle" rowspan="2" colspan="2"> Swakelola</th>
							<th class="text-center" style="vertical-align:middle" rowspan="2" colspan="2"> Total</th>
						</tr>
						<tr>
							<th class="text-center" colspan="2" style="vertical-align:middle">Penunjukan Langsung <p> > 200 Jt</p></th>
							<th class="text-center" colspan="2" style="vertical-align:middle">Penunjukan Langsung <p> <= 200 Jt</p></th>
							<th class="text-center" colspan="2" style="vertical-align:middle">Pengadaan Langsung</th>
							<th class="text-center" colspan="2" style="vertical-align:middle">e-Purchasing</th>
						</tr>
						<tr>

							<th class="text-center">Paket</th>
							<th class="text-center">Pagu</th>

							<th class="text-center">Paket</th>
							<th class="text-center">Pagu</th>

							<th class="text-center">Paket</th>
							<th class="text-center">Pagu</th>

							<th class="text-center">Paket</th>
							<th class="text-center">Pagu</th>

							<th class="text-center">Paket</th>
							<th class="text-center">Pagu</th>

							<th class="text-center">Paket</th>
							<th class="text-center">Pagu</th>

							<th class="text-center">Paket</th>
							<th class="text-center">Pagu</th>

							<th class="text-center">Paket</th>
							<th class="text-center">Pagu</th>

						</tr>
						<tr>

							<th class="text-center"><?php echo number_format($total[0]->pt_paket); ?></th>
				      <th class="text-center"><?php echo number_format($total[0]->pt_pagu); ?></th>

							<th class="text-center"><?php echo number_format($total[0]->tc_paket); ?></th>
				      <th class="text-center"><?php echo number_format($total[0]->tc_pagu); ?></th>

				      <th class="text-center"><?php echo number_format($total[0]->pl_paket); ?></th>
				      <th class="text-center"><?php echo number_format($total[0]->pl_pagu); ?></th>

				      <th class="text-center"><?php echo number_format($total[0]->pl1_paket); ?></th>
				      <th class="text-center"><?php echo number_format($total[0]->pl1_pagu); ?></th>

				      <th class="text-center"><?php echo number_format($total[0]->pl2_paket); ?></th>
				      <th class="text-center"><?php echo number_format($total[0]->pl2_pagu); ?></th>

				      <th class="text-center"><?php echo number_format($total[0]->ep_paket); ?></th>
				      <th class="text-center"><?php echo number_format($total[0]->ep_pagu); ?></th>

				      <th class="text-center"><?php echo number_format($total[0]->sw_paket); ?></th>
				      <th class="text-center"><?php echo number_format($total[0]->sw_pagu); ?></th>

				      <th class="text-center"><?php echo number_format($total[0]->tt_paket); ?></th>
				      <th class="text-center"><?php echo number_format($total[0]->tt_pagu); ?></th>

						</tr>
					</thead>
					<tbody>
						<?php $i = 1; foreach ($laporan as $val) { ?>

							<tr>
								<td class="text-uppercase text-center"><?php echo $i++ ?></td>
								<td class="text-uppercase"><?php echo $val->singkatan ?></td>

								<td class="text-center"><?php echo $val->pt_paket ?></td>
								<td class="text-right"><?php echo number_format($val->pt_pagu) ?></td>

								<td class="text-center"><?php echo $val->tc_paket ?></td>
								<td class="text-right"><?php echo number_format($val->tc_pagu) ?></td>

								<td class="text-center"><?php echo $val->pl_paket ?></td>
								<td class="text-right"><?php echo number_format($val->pl_pagu) ?></td>

								<td class="text-center"><?php echo $val->pl1_paket ?></td>
								<td class="text-right"><?php echo number_format($val->pl1_pagu) ?></td>

								<td class="text-center"><?php echo $val->pl2_paket ?> </td>
								<td class="text-right"><?php echo number_format($val->pl2_pagu) ?></td>

								<td class="text-center"><?php echo $val->ep_paket ?></td>
								<td class="text-right"><?php echo number_format($val->ep_pagu) ?></td>

								<td class="text-center"><?php echo $val->sw_paket ?></td>
								<td class="text-right"><?php echo number_format($val->sw_pagu) ?></td>

								<td class="text-center"><?php echo $val->tt_paket ?></td>
								<td class="text-right"><?php echo number_format($val->tt_pagu) ?></td>
							</tr>

						<?php } ?>

					</tbody>
				</table>

				</div>

      </div>
    </div>

	</section>

</div>
