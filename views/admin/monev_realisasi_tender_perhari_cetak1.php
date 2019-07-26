<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cetak Tender Perhari</title>
    <meta name="description" content="">

    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css">

<style>
  @media print{
    .bg-danger{background-color: red}
  }
</style>

  </head>
  <body>

<div class="container-fluid">

<script src="<?php echo base_url() ?>vendor/jsimage/jquery.min.js"></script>

<div id="html-content-holder" style="background-color: #FFF; padding-left: 0px; padding-top: 0px;">

  <h3><b class="text-uppercase">Realisasi Data Tender <?php echo date('Y') ?></b></h3>
  <small class="pull-right text-bold"> <?php echo date('d M Y, H:i:s') ?> </small>

  <table class="table table-sm table-bordered table-striped">
    <thead>
      <tr style="vertical-align:middle;">
        <th rowspan="2" class="text-center" style="vertical-align:middle">No.</th>

        <th class="text-center" rowspan="2" style="vertical-align:middle">SKPA</th>
        <th class="text-center" colspan="2" style="vertical-align:middle">Paket Masuk SPSE <br>(Tender)</br></th>
        <th class="text-center" colspan="2" style="vertical-align:middle">Paket Masuk SPSE <br>(Non Tender)</br></th>

        <th class="text-center bg-primary" colspan="4" style="background-color:#0099CC;">Paket SP <p><?php echo $total[0]->tsp ?></p></th>
        <th class="text-center" colspan="4" style="background-color:#CCC;">Review <p><?php echo $total[0]->review_total ?></p></th>
        <th colspan="4" class="text-center bg-danger" style="background-color:#ff4444">Belum Tayang <p><?php echo $total[0]->sbt ?></p></th>
        <th colspan="4" class="text-center bg-warning" style="background-color:#FF8800">Tayang <p><?php echo $total[0]->st ?></p></th>
        <th colspan="4" class="text-center bg-success" style="background-color:#007E33">Umum Pemenang <p><?php echo $total[0]->sup ?></p></th>
        <th colspan="4" class="text-center" style="background-color:#333; color: #FFF;">Paket Batal <p><?php echo $total[0]->spb ?></p></th>
      </tr>
      <tr style="vertical-align:middle;">
        <th class="text-center" style="white-space:nowrap;">Total Paket</th>
        <th class="text-center" style="white-space:nowrap;">Total Pagu (Rp)</th>

        <th class="text-center" style="white-space:nowrap;">Total Paket</th>
        <th class="text-center" style="white-space:nowrap;">Total Pagu (Rp)</th>

        <th class="text-center">KT</th>
        <th class="text-center">KS</th>
        <th class="text-center">B</th>
        <th class="text-center">J</th>

        <th class="text-center">Belum</th>
        <th class="text-center">Pokja</th>
        <th class="text-center">SKPA</th>
        <th class="text-center">Selesai</th>

        <th class="text-center" style="white-space:nowrap;">KT</th>
        <th class="text-center" style="white-space:nowrap;">KS</th>
        <th class="text-center" style="white-space:nowrap;">B</th>
        <th class="text-center" style="white-space:nowrap;">J</th>

        <th class="text-center">KT</th>
        <th class="text-center">KS</th>
        <th class="text-center">B</th>
        <th class="text-center">J</th>

        <th class="text-center">KT</th>
        <th class="text-center">KS</th>
        <th class="text-center">B</th>
        <th class="text-center">J</th>

        <th class="text-center">KT</th>
        <th class="text-center">KS</th>
        <th class="text-center">B</th>
        <th class="text-center">J</th>
      </tr>
    </thead>
    <tbody>
      <tr class="text-bold">
        <td colspan="2" class="text-center" style="vertical-align:middle">Jumlah</td>
        <td class="text-center" width="150" style="vertical-align:middle">
          <?php
          $result = $total[0]->tpaket - $total[0]->total_selisih_lelang;
          if($result == 0){
            $result = '';
          }elseif($result > 0){
            $result = '<b class="text-danger">['.$result.'] </b>';
          }elseif($result < 0){
            $result = '<b class="text-danger">('.$result.') </b>';
          }
          echo $result . $total[0]->tpaket;
          ?>
        </td>
        <td class="text-right" style="vertical-align:middle"><?php echo number_format($total[0]->tpagu) ?></td>

        <td class="text-center" style="vertical-align:middle">
          <?php
          $result = $total[0]->tpaket_non_tender - $total[0]->total_selisih_non_tender;
          if($result == 0){
            $result = '';
          }elseif($result > 0){
            $result = '<b class="text-danger">['.$result.'] </b>';
          }elseif($result < 0){
            $result = '<b class="text-danger">('.$result.') </b>';
          }
          echo $result . $total[0]->tpaket_non_tender;
          ?>
        </td>
        <td class="text-right" style="vertical-align:middle"><?php echo number_format($total[0]->tpagu_non_tender) ?></td>

        <td class="text-center"><?php echo $total[0]->tsp_kt ?></td>
        <td class="text-center"><?php echo $total[0]->tsp_ks ?></td>
        <td class="text-center"><?php echo $total[0]->tsp_b ?></td>
        <td class="text-center"><?php echo $total[0]->tsp_j ?></td>

        <td class="text-center"><?php echo $total[0]->review_belum ?></td>
        <td class="text-center"><?php echo $total[0]->review_pokja ?></td>
        <td class="text-center"><?php echo $total[0]->review_skpa ?></td>
        <td class="text-center"><?php echo $total[0]->review_selesai ?></td>

        <td class="text-center no-wrap">
          <?php
          $result1 = $total[0]->sbt_kt - $total[0]->sbt_selisih_kt;
          if($result1 == 0){
            $result1 = '';
          }elseif($result1 > 0){
            $result1 = '<b class="text-danger">['.$result1.'] </b>';
          }elseif($result1 < 0){
            $result1 = '<b class="text-danger">('.$result1.') </b>';
          }

          echo $result1 . $total[0]->sbt_kt;
          ?>
        </td>
        <td class="text-center no-wrap">
          <?php
          $result2 = $total[0]->sbt_ks - $total[0]->sbt_selisih_ks;
          if($result2 == 0){
            $result2 = '';
          }elseif($result2 > 0){
            $result2 = '<b class="text-danger">['.$result2.'] </b>';
          }elseif($result2 < 0){
            $result2 = '<b class="text-danger">('.$result2.') </b>';
          }

          echo $result2 . $total[0]->sbt_ks;
          ?>
        </td>
        <td class="text-center no-wrap">
          <?php
          $result3 = $total[0]->sbt_b - $total[0]->sbt_selisih_b;
          if($result3 == 0){
            $result3 = '';
          }elseif($result3 > 0){
            $result3 = '<b class="text-danger">['.$result3.'] </b>';
          }elseif($result3 < 0){
            $result3 = '<b class="text-danger">('.$result3.') </b>';
          }
          echo $result3 . $total[0]->sbt_b;
          ?>
        </td>
        <td class="text-center no-wrap">
          <?php
          $result4 = $total[0]->sbt_j - $total[0]->sbt_selisih_j;
          if($result4 == 0){
            $result4 = '';
          }elseif($result4 > 0){
            $result4 = '<b class="text-danger">['.$result4.'] </b>';
          }elseif($result4 < 0){
            $result4 = '<b class="text-danger">('.$result4.') </b>';
          }
          echo $result4 . $total[0]->sbt_j;
          ?>
        </td>

        <td class="text-center no-wrap">
          <?php
          $result1 = $total[0]->st_kt - $total[0]->st_selisih_kt;
          if($result1 == 0){
            $result1 = '';
          }elseif($result1 > 0){
            $result1 = '<b class="text-danger">['.$result1.'] </b>';
          }elseif($result1 < 0){
            $result1 = '<b class="text-danger">('.$result1.') </b>';
          }

          echo $result1 . $total[0]->st_kt;
          ?>
        </td>
        <td class="text-center no-wrap">
          <?php
          $result2 = $total[0]->st_ks - $total[0]->st_selisih_ks;
          if($result2 == 0){
            $result2 = '';
          }elseif($result2 > 0){
            $result2 = '<b class="text-danger">['.$result2.'] </b>';
          }elseif($result2 < 0){
            $result2 = '<b class="text-danger">('.$result2.') </b>';
          }
          echo $result2 . $total[0]->st_ks;
          ?>
        </td>
        <td class="text-center no-wrap">
          <?php
          $result3 = $total[0]->st_b - $total[0]->st_selisih_b;
          if($result3 == 0){
            $result3 = '';
          }elseif($result3 > 0){
            $result3 = '<b class="text-danger">['.$result3.'] </b>';
          }elseif($result3 < 0){
            $result3 = '<b class="text-danger">('.$result3.') </b>';
          }
          echo $result3 . $total[0]->st_b;
          ?>
        </td>
        <td class="text-center no-wrap">
          <?php
          $result4 = $total[0]->st_j - $total[0]->st_selisih_j;
          if($result4 == 0){
            $result4 = '';
          }elseif($result4 > 0){
            $result4 = '<b class="text-danger">['.$result4.'] </b>';
          }elseif($result4 < 0){
            $result4 = '<b class="text-danger">('.$result4.') </b>';
          }
          echo $result4 . $total[0]->st_j;
          ?>
        </td>

        <?php
        $result1 = $total[0]->sup_kt - $total[0]->sup_selisih_kt;
        if($result1 == 0){
          $result1 = '';
        }elseif($result1 > 0){
          $result1 = '<b class="text-danger">['.$result1.'] </b>';
        }elseif($result1 < 0){
          $result1 = '<b class="text-danger">('.$result1.') </b>';
        }
        $result2 = $total[0]->sup_ks - $total[0]->sup_selisih_ks;
        if($result2 == 0){
          $result2 = '';
        }elseif($result2 > 0){
          $result2 = '<b class="text-danger">['.$result2.'] </b>';
        }elseif($result2 < 0){
          $result2 = '<b class="text-danger">('.$result2.') </b>';
        }
        $result3 = $total[0]->sup_b - $total[0]->sup_selisih_b;
        if($result3 == 0){
          $result3 = '';
        }elseif($result3 > 0){
          $result3 = '<b class="text-danger">['.$result3.'] </b>';
        }elseif($result3 < 0){
          $result3 = '<b class="text-danger">('.$result3.') </b>';
        }
        $result4 = $total[0]->sup_j - $total[0]->sup_selisih_j;
        if($result4 == 0){
          $result4 = '';
        }elseif($result4 > 0){
          $result4 = '<b class="text-danger">['.$result4.'] </b>';
        }elseif($result4 < 0){
          $result4 = '<b class="text-danger">('.$result4.') </b>';
        }
        ?>

        <td class="text-center no-wrap"><?php echo $result1 . $total[0]->sup_kt ?></td>
        <td class="text-center no-wrap"><?php echo $result2 . $total[0]->sup_ks ?></td>
        <td class="text-center no-wrap"><?php echo $result3 . $total[0]->sup_b ?></td>
        <td class="text-center no-wrap"><?php echo $result4 . $total[0]->sup_j ?></td>

        <td class="text-center"><?php echo $total[0]->pb_kt ?></td>
        <td class="text-center"><?php echo $total[0]->pb_ks ?></td>
        <td class="text-center"><?php echo $total[0]->pb_b ?></td>
        <td class="text-center"><?php echo $total[0]->pb_j ?></td>
      </tr>

      <?php $i=0; foreach ($lap as $value) { $i++ ?>
        <tr style="">
          <td><?php echo $i ?></td>
          <td class="text-uppercase"><?php echo $value->singkatan ?></td>

            <?php
            $result = $value->tpaket - $value->tselisih_lelang;
            if($result == 0){
              $result = '';
            }elseif($result > 0){
              $result = '<b class="text-danger">['.$result.'] </b>';
            }elseif($result < 0){
              $result = '<b class="text-danger">('.$result.') </b>';
            }
            ?>

          <td class="text-center"><?php echo $result . $value->tpaket ?></td>
          <td class="text-right"><?php echo number_format($value->tpagu) ?></td>

          <?php
          $result = $value->tpaket_non_tender - $value->tselisih_non_tender;
          if($result == 0){
            $result = '';
          }elseif($result > 0){
            $result = '<b class="text-danger">['.$result.'] </b>';
          }elseif($result < 0){
            $result = '<b class="text-danger">('.$result.') </b>';
          }
          ?>

          <td class="text-center"><?php echo $result . $value->tpaket_non_tender ?></td>
          <td class="text-right"><?php echo number_format($value->tpagu_non_tender) ?></td>

          <td class="text-center"><?php echo $value->sp_kt ?></td>
          <td class="text-center"><?php echo $value->sp_ks ?></td>
          <td class="text-center"><?php echo $value->sp_b ?></td>
          <td class="text-center"><?php echo $value->sp_j ?></td>

          <td class="text-center"><?php echo $value->review_belum ?></td>
          <td class="text-center"><?php echo $value->review_pokja ?></td>
          <td class="text-center"><?php echo $value->review_skpa ?></td>
          <td class="text-center"><?php echo $value->review_selesai ?></td>

          <td class="text-center no-wrap">
            <?php
            $result1 = $value->bt_kt - $value->bt_selisih_kt;
            if($result1 == 0){
              $result1 = '';
            }elseif($result1 > 0){
              $result1 = '<b class="text-danger">['.$result1.'] </b>';
            }elseif($result1 < 0){
              $result1 = '<b class="text-danger">('.$result1.') </b>';
            }
            echo $result1 . $value->bt_kt;
            ?>
          </td>
          <td class="text-center no-wrap">
            <?php
            $result2 = $value->bt_ks - $value->bt_selisih_ks;
            if($result2 == 0){
              $result2 = '';
            }elseif($result2 > 0){
              $result2 = '<b class="text-danger">['.$result2.'] </b>';
            }elseif($result2 < 0){
              $result2 = '<b class="text-danger">('.$result2.') </b>';
            }
            echo $result2 . $value->bt_ks;
            ?>
          </td>
          <td class="text-center no-wrap">
            <?php
            $result3 = $value->bt_b - $value->bt_selisih_b;
            if($result3 == 0){
              $result3 = '';
            }elseif($result3 > 0){
              $result3 = '<b class="text-danger">['.$result3.'] </b>';
            }elseif($result3 < 0){
              $result3 = '<b class="text-danger">('.$result3.') </b>';
            }
            echo $result3 . $value->bt_b;
            ?>
          </td>
          <td class="text-center no-wrap">
            <?php
            $result4 = $value->bt_j - $value->bt_selisih_j;
            if($result4 == 0){
              $result4 = '';
            }elseif($result4 > 0){
              $result4 = '<b class="text-danger">['.$result4.'] </b>';
            }elseif($result4 < 0){
              $result4 = '<b class="text-danger">('.$result4.') </b>';
            }
            echo $result4 . $value->bt_j;
            ?>
          </td>

          <td class="text-center no-wrap">
            <?php
            $result1 = $value->t_kt - $value->t_selisih_kt;
            if($result1 == 0){
              $result1 = '';
            }elseif($result1 > 0){
              $result1 = '<b class="text-danger">['.$result1.'] </b>';
            }elseif($result1 < 0){
              $result1 = '<b class="text-danger">('.$result1.') </b>';
            }
            echo $result1 . $value->t_kt;
            ?>
          </td>
          <td class="text-center no-wrap">
            <?php
            $result2 = $value->t_ks - $value->t_selisih_ks;
            if($result2 == 0){
              $result2 = '';
            }elseif($result2 > 0){
              $result2 = '<b class="text-danger">['.$result2.'] </b>';
            }elseif($result2 < 0){
              $result2 = '<b class="text-danger">('.$result2.') </b>';
            }
            echo $result2 . $value->t_ks;
            ?>
          </td>
          <td class="text-center no-wrap">
            <?php
            $result3 = $value->t_b - $value->t_selisih_b;
            if($result3 == 0){
              $result3 = '';
            }elseif($result3 > 0){
              $result3 = '<b class="text-danger">['.$result3.'] </b>';
            }elseif($result3 < 0){
              $result3 = '<b class="text-danger">('.$result3.') </b>';
            }
            echo $result3 . $value->t_b;
            ?>
          </td>
          <td class="text-center no-wrap">
            <?php
            $result4 = $value->t_j - $value->t_selisih_j;
            if($result4 == 0){
              $result4 = '';
            }elseif($result4 > 0){
              $result4 = '<b class="text-danger">['.$result4.'] </b>';
            }elseif($result4 < 0){
              $result4 = '<b class="text-danger">('.$result4.') </b>';
            }
            echo $result4 . $value->t_j;
            ?>
          </td>

          <td class="text-center no-wrap">
            <?php
            $result1 = $value->m_kt - $value->m_selisih_kt;
            if($result1 == 0){
              $result1 = '';
            }elseif($result1 > 0){
              $result1 = '<b class="text-danger">['.$result1.'] </b>';
            }elseif($result1 < 0){
              $result1 = '<b class="text-danger">('.$result1.') </b>';
            }
            echo $result1 . $value->m_kt;
            ?>
          </td>
          <td class="text-center no-wrap">
            <?php
            $result2 = $value->m_ks - $value->m_selisih_ks;
            if($result2 == 0){
              $result2 = '';
            }elseif($result2 > 0){
              $result2 = '<b class="text-danger">['.$result2.'] </b>';
            }elseif($result2 < 0){
              $result2 = '<b class="text-danger">('.$result2.') </b>';
            }
            echo $result2 . $value->m_ks;
            ?>
          </td>
          <td class="text-center no-wrap">
            <?php
            $result3 = $value->m_b - $value->m_selisih_b;
            if($result3 == 0){
              $result3 = '';
            }elseif($result3 > 0){
              $result3 = '<b class="text-danger">['.$result3.'] </b>';
            }elseif($result3 < 0){
              $result3 = '<b class="text-danger">('.$result3.') </b>';
            }
            echo $result3 . $value->m_b;
            ?>
          </td>
          <td class="text-center no-wrap">
            <?php
            $result4 = $value->m_j - $value->m_selisih_j;
            if($result4 == 0){
              $result4 = '';
            }elseif($result4 > 0){
              $result4 = '<b class="text-danger">['.$result4.'] </b>';
            }elseif($result4 < 0){
              $result4 = '<b class="text-danger">('.$result4.') </b>';
            }
            echo $result4 . $value->m_j;
            ?>
          </td>
          <td class="text-center"><?php echo $value->b_kt ?></td>
          <td class="text-center"><?php echo $value->b_ks ?></td>
          <td class="text-center"><?php echo $value->b_b ?></td>
          <td class="text-center"><?php echo $value->b_j ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>

	<b class="text-small text-danger">
	[ ] = Tambah Paket Harian <br/>
	( ) = Berkurang Paket Harian
	</b>

</div>

<?php if(isset($_GET['type']) && $_GET['type'] == 'image'): ?>

  <input id="btn-Preview-Image" type="button" value="Preview"/>
  <a id="btn-Convert-Html2Image" href="#">Download</a>
  <br/>
  <div id="previewImage"></div>

<?php endif; ?>

<script>
$(document).ready(function(){

var element = $("#html-content-holder"); // global variable
var getCanvas; // global variable

$("#btn-Preview-Image").on('click', function () {
    html2canvas(element, {
    onrendered: function (canvas) {
        $("#previewImage").append(canvas);
           getCanvas = canvas;
        }
    });
});

$("#btn-Convert-Html2Image").on('click', function () {
    var imgageData = getCanvas.toDataURL("image/png");
    // Now browser starts downloading it instead of just showing it
    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
    $("#btn-Convert-Html2Image").attr("download", "your_pic_name.png").attr("href", newData);
});

});

</script>

<script src="../vendor/jsimage/html2canvas.js"></script>

</div>

</body>
</html>
