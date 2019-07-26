<table id="example1" class="table table-bordered table-striped table-sm">
	<thead>
<tr>
	<th class="text-center">Kode RUP</th>
	<th class="text-center">Nama Paket</th>
	<th class="text-center">Pagu</th>
	<th class="text-center">Tahapan</th>
	<th class="text-center">Keterangan</th>
	<!-- <th class="text-center">Keterangan Review</th> -->
</tr>
	</thead>
	<tbody>
<?php foreach ($list_paket as $value) {?>
<tr>
	<td><?php echo $value->kode_rup ?></td>
	<td><?php echo $value->nama_paket ?></td>
	<td class="text-right"><?php echo number_format($value->pagu_rup) ?></td>
	<td><?php echo $value->tahapan ?></td>
	<td><?php echo $value->keterangan ?></td>
	<!-- <td><?php //echo $value->ket ?></td> -->
</tr>
<?php } ?>
	</tbody>
</table>

<!-- page script -->
<script>
	$(function () {
		$('#example1').DataTable();
	})
</script>
