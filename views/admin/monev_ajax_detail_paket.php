<table id="example1" class="table table-bordered table-striped table-sm">
	<thead>
<tr>
	<th class="text-center">Kode RUP</th>
	<th class="text-center">Nama Paket</th>
	<th class="text-center">Pagu</th>
	<th class="text-center">Kelompok</th>
	<th class="text-center">Status Review</th>
	<th class="text-center">Keterangan Review</th>
	<th class="text-center">Jadwal</th>
</tr>
	</thead>
	<tbody>
<?php foreach ($list_paket as $value) {?>
<tr>
	<td><?php echo $value->kode_rup ?></td>
	<td><?php echo $value->nama_paket ?></td>
	<td class="text-right"><?php echo number_format($value->pagu_rup) ?></td>
	<td><?php echo $value->sp_kelompok ?></td>
	<td><?php echo $value->status ?></td>
	<td><?php echo $value->ket ?></td>
	<td>
		<?php if($value->tjadwal != 0){ ?>
			<!-- <a href="#" onclick="detail_jadwal(this)" data-id="<?php //echo $value->kode_rup ?>" class="btn btn-warning btn-sm" data-dismiss="modal" data-toggle="modal" data-target="#modal-jadwal">Lihat Jadwal</a> -->
			<a href="#" onclick="detail_jadwal(this)" data-id="<?php echo $value->kode_rup ?>" class="btn btn-warning btn-sm">Lihat Jadwal</a>
		<?php } ?>
	</td>
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
