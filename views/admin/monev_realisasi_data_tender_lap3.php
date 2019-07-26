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
        <h3 class="box-title"><b class="text-uppercase">*Realisasi Proses Tender APBA <?php echo date('Y') ?>*</b></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

<div class="table-responsive">

	<!-- <script src="<?php //echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/jquery/dist/jquery.min.js"></script> -->
	<!-- <small class="pull-right text-bold"> <?php echo date('d M Y, H:i:s') ?> </small> -->

<p>
	*Yth Bp. Asisten II*<br>
	Capaian Progres sd <?php echo date('d M Y') ?> Jam <?php echo date('H:i') ?> wib
</p>

	<p>*-Paket Masuk Sistem SPSE (Tender): <?php echo ($total[0]->tpaket + $total[0]->tpaket_non_tender)  ?> Pkt*</p>

<p>Rincian sbb :</p>
<p>*Total Paket Tender Masuk Sistem SPSE :
	<?php
	$paket = $total[0]->tpaket + $total[0]->tpaket_non_tender;
	$selisih = $total[0]->tpaket - $total[0]->total_selisih_lelang;
	if($selisih == 0){
		$hasil = $selisih;
	}elseif($selisih > 0){
		$hasil = $paket - $selisih;
	}elseif($selisih < 0){
		$plus = ($selisih * -1);
		$hasil = $paket + $plus;
		$selisih = '('.$selisih.')';
	}

	echo $hasil .'+'. $selisih .' = '. ($paket);
	?>*</p>

<p>
<?php foreach ($lap as $val) { ?>
<span class="text-capitalize">
<?php
$selisih1 = ($val->tpaket - $val->total_selisih_lelang);
if($selisih1 == 0){
	$hasil = $val->tpaket + $selisih1;
	$selisih1 = '';
}elseif($selisih1 > 0){
	$hasil = ($val->tpaket - $selisih1);
	$selisih1 = '+'.$selisih1;
}elseif($selisih1 < 0){
	$plus = ($selisih1 * -1);
	$hasil = $val->tpaket + $plus;
	$selisih1 = '('.$selisih1.')';
}

echo $val->singkatan .' '. $hasil .''. $selisih1;
?>,
</span>
<?php } ?>
</p>

	<p>*Belum Tayang : <?php
	$paket = $total[0]->total_bt;
	$selisih = ($total[0]->total_bt - $total[0]->total_selisih_bt);
	if($selisih == 0){
		$hasil = $selisih;
	}elseif($selisih > 0){
		$hasil = $paket - $selisih;
	}elseif($selisih < 0){
		$plus = ($selisih * -1);
		$hasil = $paket + $plus;
		$selisih = '('.$selisih.')';
	}

	echo $hasil .'+'. $selisih .' = '. ($paket);
	?>*</p>

	<p>
	<?php foreach ($lap as $val) { ?>
	<span class="text-capitalize">
	<?php
	$selisih2 = ($val->bt - $val->bt_selisih);
	if($selisih2 == 0){
		$hasil = $val->bt + $selisih2;
		$selisih2 = '';
	}elseif($selisih2 > 0){
		$hasil = $val->bt - $selisih2;
		$selisih2 = '+'.$selisih2;
	}elseif($selisih2 < 0){
		$plus = ($selisih2 * -1);
		$hasil = $val->bt + $plus;
		$selisih2 = '('.$selisih2.')';
	}

	echo $val->singkatan .' '. $hasil . $selisih2;
	?>,
	</span>
	<?php } ?>
	</p>

	<p>*Tayang :
		<?php
		$paket = $total[0]->total_tayang;
		$selisih = ($total[0]->total_tayang - $total[0]->total_selisih_tayang);
		if($selisih == 0){
			$hasil = $selisih;
		}elseif($selisih > 0){
			$hasil = $paket - $selisih;
		}elseif($selisih < 0){
			$plus = ($selisih * -1);
			$hasil = $paket + $plus;
			$selisih = '('.$selisih.')';
		}

		echo $hasil .' + '. $selisih .' = '. $paket;
		?>*</p>

	<p>
		<?php foreach ($lap as $val) { ?>
		<span class="text-capitalize">
		<?php
		$selisih3 = ($val->t - $val->t_selisih);
		if($selisih3 == 0){
			$hasil = $val->t + $selisih3;
			$selisih3 = '';
		}elseif($selisih3 > 0){
			$hasil = $val->t + $selisih3;
			$selisih3 = '+'.$selisih3;
		}elseif($selisih3 < 0){
			$plus = ($selisih3 * -1);
			$hasil = $val->t + $plus;
			$selisih3 = '('.$selisih3.')';
		}

		echo $val->singkatan .' '. $hasil . $selisih3;
		?>,
		</span>
		<?php } ?>
	</p>

	<p>*Umum Pemenang :
		<?php
		$paket = $total[0]->total_menang;
		$selisih = ($total[0]->total_menang - $total[0]->total_selisih_menang);
		if($selisih == 0){
			$hasil = ($total[0]->total_menang + $selisih);
		}elseif($selisih > 0){
			$hasil = $paket - $selisih;
		}elseif($selisih < 0){
			$plus = ($selisih * -1);
			$hasil = $paket + $plus;
			$selisih = '('.$selisih.')';
		}

		echo $hasil .' + '. $selisih .' = '. $paket;
		?>*</p>

	<p>
		<?php foreach ($lap as $val) { ?>
		<span class="text-capitalize">
		<?php
		// $selisih3 = ($val->t - $val->t_selisih);
		// if($selisih3 == 0){
		// 	$hasil = $val->t + $selisih3;
		// 	$selisih3 = '';
		// }elseif($selisih3 > 0){
		// 	$hasil = $val->t + $selisih3;
		// 	$selisih3 = '+'.$selisih3;
		// }elseif($selisih3 < 0){
		// 	$plus = ($selisih3 * -1);
		// 	$hasil = $val->t + $plus;
		// 	$selisih3 = '('.$selisih3.')';
		// }
		//
		// echo $val->singkatan .' '. $hasil . $selisih3;
		//
		$selisih4 = ($val->m - $val->m_selisih);
		if($selisih4 == 0){
			$hasil = $val->m + $selisih4;
			$selisih4 = '';
		}elseif($selisih4 > 0){
			$hasil = $val->m + $selisih4;
			$selisih4 = '+'.$selisih4;
		}elseif($selisih4 < 0){
			$plus = ($selisih4 * -1);
			$hasil = $val->m + $plus;
			$selisih4 = '('.$selisih4.')';
		}

		echo $val->singkatan .' '. $hasil . $selisih4;
		?>,
		</span>
		<?php } ?>
	</p>

<br>
<br>
	<p>Trm *Pandu / Karo BPBJ*</p>

</div>

      </div>
    </div>
	</section>
</div>
