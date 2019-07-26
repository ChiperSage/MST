<?php
$menu_admin = $this->ion_auth->in_group('admin');
$menu_tpd = $this->ion_auth->in_group('tpd');
$menu_skpa = $this->ion_auth->in_group('skpa');

$menu_pokja = $this->ion_auth->in_group('pokja');
$menu_barangjasa = $this->ion_auth->in_group('barang_jasa');
$menu_jasalain = $this->ion_auth->in_group('jasa_lain');
$menu_konstruksi = $this->ion_auth->in_group('konstruksi');
$menu_konsultansi = $this->ion_auth->in_group('konsultansi');

$menu_advokasi = $this->ion_auth->in_group('advokasi');
$menu_karo = $this->ion_auth->in_group('karo');
$menu_kabagpp = $this->ion_auth->in_group('kabagpp');
$menu_monev = $this->ion_auth->in_group('monev');
$menu_staf = $this->ion_auth->in_group('staff_monev');
$menu_adminkaro = $this->ion_auth->in_group('admin_karo');
?>

<ul class="sidebar-menu" data-widget="tree">
<li class="header">All Menu</li>
<?php if($menu_admin == 1){ ?>
<li class="treeview active">
  <a href="#">
    <i class="fa fa-folder"></i> <span>Admin</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php echo base_url('rup') ?>"><i class="fa fa-briefcase"></i> RUP</a></li>
    <li><a href="<?php echo base_url('skpa') ?>"><i class="fa fa-user"></i> SKPA</a></li>
    <li><a href="<?php echo base_url('json') ?>"><i class="fa fa-server"></i> JSON</a></li>
    <li><a href="<?php echo base_url('user') ?>"><i class="fa fa-key"></i> User</a></li>
  </ul>
</li>
<li class="treeview">
  <a href="#">
    <i class="fa fa-folder"></i> <span>Data</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php echo base_url('data_perusahaan') ?>"><i class="fa fa-file"></i> Perusahaan</a></li>
    <li><a href="<?php echo base_url('data_skt') ?>"><i class="fa fa-file"></i> SKT/SKA</a></li>
    <li><a href="<?php echo base_url('data_skp') ?>"><i class="fa fa-file"></i> SKP</a></li>
    <li><a href="<?php echo base_url('data_skn') ?>"><i class="fa fa-file"></i> SKN</a></li>
  </ul>
</li>
<?php }elseif($menu_skpa == 1){ ?>
  <li class="treeview active">
    <a href="#">
      <i class="fa fa-folder"></i> <span>SKPA</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo base_url('tpd') ?>"><i class="fa fa-file"></i> Paket</a></li>
    </ul>
  </li>
<?php }elseif($menu_tpd == 1){ ?>
  <li class="treeview active">
    <a href="#">
      <i class="fa fa-folder"></i> <span>TPD</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo base_url('tpd_check') ?>"><i class="fa fa-file-o"></i> Semua</a></li>
      <li><a href="<?php echo base_url('tpd_check/jenis/barang') ?>"><i class="fa fa-file-o"></i> Barang Jasa <?php //echo (!empty($tbarang)) ? '('.$tbarang.')' : '' ; ?></a></li>
      <li><a href="<?php echo base_url('tpd_check/jenis/jasa_lainnya') ?>"><i class="fa fa-file-o"></i> Jasa Lain</a></li>
      <li><a href="<?php echo base_url('tpd_check/jenis/pekerjaan_konstruksi') ?>"><i class="fa fa-file-o"></i> Konstruksi</a></li>
      <li><a href="<?php echo base_url('tpd_check/jenis/jasa_konsultansi') ?>"><i class="fa fa-file-o"></i> Konsultansi</a></li>
      <li><a href="<?php echo base_url('tpd_check/berita') ?>"><i class="fa fa-file"></i> Berita Acara</a></li>
    </ul>
  </li>
<?php }elseif($menu_pokja == 1){ ?>
<li class="treeview active">
  <a href="#">
    <i class="fa fa-folder"></i> <span>POKJA</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php echo base_url('pokja_paket') ?>"><i class="fa fa-file"></i> Paket</a></li>
    <li><a href="<?php echo base_url('pokja_paket/review') ?>"><i class="fa fa-file"></i> Review Paket</a></li>
    <li><a href="<?php echo base_url('pokja_paket/history') ?>"><i class="fa fa-file"></i> History Review</a></li>
    <li><a href="<?php echo base_url('perusahaan') ?>"><i class="fa fa-file"></i> Perusahaan</a></li>
    <li><a href="<?php echo base_url('regulasi') ?>"><i class="fa fa-upload"></i> File Regulasi</a></li>
    <li><a href="<?php echo base_url('skt') ?>"><i class="fa fa-file"></i> SKT/SKA</a></li>
    <li><a href="<?php echo base_url('skp') ?>"><i class="fa fa-file"></i> SKP</a></li>
    <li><a href="<?php echo base_url('skn') ?>"><i class="fa fa-file"></i> SKN</a></li>
  </ul>
</li>
<?php }elseif($menu_barangjasa == 1){ ?>
<li class="treeview active">
  <a href="#">
    <i class="fa fa-folder"></i> <span>Barang Jasa</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php echo base_url('barangjasa/paket') ?>"><i class="fa fa-industry"></i> Paket (View)</a></li>
    <li><a href="<?php echo base_url('barangjasa/advokasi') ?>"><i class="fa fa-legal"></i> Advokasi (View)</a></li>
    <li><a href="<?php echo base_url('monev/view_realisasi_data_lelang_sp') ?>"><i class="fa fa-legal"></i> Realisasi Data Tender SP</a></li>
    <li><a href="<?php echo base_url('regulasi') ?>"><i class="fa fa-upload"></i> File Regulasi</a></li>
    <li><a href="<?php echo base_url('barangjasa/grafik') ?>"><i class="fa fa-bar-chart-o"></i> Grafik</a></li>
    <li><a href="<?php echo base_url('monev/history_review') ?>"><i class="fa fa-bar-chart-o"></i> History Review</a></li>
  </ul>
</li>
<?php }elseif($menu_jasalain == 1){ ?>
<li class="treeview">
  <a href="#">
    <i class="fa fa-folder"></i> <span>Jasa Lain</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php echo base_url('jasalain/paket') ?>"><i class="fa fa-file-o"></i> Paket (View)</a></li>
    <li><a href="<?php echo base_url('jasalain/advokasi') ?>"><i class="fa fa-file-o"></i> Advokasi (View)</a></li>
    <li><a href="<?php echo base_url('laporan') ?>"><i class="fa fa-print"></i> Laporan (Pokja)</a></li>
    <li><a href="<?php echo base_url('jasalain/grafik') ?>"><i class="fa fa-bar-chart-o"></i> Grafik</a></li>
  </ul>
</li>
<?php }elseif($menu_konstruksi == 1){ ?>
<li class="treeview active">
  <a href="#">
    <i class="fa fa-folder"></i> <span>Konstruksi</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php echo base_url('konstruksi/paket') ?>"><i class="fa fa-industry"></i> Paket (View)</a></li>
    <li><a href="<?php echo base_url('konstruksi/advokasi') ?>"><i class="fa fa-legal"></i> Advokasi (View)</a></li>
    <li><a href="<?php echo base_url('monev/view_realisasi_data_lelang_sp') ?>"><i class="fa fa-legal"></i> Realisasi Data Tender SP</a></li>
    <li><a href="<?php echo base_url('regulasi') ?>"><i class="fa fa-upload"></i> File Regulasi</a></li>
    <li><a href="<?php echo base_url('konstruksi/grafik') ?>"><i class="fa fa-bar-chart-o"></i> Grafik</a></li>
    <li><a href="<?php echo base_url('monev/history_review') ?>"><i class="fa fa-bar-chart-o"></i> History Review</a></li>
  </ul>
</li>
<li class="treeview active">
  <a href="#">
    <i class="fa fa-folder"></i> <span>VIEW</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php echo base_url('monev/view_rup') ?>"><i class="fa fa-tv"></i> RUP</a></li>
    <li><a href="<?php echo base_url('monev/view_realisasi_data_lelang_sp') ?>"><i class="fa fa-tv"></i> Realisasi Data Tender SP</a></li>
  </ul>
</li>
<?php }elseif($menu_konsultansi == 1){ ?>
<li class="treeview">
  <a href="#">
    <i class="fa fa-folder"></i> <span>Konsultansi</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php echo base_url('konsultansi/paket') ?>"><i class="fa fa-file-o"></i> Paket</a></li>
    <li><a href="<?php echo base_url('konsultansi/advokasi') ?>"><i class="fa fa-file-o"></i> Advokasi (View)</a></li>
    <li><a href="<?php echo base_url('laporan') ?>"><i class="fa fa-print"></i> Laporan (Pokja)</a></li>
    <li><a href="<?php echo base_url('konsultansi/grafik') ?>"><i class="fa fa-bar-chart-o"></i> Grafik</a></li>
  </ul>
</li>
<?php }elseif($menu_advokasi == 1){ ?>
<li class="treeview active">
  <a href="#">
    <i class="fa fa-folder"></i> <span>Advokasi</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php echo base_url('advokasi') ?>"><i class="fa fa-file-o"></i> Data Advokasi</a></li>
  </ul>
</li>
<?php }elseif($menu_staf == 1){ ?>
  <li class="treeview active">
    <a href="#">
      <i class="fa fa-folder"></i> <span>VIEW</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo base_url('monev/realisasi_data_tender_perhari') ?>"><i class="fa fa-tv"></i> Realisasi Data Tender Harian</a></li>
    </ul>
  </li>
<?php }elseif($menu_monev == 1){ ?>
<li class="treeview active">
  <a href="#">
    <i class="fa fa-folder"></i> <span>MONEV</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php echo base_url('info') ?>"><i class="fa fa-tv"></i> Informasi</a></li>
  </ul>
</li>
<li class="treeview active">
  <a href="#">
    <i class="fa fa-folder"></i> <span>DATA SINKRON</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php echo base_url('rup') ?>"><i class="fa fa-briefcase"></i> RUP</a></li>
    <li><a href="<?php echo base_url('lelang') ?>"><i class="fa fa-briefcase"></i> LELANG</a></li>
    <li><a href="<?php echo base_url('non_tender') ?>"><i class="fa fa-briefcase"></i> Non Tender</a></li>
  </ul>
</li>
<li class="treeview active">
  <a href="#">
    <i class="fa fa-folder"></i> <span>APBN</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php echo base_url('rup_apbn') ?>"><i class="fa fa-briefcase"></i> Input RUP</a></li>
    <li><a href="<?php echo base_url('monev_apbn') ?>"><i class="fa fa-briefcase"></i> R. Data Tender APBN</a></li>
  </ul>
</li>
<li class="treeview active">
  <a href="#">
    <i class="fa fa-folder"></i> <span>View RUP</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php echo base_url('monev/view_rup') ?>"><i class="fa fa-tv"></i> RUP</a></li>
    <li><a href="<?php echo base_url('monev/view_rup_skpa') ?>"><i class="fa fa-tv"></i> RUP Per SKPA</a></li>
    <li><a href="<?php echo base_url('monev/view_rup') ?>"><i class="fa fa-map"></i> Sebaran Paket</a></li>
  </ul>
  <a href="#">
    <i class="fa fa-folder"></i> <span>Total Paket</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php echo base_url('monev/tender_per_skpa') ?>"><i class="fa fa-tv"></i> Tender Per SKPA</a></li>
  </ul>
  <a href="#">
    <i class="fa fa-folder"></i> <span>View Tender</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php echo base_url('monev/realisasi_data_tender') ?>"><i class="fa fa-tv"></i>R. Data Tender</a></li>
    <li><a href="<?php echo base_url('monev/realisasi_data_tender_sp') ?>"><i class="fa fa-tv"></i>R. Data Tender SP</a></li>
    <li><a href="<?php echo base_url('monev/realisasi_data_tender_perhari') ?>"><i class="fa fa-tv"></i> R. Data Tender Harian</a></li>
  </ul>
  <a href="#">
    <i class="fa fa-folder"></i> <span>View Non Tender</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php echo base_url('monev/realisasi_data_non_tender') ?>"><i class="fa fa-tv"></i>R. Data Non Tender</a></li>
    <li><a href="<?php echo base_url('monev/realisasi_data_non_tender_sp') ?>"><i class="fa fa-tv"></i>R. Data Non Tender SP</a></li>
    <li><a href="<?php echo base_url('monev/realisasi_data_non_tender_perhari') ?>"><i class="fa fa-tv"></i> R. Data Non Tender Harian</a></li>
  </ul>
  <a href="#">
    <i class="fa fa-folder"></i> <span>Laporan Lainnya</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php echo base_url('monev/format_wa') ?>"><i class="fa fa-tv"></i> Realisasi Format WA</a></li>
    <li><a href="<?php echo base_url('monev/laporan_bps') ?>"><i class="fa fa-file"></i> Laporan BPS</a></li>
    <li><a href="<?php echo base_url('monev/pokja_satu') ?>"><i class="fa fa-tv"></i> POKJA 1</a></li>
    <li><a href="<?php echo base_url('monev/pokja_dua') ?>"><i class="fa fa-tv"></i> POKJA 2</a></li>
    <li><a href="<?php echo base_url('monev/advokasi') ?>"><i class="fa fa-tv"></i> Advokasi Hukum</a></li>
  </ul>

</li>
<li class="treeview active">
  <a href="#">
    <i class="fa fa-folder"></i> <span>DAFTAR PAKET</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php echo base_url('monev/daftar_paket/masuk') ?>"><i class="fa fa-bar-chart"></i> Paket Masuk</a></li>
    <li><a href="<?php echo base_url('monev/daftar_paket/belum_tayang') ?>"><i class="fa fa-bar-chart"></i> Paket Belum Tayang</a></li>
    <li><a href="<?php echo base_url('monev/daftar_paket_sp_bt') ?>"><i class="fa fa-bar-chart"></i> Belum Tayang (Telah SP)</a></li>
    <li><a href="<?php echo base_url('monev/daftar_paket/tayang') ?>"><i class="fa fa-bar-chart"></i> Paket Tayang</a></li>
    <li><a href="<?php echo base_url('monev/daftar_paket/umum_pemenang') ?>"><i class="fa fa-bar-chart"></i> Paket Umum Pemenang</a></li>
    <li><a href="<?php echo base_url('monev/daftar_paket_batal') ?>"><i class="fa fa-bar-chart"></i> Paket Batal</a></li>
    <li><a href="<?php echo base_url('monev/daftar_paket/tender_ulang') ?>"><i class="fa fa-bar-chart"></i> Paket Tender Ulang</a></li>
    <li><a href="<?php echo base_url('monev/paket_review') ?>"><i class="fa fa-bar-chart"></i> Paket Review</a></li>
    <li><a href="<?php echo base_url('monev/history_review') ?>"><i class="fa fa-bar-chart"></i> History Review</a></li>
  </ul>
</li>
<li class="treeview active">
  <a href="#">
    <i class="fa fa-folder"></i> <span>DATA REVIEW</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php echo base_url('monev/data_review/belum') ?>"><i class="fa fa-file"></i> Belum</a></li>
    <li><a href="<?php echo base_url('monev/data_review/pokja') ?>"><i class="fa fa-file"></i> POKJA</a></li>
    <li><a href="<?php echo base_url('monev/data_review/skpa') ?>"><i class="fa fa-file"></i> SKPA</a></li>
    <li><a href="<?php echo base_url('monev/data_review/selesai') ?>"><i class="fa fa-file"></i> Selesai</a></li>
  </ul>
</li>
<?php }elseif($menu_kabagpp == 1){ ?>
<li class="treeview active">
  <a href="#">
    <i class="fa fa-folder"></i> <span>KABAG PP</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php echo base_url('pokja') ?>"><i class="fa fa-user"></i> Data Pokja</a></li>
    <li><a href="<?php echo base_url('adminkaro/pokja_penerima') ?>"><i class="fa fa-user"></i> Pokja Penerima</a></li>
    <li><a href="<?php echo base_url('kabagpp/paketbatal') ?>"><i class="fa fa-file-o"></i> Paket SP Batal</a></li>
    <li><a href="<?php echo base_url('monev/history_review') ?>"><i class="fa fa-bar-chart"></i> History Review</a></li>
    <li><a href="<?php echo base_url('monev/view_realisasi_data_lelang_sp') ?>"><i class="fa fa-legal"></i> Realisasi Data Tender SP</a></li>
  </ul>
  <li class="treeview active">
    <a href="#">
      <i class="fa fa-folder"></i> <span>VIEW</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo base_url('monev/view_rup') ?>"><i class="fa fa-tv"></i> RUP</a></li>
      <li><a href="<?php echo base_url('monev/view_realisasi_data_lelang_sp') ?>"><i class="fa fa-tv"></i> Realisasi Data Tender SP</a></li>
    </ul>
  </li>
  <li class="treeview active">
    <a href="#">
      <i class="fa fa-folder"></i> <span>DAFTAR PAKET</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo base_url('monev/daftar_paket/masuk') ?>"><i class="fa fa-bar-chart"></i> Paket Masuk</a></li>
      <li><a href="<?php echo base_url('monev/daftar_paket/belum_tayang') ?>"><i class="fa fa-bar-chart"></i> Paket Belum Tayang</a></li>
      <li><a href="<?php echo base_url('monev/daftar_paket/tayang') ?>"><i class="fa fa-bar-chart"></i> Paket Tayang</a></li>
      <li><a href="<?php echo base_url('monev/daftar_paket/umum_pemenang') ?>"><i class="fa fa-bar-chart"></i> Paket Umum Pemenang</a></li>
      <li><a href="<?php echo base_url('monev/daftar_paket_batal') ?>"><i class="fa fa-bar-chart"></i> Paket Batal</a></li>
      <li><a href="<?php echo base_url('monev/daftar_paket/tender_ulang') ?>"><i class="fa fa-bar-chart"></i> Paket Tender Ulang</a></li>
      <li><a href="<?php echo base_url('monev/history_review') ?>"><i class="fa fa-bar-chart"></i> History Review</a></li>
    </ul>
  </li>
</li>
<?php }elseif($menu_karo == 1){ ?>
<li class="treeview active">
  <a href="#">
    <i class="fa fa-folder"></i> <span>KARO</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php echo base_url('sp') ?>"><i class="fa fa-pencil"></i> Data SP</a></li>
    <li><a href="<?php echo base_url('karo/sp') ?>"><i class="fa fa-pencil"></i> SP Konfirm</a></li>
    <li><a href="<?php echo base_url('karo/paketbatal') ?>"><i class="fa fa-file-o"></i> Paket SP Batal</a></li>
    <li><a href="<?php echo base_url('adminkaro/pokja_daftar') ?>"><i class="fa fa-user"></i> Daftar Pokja</a></li>
    <li><a href="<?php echo base_url('adminkaro/pokja_penerima') ?>"><i class="fa fa-user"></i> Pokja Penerima</a></li>
  </ul>

  <!-- new menu -->
  <li class="treeview active">
    <a href="#">
      <i class="fa fa-folder"></i> <span>View RUP</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo base_url('monev/view_rup') ?>"><i class="fa fa-tv"></i> RUP</a></li>
      <li><a href="<?php echo base_url('monev/view_rup_skpa') ?>"><i class="fa fa-tv"></i> RUP Per SKPA</a></li>
      <li><a href="<?php echo base_url('monev/view_rup') ?>"><i class="fa fa-map"></i> Sebaran Paket</a></li>
    </ul>
    <a href="#">
      <i class="fa fa-folder"></i> <span>View Tender</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo base_url('monev/realisasi_data_tender') ?>"><i class="fa fa-tv"></i>R. Data Tender</a></li>
      <li><a href="<?php echo base_url('monev/realisasi_data_tender_sp') ?>"><i class="fa fa-tv"></i>R. Data Tender SP</a></li>
      <li><a href="<?php echo base_url('monev/realisasi_data_tender_perhari') ?>"><i class="fa fa-tv"></i> R. Data Tender Harian</a></li>
    </ul>
    <a href="#">
      <i class="fa fa-folder"></i> <span>View Non Tender</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo base_url('monev/realisasi_data_non_tender') ?>"><i class="fa fa-tv"></i>R. Data Non Tender</a></li>
      <li><a href="<?php echo base_url('monev/realisasi_data_non_tender_sp') ?>"><i class="fa fa-tv"></i>R. Data Non Tender SP</a></li>
      <li><a href="<?php echo base_url('monev/realisasi_data_non_tender_perhari') ?>"><i class="fa fa-tv"></i> R. Data Non Tender Harian</a></li>
    </ul>

  </li>

  <!-- <li class="treeview active">
    <a href="#">
      <i class="fa fa-folder"></i> <span>VIEW</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo base_url('monev/view_rup') ?>"><i class="fa fa-tv"></i> View RUP</a></li>
      <li><a href="<?php echo base_url('monev/view_realisasi_data_lelang') ?>"><i class="fa fa-tv"></i> Realisasi Data Tender</a></li>
      <li><a href="<?php echo base_url('monev/view_realisasi_data_lelang_sp') ?>"><i class="fa fa-tv"></i> Realisasi Data Tender SP</a></li>
      <li><a href="<?php echo base_url('monev/realisasi_data_tender_perhari') ?>"><i class="fa fa-tv"></i> Realisasi Data Tender Harian</a></li>
    </ul>
  </li> -->

  <li class="treeview active">
    <a href="#">
      <i class="fa fa-folder"></i> <span>DAFTAR PAKET</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo base_url('monev/daftar_paket/masuk') ?>"><i class="fa fa-bar-chart"></i> Paket Masuk</a></li>
      <li><a href="<?php echo base_url('monev/daftar_paket/belum_tayang') ?>"><i class="fa fa-bar-chart"></i> Paket Belum Tayang</a></li>
      <li><a href="<?php echo base_url('monev/daftar_paket/tayang') ?>"><i class="fa fa-bar-chart"></i> Paket Tayang</a></li>
      <li><a href="<?php echo base_url('monev/daftar_paket/umum_pemenang') ?>"><i class="fa fa-bar-chart"></i> Paket Umum Pemenang</a></li>
      <li><a href="<?php echo base_url('monev/daftar_paket/batal') ?>"><i class="fa fa-bar-chart"></i> Paket Batal</a></li>
      <li><a href="<?php echo base_url('monev/daftar_paket/tender_ulang') ?>"><i class="fa fa-bar-chart"></i> Paket Tender Ulang</a></li>
      <li><a href="<?php echo base_url('monev/history_review') ?>"><i class="fa fa-bar-chart"></i> History Review</a></li>
    </ul>
  </li>
  <li class="treeview active">
    <a href="#">
      <i class="fa fa-folder"></i> <span>DATA REVIEW</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo base_url('monev/data_review/belum') ?>"><i class="fa fa-file"></i> Belum</a></li>
      <li><a href="<?php echo base_url('monev/data_review/pokja') ?>"><i class="fa fa-file"></i> POKJA</a></li>
      <li><a href="<?php echo base_url('monev/data_review/skpa') ?>"><i class="fa fa-file"></i> SKPA</a></li>
      <li><a href="<?php echo base_url('monev/data_review/selesai') ?>"><i class="fa fa-file"></i> Selesai</a></li>
    </ul>
  </li>
</li>
<?php }elseif($menu_adminkaro == 1){ ?>
<li class="treeview active">
  <a href="#">
    <i class="fa fa-folder"></i> <span>Admin Karo</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php echo base_url('sp') ?>"><i class="fa fa-file"></i> SP</a></li>
    <li><a href="<?php echo base_url('sp/paketbatal') ?>"><i class="fa fa-refresh"></i> Paket SP Batal</a></li>
    <li><a href="<?php echo base_url('adminkaro/pokja_daftar') ?>"><i class="fa fa-user"></i> Daftar Pokja</a></li>
    <li><a href="<?php echo base_url('adminkaro/pokja_penerima') ?>"><i class="fa fa-user"></i> Pokja Penerima</a></li>
  </ul>
</li>
<?php } ?>
<li>

</li>

</ul>
