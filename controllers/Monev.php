<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monev extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model(array('monev_m','monev_perhari_m','advokasi_m','monev_pokja_m'));

		$this->form_validation->set_error_delimiters(
			$this->config->item('error_start_delimiter', 'ion_auth'),
			$this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
		$this->load->library(array('pdfgenerator'));

		$group = array('monev','karo','kabagpp','barang_jasa','konstruksi','staff_monev');
		if(!$this->ion_auth->logged_in() || !$this->ion_auth->in_group($group))
		{
			redirect('auth/login', 'refresh');
		}
	}

	public function _level($group = 'monev')
	{
		if(!$this->ion_auth->logged_in() || !$this->ion_auth->in_group($group))
		{
			redirect('auth/login', 'refresh');
		}
	}

	public function index()
	{
		$data['inc'] = 'home';
		$this->load->view('admin/index',$data);
	}

	public function paketbatal($id = 0)
	{
		$data['inc'] = 'monev_paketbatal';
		$data['paket'] = $this->monev_m->get_paketbatal();
		$this->load->view('admin/index', $data);
	}

	public function view_rup()
	{
		$data['inc'] = 'monev_view_rup';
		$data['total'] = $this->monev_m->view_jenis_pengadaan_total();
		$data['barang'] = $this->monev_m->view_jenis_pengadaan('barang');
		$data['jasa'] = $this->monev_m->view_jenis_pengadaan('jasa lainnya');
		$data['konstruksi'] = $this->monev_m->view_jenis_pengadaan('pekerjaan konstruksi');
		$data['konsultansi'] = $this->monev_m->view_jenis_pengadaan('jasa konsultansi');
		$this->load->view('admin/index',$data);
	}

	public function view_rup_skpa()
	{
		$data['inc'] = 'monev_view_rup_skpa';
		$data['total'] = $this->monev_m->view_persatker_rup_total();
		$data['laporan'] = $this->monev_m->view_persatker_rup();

		if(isset( $_GET['type'] ) && $_GET['type'] == 'pdf'){
			$this->load->view('admin/cetak_rup_skpa', $data);
		}elseif( isset( $_GET['type'] ) && $_GET['type'] == 'excel' ){
			$this->load->view('admin/monev_rup_skpa_excel', $data);
		}else{
			$this->load->view('admin/index', $data);
		}
	}

	public function tender_per_skpa()
	{
		$data['inc'] = 'monev_lelang_skpa';
		$data['total'] = $this->monev_m->view_persatker_rup_total();
		$data['laporan'] = $this->monev_m->view_persatker_rup();

		if(isset( $_GET['type'] ) && $_GET['type'] == 'pdf'){
			$this->load->view('admin/cetak_rup_skpa', $data);
		}elseif( isset( $_GET['type'] ) && $_GET['type'] == 'excel' ){
			$this->load->view('admin/monev_rup_skpa_excel', $data);
		}else{
			$this->load->view('admin/index', $data);
		}
	}

	public function view_realisasi_data_lelang_sp_cetak()
	{
		$data['inc'] = 'monev_view_realisasi_data_lelang_sp';
		$data['total'] = $this->monev_m->get_total();
		// $data['subtotal'] = $this->monev_m->get_subtotal();
		$data['lap'] = $this->monev_m->get_laporan();
		$this->load->view('admin/index',$data);
	}

	public function laporan_bps()
	{
		$data['inc'] = 'monev_laporan_bps';
		$data['rekap1'] = $this->monev_m->rekap_jenis_pengadaan1();
		$data['rekap2'] = $this->monev_m->rekap_jenis_pengadaan2();

		if(isset( $_GET['type'] ) && $_GET['type'] == 'pdf'){
			$this->load->view('admin/monev_laporan_bps_ctk', $data);
		}else{
			$this->load->view('admin/index', $data);
		}
	}

	public function paket_review()
	{
		$data['inc'] = 'monev_paket_review';
		$data['review'] = $this->monev_m->get_paket_review();
		$this->load->view('admin/index', $data);
	}

	public function history_review()
	{
		$data['inc'] = 'monev_history_review';
		$data['history'] = $this->monev_m->get_history();

		if(isset( $_GET['type'] ) && $_GET['type'] == 'image'){
			$this->load->view('admin/cetak_pokja_history', $data);
		}elseif(isset($_GET['type']) && $_GET['type'] == 'pdf2'){
			$this->load->view('admin/monev_history_cetak2', $data);
		}elseif(isset($_GET['type']) && $_GET['type'] == 'pdf'){
			$this->load->view('admin/monev_history_cetak', $data);
		}else{
			$this->load->view('admin/index', $data);
		}
	}

	public function advokasi()
	{
		$this->load->library('pdfgenerator');

		$data['inc'] = 'monev_advokasi';
		$data['advokasi'] = $this->advokasi_m->get(array());

		if(isset($_GET['cetak']) && $_GET['cetak'] == 'pdf')
		{
			$html = $this->load->view('admin/monev_advokasi_cetak', $data, true);
			$filename = 'cetak_advokasi_'.time();
			$this->pdfgenerator->generate($html, $filename, true, 'legal', 'landscape');
		}else{
			$this->load->view('admin/index', $data);
		}
	}

	// realisasi perhari
	public function realisasi_data_tender_perhari()
	{
		$data['inc'] = 'monev_realisasi_data_tender_perhari';
		$data['total'] = $this->monev_perhari_m->get_total();
		$data['lap'] = $this->monev_perhari_m->get_laporan();

		if(isset($_GET['type']) && $_GET['type'] == 'pdf')
		{
			$this->load->view('admin/monev_realisasi_tender_perhari_cetak', $data);
		}elseif(isset($_GET['type']) && $_GET['type'] == 'image'){
			$this->load->view('admin/monev_realisasi_tender_perhari_cetak', $data, false);
		}else{
			$this->load->view('admin/index', $data);
		}
	}

	public function realisasi_data_non_tender_perhari()
	{
		$data['inc'] = 'monev_realisasi_data_non_tender_perhari';
		$data['total'] = $this->monev_perhari_m->get_total_non_tender();
		$data['lap'] = $this->monev_perhari_m->get_laporan_non_tender();

		if(isset($_GET['type']) && $_GET['type'] == 'pdf')
		{
			$this->load->view('admin/monev_realisasi_non_tender_perhari_cetak', $data);
		}elseif(isset($_GET['type']) && $_GET['type'] == 'image'){
			$this->load->view('admin/monev_realisasi_non_tender_perhari_cetak', $data, false);
		}else{
			$this->load->view('admin/index', $data);
		}
	}

	// realisasi SP
	public function realisasi_data_tender()
	{
		$data['inc'] = 'monev_realisasi_data_tender';
		$data['total'] = $this->monev_m->get_total();
		$data['lap'] = $this->monev_m->get_laporan();

		if(isset($_GET['type']) && $_GET['type'] == 'pdf'){
				$this->load->view('admin/cetak_tender', $data);
		}elseif(isset($_GET['type']) && $_GET['type'] == 'image'){
				$this->load->view('admin/cetak_tender', $data, false);
		}else{
				$this->load->view('admin/index',$data);
		}
	}

	public function realisasi_data_non_tender()
	{
		$data['inc'] = 'monev_realisasi_data_non_tender';
		$data['total'] = $this->monev_m->get_total_non_tender();
		$data['lap'] = $this->monev_m->get_laporan_non_tender();

		if(isset($_GET['type']) && $_GET['type'] == 'pdf'){
				$this->load->view('admin/cetak_tender', $data);
		}elseif(isset($_GET['type']) && $_GET['type'] == 'image'){
				$this->load->view('admin/cetak_tender', $data, false);
		}else{
				$this->load->view('admin/index',$data);
		}
	}

	public function realisasi_data_tender_sp()
	{
		$data['inc'] = 'monev_realisasi_data_tender_sp';

		$data['total'] = $this->monev_m->get_total();
		$data['lap'] = $this->monev_m->get_laporan();

		if(isset($_GET['type']) && $_GET['type'] == 'pdf'){
				$this->load->view('admin/cetak_tender_sp', $data);
		}elseif(isset($_GET['type']) && $_GET['type'] == 'pdf2'){
				$this->load->view('admin/cetak_tender_sp2', $data);
		}elseif(isset($_GET['type']) && $_GET['type'] == 'image'){
				$this->load->view('admin/cetak_tender_sp', $data, false);
		}elseif(isset($_GET['type']) && $_GET['type'] == 'image2'){
			$this->load->view('admin/cetak_tender_sp2', $data);
		}else{
				$this->load->view('admin/index',$data);
		}
	}

	public function realisasi_data_non_tender_sp()
	{
		$data['inc'] = 'monev_realisasi_data_non_tender_sp';
		$data['total'] = $this->monev_m->get_total_non_tender();
		$data['lap'] = $this->monev_m->get_laporan_non_tender();

		if(isset($_GET['type']) && $_GET['type'] == 'pdf'){
				$this->load->view('admin/cetak_non_tender_sp', $data);
		}elseif(isset($_GET['type']) && $_GET['type'] == 'image'){
				$this->load->view('admin/cetak_non_tender_sp', $data, false);
		}else{
				$this->load->view('admin/index',$data);
		}
	}

	public function format_wa()
	{
		// $data['inc'] = 'monev_realisasi_data_tender_lap';
		$data['inc'] = 'monev_format_wa';
		$data['total'] = $this->monev_perhari_m->get_format_wa_total();
		$data['lap'] = $this->monev_perhari_m->get_format_wa_laporan();

		if(isset($_GET['type']) && $_GET['type'] == 'pdf')
		{
			$html = $this->load->view('admin/monev_realisasi_tender_perhari_cetak', $data, true);
			$filename = 'cetak_realisasi_tender_'.time();
			$this->pdfgenerator->generate($html, $filename, true, 'legal', 'landscape');
		}elseif(isset($_GET['type']) && $_GET['type'] == 'image'){
			$this->load->view('admin/monev_realisasi_tender_perhari_cetak', $data, false);
		}else{
			$this->load->view('admin/index', $data);
		}
	}

	public function realisasi_data_tender_lap()
	{
		$data['inc'] = 'monev_realisasi_data_tender_lap';
		$data['total'] = $this->monev_perhari_m->get_total_simple();
		$data['lap'] = $this->monev_perhari_m->get_laporan_simple();

		if(isset($_GET['type']) && $_GET['type'] == 'pdf')
		{
			$html = $this->load->view('admin/monev_realisasi_tender_perhari_cetak', $data, true);
			$filename = 'cetak_realisasi_tender_'.time();
			$this->pdfgenerator->generate($html, $filename, true, 'legal', 'landscape');
		}elseif(isset($_GET['type']) && $_GET['type'] == 'image'){
			$this->load->view('admin/monev_realisasi_tender_perhari_cetak', $data, false);
		}else{
			$this->load->view('admin/index', $data);
		}
	}

	// list pokja
	public function pokja_satu()
	{
		$data['inc'] = 'monev_view_pokja';
		$data['total'] = $this->monev_pokja_m->get_total();
		$data['lap'] = $this->monev_pokja_m->get_laporan();

		if(isset($_GET['type']) && $_GET['type'] == 'pdf'){
			$this->load->view('admin/monev_view_pokja_ctk', $data);
		}elseif(isset($_GET['type']) && $_GET['type'] == 'image'){
			$this->load->view('admin/monev_view_pokja_ctk', $data);
		}else{
			$this->load->view('admin/index', $data);
		}
	}

	public function pokja_dua()
	{
		$data['inc'] = 'monev_skpa_pokja';
		$data['lap'] = $this->monev_pokja_m->get_skpa_pokja();
		$this->load->view('admin/index', $data);
	}

	public function view_pokja_popup($param = '')
	{
		$data['list_paket'] = $this->monev_pokja_m->get_detail_paket($param);
		$this->load->view('admin/monev_view_pokja_popup', $data);
	}

	public function ajax_detail_jadwal($kode_rup = '')
	{
		$data['list_jadwal'] = $this->monev_pokja_m->get_detail_jadwal($kode_rup);
		$this->load->view('admin/monev_view_ajax_jadwal', $data);
	}

	// daftar paket
	public function daftar_paket($var = 'masuk')
	{
		$data['inc'] = 'monev_daftar_paket';
		$data['paket'] = $this->monev_m->get_daftar_paket($var);

		$this->load->view('admin/index',$data);
	}

	// sp belum tayang
	public function daftar_paket_sp_bt()
	{
		$data['inc'] = 'monev_daftar_paket_sp_bt';
		$data['paket'] = $this->monev_m->get_daftar_paket_sp_bt();

		if(isset($_GET['type']) && $_GET['type'] == 'excel'){
			$this->load->view('admin/monev_daftar_paket_sp_bt_ctk', $data);
			// }elseif(isset($_GET['type']) && $_GET['type'] == 'image'){
			// $this->load->view('admin/monev_data_review_ctk', $data);
		}else{
			$this->load->view('admin/index', $data);
		}
	}

	public function daftar_paket_batal()
	{
		$data['inc'] = 'monev_daftar_paket';
		$data['paket'] = $this->monev_m->get_daftar_paket_batal();
		$this->load->view('admin/index',$data);
	}

	public function data_review($var = 'belum')
	{
		$data['inc'] = 'monev_data_review';
		$data['data_review'] = $this->monev_m->get_data_review($var);

		if(isset($_GET['type']) && $_GET['type'] == 'pdf'){
			$this->load->view('admin/monev_data_review_ctk', $data);
		}elseif(isset($_GET['type']) && $_GET['type'] == 'image'){
			$this->load->view('admin/monev_data_review_ctk', $data);
		}else{
			$this->load->view('admin/index', $data);
		}
	}

	public function ajax_detail_paket_pokja($param = '')
	{
		$data['list_paket'] = $this->monev_pokja_m->get_detail_paket($param);
		$this->load->view('admin/monev_ajax_detail_paket', $data);
	}

	public function ajax_detail_paket($param = '')
	{
		$data['list_paket'] = $this->monev_m->get_detail_paket($param);
		$this->load->view('admin/monev_ajax_detail_paket', $data);
	}

}
