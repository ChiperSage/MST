<table class="table table-sm table-bordered table-striped">
  <thead>
    <tr>
      <th>Tahapan</th>
      <th>Tgl. Mulai</th>
      <th>Tgl. Selesai</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($list_jadwal as $val) {
    $now = date('Y-m-d');
    $tgl1 = date('Y-m-d',strtotime($val->tgl_mulai));
    $tgl2 = date('Y-m-d',strtotime($val->tgl_selesai));

    $class = ($tgl1 <= $now && $now <= $tgl2) ? 'class="text-bold"' : '' ;
    ?>
    <tr>
      <td <?php echo $class ?>><?php echo $val->tahapan ?></td>
      <td <?php echo $class ?>><?php echo $val->tgl_mulai ?></td>
      <td <?php echo $class ?>><?php echo $val->tgl_selesai ?></td>
      <td <?php echo $class ?>><?php echo $val->keterangan ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
