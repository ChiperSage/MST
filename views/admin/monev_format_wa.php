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
	<!-- <small class="pull-right text-bold"> <?php //echo date('d M Y, H:i:s') ?> </small> -->

<p>
	*Yth Bp. Asisten II*<br>
	Capaian Progres sd <?php echo date('d M Y') ?> Jam <?php echo date('H:i') ?> wib
</p>

	<p>*-Paket Masuk Sistem SPSE (Tender): <?php echo $total[0]->tpaket //$total[0]->tpaket_non_tender)  ?> Pkt*</p>

<p>Rincian sbb :</p>
<p>*Total Paket Tender Masuk Sistem SPSE :
	<?php
	$paket1 = $total[0]->tpaket; //$total[0]->tpaket_non_tender;
	$selisih1 = ($total[0]->tpaket - $total[0]->total_selisih_lelang);
	if($selisih1 == 0){
		$hasil1 = ($paket1 + $selisih1);
		// $hasil1 = $selisih1;
	}elseif($selisih1 > 0){
		$hasil1 = $paket1 - $selisih1;
	}elseif($selisih1 < 0){
		$plus = ($selisih1 * -1);
		$hasil1 = $paket1 + $plus;
		$selisih1 = '('.$selisih1.')';
	}

	echo $hasil1 .' + '. $selisih1 .' = '. $paket1;
	?>*</p>

<p>
<?php foreach ($lap as $val) { ?>
<span class="text-capitalize">
<?php
$paket1 = ($val->tpaket);
$selisih1 = $paket1 - ($val->total_selisih_lelang);

if($selisih1 == 0){
	$hasil1 = ($paket1 + $selisih1);
	$selisih1 = '';
	$satker = $val->singkatan;
}elseif($selisih1 > 0){
	$hasil1 = ($paket1 - $selisih1);
	$selisih1 = '+'.$selisih1.'*';
	$satker = '*'.$val->singkatan;
}elseif($selisih1 < 0){
	$plus = ($selisih1 * -1);
	$hasil1 = $paket1 + $plus;
	$selisih1 = '('.$selisih1.')*';
	$satker = '*'.$val->singkatan;
}

echo $satker .' '. $hasil1 .''. $selisih1; ?>,
</span>
<?php } ?>
</p>

	<p>*Belum Tayang : <?php
	$paket2 = $total[0]->total_bt;
	$selisih2 = ($total[0]->total_bt - $total[0]->total_selisih_bt);
	if($selisih2 == 0){
		$hasil2 = $total[0]->total_bt + $selisih2;
	}elseif($selisih2 > 0){
		$hasil2 = $paket2 - $selisih2;
	}elseif($selisih2 < 0){
		$plus = ($selisih2 * -1);
		$hasil2 = $paket2 + $plus;
		$selisih2 = '('.$selisih2.')';
	}

	echo $hasil2 .' + '. $selisih2 .' = '. ($paket2);
	?>*</p>

	<p>
	<?php foreach ($lap as $val) { ?>
	<span class="text-capitalize">
	<?php
	$selisih2 = ($val->bt - $val->bt_selisih);
	if($selisih2 == 0){
		$hasil2 = $val->bt + $selisih2;
		$selisih2 = '';
		$satker = $val->singkatan;
	}elseif($selisih2 > 0){
		$hasil2 = $val->bt - $selisih2;
		$selisih2 = '+'.$selisih2.'*';
		$satker = '*'.$val->singkatan;
	}elseif($selisih2 < 0){
		$plus = ($selisih2 * -1);
		$hasil2 = $val->bt + $plus;
		$selisih2 = '('.$selisih2.')*';
		$satker = '*'.$val->singkatan;
	}

	echo $satker .' '. $hasil2 . $selisih2;
	?>,
	</span>
	<?php } ?>
	</p>

	<p>*Tayang :
		<?php
		$paket3 = $total[0]->total_tayang;
		$selisih3 = ($total[0]->total_tayang - $total[0]->total_selisih_tayang);
		if($selisih3 == 0){
			$hasil3 = ($total[0]->total_tayang + $selisih3);
		}elseif($selisih3 > 0){
			$hasil3 = $paket3 - $selisih3;
		}elseif($selisih3 < 0){
			$plus = ($selisih3 * -1);
			$hasil3 = $paket3 + $plus;
			$selisih3 = '('.$selisih3.')';
		}

		echo $hasil3 .' + '. $selisih3 .' = '. $paket3;
		?>*</p>

	<p>
		<?php foreach ($lap as $val) { ?>
		<span class="text-capitalize">
		<?php
		$paket3 = $val->t;
		$selisih3 = ($val->t - $val->t_selisih);
		if($selisih3 == 0){
			$hasil3 = $val->t + $selisih3;
			$selisih3 = '';
			$satker = $val->singkatan;
		}elseif($selisih3 > 0){
			$hasil3 = $val->t - $selisih3;
			$selisih3 = '+'.$selisih3.'*';
			$satker = '*'.$val->singkatan;
		}elseif($selisih3 < 0){
			$plus = ($selisih3 * -1);
			$hasil3 = $val->t + $plus;
			$selisih3 = '('.$selisih3.')*';
			$satker = '*'.$val->singkatan;
		}

		echo $satker .' '. $hasil3 . $selisih3;
		?>,
		</span>
		<?php } ?>
	</p>

	<p>*Umum Pemenang :
		<?php
		$paket4 = $total[0]->total_menang;
		$selisih4 = ($total[0]->total_menang - $total[0]->total_selisih_menang);
		if($selisih4 == 0){
			$hasil4 = ($total[0]->total_menang + $selisih4);
		}elseif($selisih4 > 0){
			$hasil4 = $paket4 - $selisih4;
		}elseif($selisih4 < 0){
			$plus = ($selisih4 * -1);
			$hasil4 = $paket4 + $plus;
			$selisih4 = '('.$selisih4.')';
		}

		echo $hasil4 .' + '. $selisih4 .' = '. $paket4;
		?>*</p>

	<p>
		<?php foreach ($lap as $val) { ?>
		<span class="text-capitalize">
		<?php
		$selisih4 = ($val->m - $val->m_selisih);
		if($selisih4 == 0){
			$hasil4 = $val->m + $selisih4;
			$selisih4 = '';
			$satker = $val->singkatan;
		}elseif($selisih4 > 0){
			$hasil4 = $val->m - $selisih4;
			$selisih4 = '+'.$selisih4.'*';
			$satker = '*'.$val->singkatan;
		}elseif($selisih4 < 0){
			$plus = ($selisih4 * -1);
			$hasil4 = $val->m + $plus;
			$selisih4 = '('.$selisih4.')*';
			$satker = '*'.$val->singkatan;
		}

		echo $satker .' '. $hasil4 . $selisih4;
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
