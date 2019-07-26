<?php
$field = array();
foreach ($paket_list as $value) {
	$field[$value->kode_rup] = $value->nama_paket.' - '.$value->kode_rup;
}
echo form_dropdown('paket_id',$field,'','class="form-control"');
