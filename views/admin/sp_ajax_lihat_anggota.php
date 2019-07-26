<table class="table table-bordered">
	<tr>
		<th>NIP</th>
		<th>Nama</th>
	</tr>
	<?php foreach ($anggota as $value) { ?>
	<tr>
		<td><?php echo $value->anggota_nip ?></td>
		<td><?php echo $value->pokja_nama ?></td>
	</tr>
	<?php } ?>
</table>
