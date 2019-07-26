<?php
$field = array(''=>'Pilihan');
foreach ($paket_list as $value) {
	$field[$value->kode_rup] = $value->nama_paket;
}
echo form_dropdown('kode_rup',$field,0,'class="form-control"');
