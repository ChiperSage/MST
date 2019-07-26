<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tpd extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tpd_m');

		$this->form_validation->set_error_delimiters(
			$this->config->item('error_start_delimiter', 'ion_auth'),
			$this->config->item('error_end_delimiter', 'ion_auth')
		);

		$this->lang->load('auth');
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group('skpa'))
		{
			redirect('auth/login', 'refresh');
		}
	}

	public function index()
	{
		$data['inc'] = 'tpd_table';
		$data['tpd'] = $this->tpd_m->get();
		$this->load->view('admin/index', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('kode_rup','Kode RUP','trim|required|is_unique[tb_tpd.kode_rup]');
		$this->form_validation->set_rules('nama_pabung','Nama PABUNG','trim|required');
		$this->form_validation->set_rules('nilai_hps','Nilai HPS','trim|required');
		$this->form_validation->set_rules('pengelola_teknis_kegiatan','PTK','trim|required');

		if($this->form_validation->run() == false)
		{
			$data['inc'] = 'tpd_form';
			$data['list_rup'] = $this->tpd_m->list_rup();
			$this->load->view('admin/index', $data);
		}else{
			$this->tpd_m->create();
			redirect('tpd');
		}
	}

	public function update($id = 0)
	{
		$this->form_validation->set_rules('kode_rup','Kode RUP','trim|required');
		$this->form_validation->set_rules('nama_pabung','Nama PABUNG','trim|required');
		$this->form_validation->set_rules('nilai_hps','Nilai HPS','trim|required');
		$this->form_validation->set_rules('pengelola_teknis_kegiatan','PTK','trim|required');

		if($this->form_validation->run() == false)
		{
			$data['inc'] = 'tpd_form';
			$data['list_rup'] = $this->tpd_m->list_rup();
			$data['detail'] = $this->tpd_m->get_detail($id);
			$this->load->view('admin/index', $data);
		}else{
			$this->tpd_m->update($id);
			redirect('tpd');
		}
	}

	// ajax
	public function tampilpaket($kode_rup)
	{
		$str = "SELECT r.*,l.hps from tb_rup r
		LEFT JOIN tb_lelang l ON r.kode_rup = l.kode_rup
		WHERE r.kode_rup = $kode_rup";
		$data = $this->db->query($str)->row();
		// $data = $this->db->get_where('tb_rup',array('kode_rup'=>$kode_rup))->row();
		echo json_encode($data);
	}

	public function delete($kode_rup = 0)
	{
		$this->tpd_m->delete($kode_rup);
		redirect('tpd');
	}
}
