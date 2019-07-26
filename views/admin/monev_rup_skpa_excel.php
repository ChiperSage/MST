<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=hasil.xls");
?>

<table border="1">
  <thead>
    <tr>
      <th rowspan="4" style="vertical-align:middle">No.</th>
      <th class="text-center text-capitalize" rowspan="4" style="vertical-align:middle">Nama Satker</th>
      <th class="text-center" rowspan="2" colspan="2" style="vertical-align:middle">Paket Tender</th>
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

    </tr>
    <tr>

      <th class="text-center"><?php echo $total[0]->pt_paket; ?></th>
      <th class="text-center"><?php echo $total[0]->pt_pagu; ?></th>

      <th class="text-center"><?php echo $total[0]->pl_paket; ?></th>
      <th class="text-center"><?php echo $total[0]->pl_pagu; ?></th>

      <th class="text-center"><?php echo $total[0]->pl1_paket; ?></th>
      <th class="text-center"><?php echo $total[0]->pl1_pagu; ?></th>

      <th class="text-center"><?php echo $total[0]->pl2_paket; ?></th>
      <th class="text-center"><?php echo $total[0]->pl2_pagu; ?></th>

      <th class="text-center"><?php echo $total[0]->ep_paket; ?></th>
      <th class="text-center"><?php echo $total[0]->ep_pagu; ?></th>

      <th class="text-center"><?php echo $total[0]->sw_paket; ?></th>
      <th class="text-center"><?php echo $total[0]->sw_pagu; ?></th>

      <th class="text-center"><?php echo $total[0]->tt_paket; ?></th>
      <th class="text-center"><?php echo $total[0]->tt_pagu; ?></th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; foreach ($laporan as $val) { ?>

      <tr>
        <td class="text-uppercase text-center"><?php echo $i++ ?></td>
        <td class="text-uppercase"><?php echo $val->singkatan ?></td>

        <td class="text-center"><?php echo $val->pt_paket ?></td>
        <td class="text-right"><?php echo $val->pt_pagu ?></td>

        <td class="text-center"><?php echo $val->pl_paket ?></td>
        <td class="text-right"><?php echo $val->pl_pagu ?></td>

        <td class="text-center"><?php echo $val->pl1_paket ?></td>
        <td class="text-right"><?php echo $val->pl1_pagu ?></td>

        <td class="text-center"><?php echo $val->pl2_paket ?> </td>
        <td class="text-right"><?php echo $val->pl2_pagu ?></td>

        <td class="text-center"><?php echo $val->ep_paket ?></td>
        <td class="text-right"><?php echo $val->ep_pagu ?></td>

        <td class="text-center"><?php echo $val->sw_paket ?></td>
        <td class="text-right"><?php echo $val->sw_pagu ?></td>

        <td class="text-center"><?php echo $val->tt_paket ?></td>
        <td class="text-right"><?php echo $val->tt_pagu ?></td>

      </tr>

    <?php } ?>

  </tbody>
</table>
