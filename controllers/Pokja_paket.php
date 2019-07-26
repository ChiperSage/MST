<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pokja_paket extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pokja_paket_m');

		$this->form_validation->set_error_delimiters(
			$this->config->item('error_start_delimiter', 'ion_auth'),
			$this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
		$this->load->library('pdfgenerator');

		if(!$this->ion_auth->logged_in() || !$this->ion_auth->in_group('pokja'))
		{
			redirect('auth/login', 'refresh');
		}
	}

	public function index()
	{
		$data['inc'] = 'pokja_paket';
		$data['paket'] = $this->pokja_paket_m->get_paket();
		$this->load->view('admin/index', $data);
	}

	public function review()
	{
		$data['inc'] = 'pokja_review';
		$data['review'] = $this->pokja_paket_m->get_paket_review();

		if(isset( $_GET['type'] ) && $_GET['type'] == 'image'){

			$this->load->view('admin/cetak_pokja_review', $data);

		}elseif(isset($_GET['type']) && $_GET['type'] == 'pdf'){

			$html = $this->load->view('admin/cetak_pokja_review', $data, true);
			$filename = 'cetak_pokja_history_'.time();
			$this->pdfgenerator->generate($html, $filename, true, 'legal', 'landscape');

		}else{

			$this->load->view('admin/index', $data);

		}
	}

	public function history()
	{
		$data['inc'] = 'pokja_history';
		$data['history'] = $this->pokja_paket_m->get_history();

		if(isset( $_GET['type'] ) && $_GET['type'] == 'image'){
			$this->load->view('admin/cetak_pokja_history', $data);
		}elseif(isset($_GET['type']) && $_GET['type'] == 'pdf'){
			$html = $this->load->view('admin/cetak_pokja_history', $data, true);
			$filename = 'cetak_pokja_history_'.time();
			$this->pdfgenerator->generate($html, $filename, true, 'legal', 'landscape');
		}else{
			$this->load->view('admin/index', $data);
		}
	}

	public function review_update()
	{
		$kode_rup = $this->input->post('kode_rup');
		$status = $this->input->post('status');
		$keterangan = $this->input->post('keterangan');

		// ubah status tb_review
		$data['tgl_review'] = date('Y-m-d');
		$data['status'] = $status;
		$this->db->update('tb_review', $data, array('kode_rup'=>$kode_rup));

		// insert ke tb_review_paket
		if($status == 0){
			$ket_status = 'review pokja';
		}elseif ($status == 1){
			$ket_status = 'review skpa';
		}elseif ($status == 2){
			$ket_status = 'review selesai';
		}elseif ($status == 5){
			$ket_status = 'review ulang';
		}

		$data['kode_rup'] = $kode_rup;
		$data['tgl_review'] = date('Y-m-d H:i:s');
		$data['status'] = $ket_status;
		$data['keterangan'] = $keterangan;
		$this->db->insert('tb_review_paket',$data);

		redirect('pokja_paket/review');
	}

	public function batal()
	{
		$this->pokja_paket_m->batal();
		redirect('pokja_paket');
	}

	public function ajax_setuju_batal($setuju = '')
	{
		$array = explode('-',$setuju);
		$data['nip'] = $array[0];
		$data['kode_rup'] = $array[1];
		$data['hapus'] = ($array[2] == 1) ? 0 : 1 ;
		$count = $this->db->get_where('tb_hapus',array('nip'=>$data['nip'],'kode_rup'=>$data['kode_rup']))->num_rows();
		if($count == 0){
			$this->db->insert('tb_hapus',$data);
		}else{
			$this->db->update('tb_hapus',$data,array('nip'=>$data['nip'],'kode_rup'=>$data['kode_rup']));
		}
	}
}
