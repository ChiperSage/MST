<?php
$field = array(''=>'Pilihan');
foreach ($paket_list as $value) {
	$field[$value->kode_rup] = $value->nama_paket.' - '.$value->kode_rup;
}
echo form_dropdown('kode_rup',$field,0,'onchange="data_rup(this.value)" class="form-control"');
