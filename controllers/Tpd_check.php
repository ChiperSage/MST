<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

class Tpd_check extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tpd_m');

		$this->form_validation->set_error_delimiters(
			$this->config->item('error_start_delimiter', 'ion_auth'),
			$this->config->item('error_end_delimiter', 'ion_auth')
		);

		$this->lang->load('auth');
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group('tpd'))
		{
			redirect('auth/login', 'refresh');
		}
	}

	public function index()
	{
		$data['inc'] = 'tpd_home';

		$data['tbarang'] = $this->tpd_m->count_jenis_pengadaan('Barang');
		$data['tjasa'] = $this->tpd_m->count_jenis_pengadaan('Jasa Lainnya');
		$data['tkonsultansi'] = $this->tpd_m->count_jenis_pengadaan('Jasa Konsultansi');
		$data['tkonstruksi'] = $this->tpd_m->count_jenis_pengadaan('Pekerjaan Konstruksi');

		$data['tpd'] = $this->tpd_m->tpd_get();

		$this->load->view('admin/index', $data);
	}

	public function jenis($jenis_pengadaan = '')
	{
		$data['inc'] = 'tpd_home';

		$data['tbarang'] = $this->tpd_m->count_jenis_pengadaan('Barang');
		$data['tjasa'] = $this->tpd_m->count_jenis_pengadaan('Jasa Lainnya');
		$data['tkonsultansi'] = $this->tpd_m->count_jenis_pengadaan('Jasa Konsultansi');
		$data['tkonstruksi'] = $this->tpd_m->count_jenis_pengadaan('Pekerjaan Konstruksi');

		$jenis = str_replace('_',' ',$jenis_pengadaan);
		$data['tpd'] = $this->tpd_m->tpd_get($jenis);

		$this->load->view('admin/index', $data);
	}

	public function update($kode_rup = 0)
	{
		$jenis = $this->db->get_where('tb_tpd',array('kode_rup'=>$kode_rup))->row();
		$form = strtolower(str_replace(' ','_',$jenis->jenis_pengadaan));

		if(file_exists(APPPATH . 'views/admin/tpd_'.$form.'.php')){
			$data['inc'] = 'tpd_'.$form;
		}

		$data['detail'] = $this->tpd_m->tpd_detail($kode_rup);
		$this->load->view('admin/index', $data);
	}

	public function ajax_update($kode_rup = 0, $colval = '')
	{
		$jenis = $this->db->get_where('tb_tpd',array('kode_rup'=>$kode_rup))->row();
		if($jenis->jenis_pengadaan == 'Barang'){
			$tb = 'tb_tpd_barang';
		}elseif ($jenis->jenis_pengadaan == 'Jasa Lainnya') {
			$tb = 'tb_tpd_jasa';
		}elseif ($jenis->jenis_pengadaan == 'Pekerjaan Konstruksi') {
			$tb = 'tb_tpd_konstruksi';
		}elseif ($jenis->jenis_pengadaan == 'Jasa Konsultansi') {
			$tb = 'tb_tpd_konsultansi';
		}

		$split = explode('-',$colval);
		$col = $split[0];

		if(is_numeric($split[1]) == true){
			if($split[1] == 0){
				$val = 1;
			}elseif($split[1] == 1){
				$val = 0;
			}elseif ($split[1] > 1) {
				$val = $split[1];
			}
		}else{
			$val = str_replace('%20',' ',$split[1]);
		}

		$filter = array('kode_rup'=>$kode_rup);
		$count = $this->db->get_where($tb,$filter)->num_rows();
		if($count == 1){
			$data[$col] = $val;
			$this->db->update($tb,$data,$filter);
		}else{
			$data['kode_rup'] = $kode_rup;
			$data['tanggal'] = date('Y-m-d');
			$data['id_petugas'] = $this->session->userdata('user_id');
			$data[$col] = $val;
			$this->db->insert($tb,$data);
		}
	}

	public function berita()
	{
		$data['list_skpa'] = $this->tpd_m->list_skpa();

		$data['inc'] = 'tpd_berita';
		$this->load->view('admin/index', $data);
	}

	// print berita acara
	public function berita_acara()
	{
		if(isset($_GET['tanggal']) && isset($_GET['skpa']))
		{
			$tanggal 	= $_GET['tanggal'];
			$skpa 		= $_GET['skpa'];
		}

		$str = "SELECT a.kode_rup, a.nama_paket, a.jenis_pengadaan, a.nilai_pagu, a.nilai_hps, a.nama_pabung, a.nama_skpa,
				COALESCE(concat(f.first_name,' ',f.last_name),concat(g.first_name,' ',g.last_name),concat(h.first_name,' ',h.last_name),concat(i.first_name,' ',i.last_name)) as petugas
				FROM tb_tpd a
				LEFT JOIN tb_tpd_barang b ON a.kode_rup = b.kode_rup
				LEFT JOIN tb_tpd_jasa c ON a.kode_rup = c.kode_rup
				LEFT JOIN tb_tpd_konstruksi d ON a.kode_rup = d.kode_rup
				LEFT JOIN tb_tpd_konsultansi e ON a.kode_rup = e.kode_rup
				LEFT JOIN users f ON b.id_petugas = f.id
				LEFT JOIN users g ON c.id_petugas = g.id
				LEFT JOIN users h ON d.id_petugas = h.id
				LEFT JOIN users i ON e.id_petugas = i.id
				WHERE a.tanggal = '$tanggal' AND a.id_satker = '$skpa' AND c.kelengkapan = 1 OR b.kelengkapan = 1 OR d.kelengkapan = 1 OR e.kelengkapan = 1
				GROUP BY a.kode_rup";

		$data['berita'] = $this->db->query($str)->result();
		$this->load->view('admin/tpd_cetak_berita', $data);
	}

	public function cetak2($kode_rup = 0)
	{
		$jenis = $this->db->get_where('tb_tpd',array('kode_rup'=>$kode_rup))->row();
		$form = strtolower(str_replace(' ', '_', $jenis->jenis_pengadaan));

		if(file_exists(APPPATH . 'views/admin/tpd_'.$form.'.php')){
			$file = 'tpd_cetak_'.$form;
		}

		$data['tpd'] = $this->tpd_m->tpd_detail($kode_rup);
		$content = $this->load->view('admin/'.$file, $data, false);

		// try {
    // 		ob_start();
		// 		$content = ob_get_clean();
		//     $html2pdf = new Html2Pdf('P', 'A4', 'en');
		//     $html2pdf->writeHTML($content);
		//     $html2pdf->output();
		// } catch (Html2PdfException $e) {
		//     $html2pdf->clean();
		//     $formatter = new ExceptionFormatter($e);
		//     echo $formatter->getHtmlMessage();
		// }
	}
}
