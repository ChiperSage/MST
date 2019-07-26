<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Advokasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('advokasi_m');

		$this->form_validation->set_error_delimiters(
			$this->config->item('error_start_delimiter', 'ion_auth'),
			$this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');

		$this->load->library('pdfgenerator');

		if(!$this->ion_auth->logged_in() || !$this->ion_auth->in_group('advokasi'))
		{
			redirect('auth/login', 'refresh');
		}
	}

	public function index()
	{
		$array = array();
		$data['inc'] = 'advokasi_table';
		$data['advokasi'] = $this->advokasi_m->get($array);
		$this->load->view('admin/index', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('paket','Paket','trim|required');

		if($this->form_validation->run() == false)
		{
			$data['inc'] = 'advokasi_form';
			$data['paket_list'] = $this->advokasi_m->get_paket();
			$this->load->view('admin/index', $data);
		}else{
			$this->advokasi_m->create();
			redirect('advokasi');
		}
	}

	public function update($id = 0)
	{
		$this->form_validation->set_rules('paket','Paket','trim|required');

		if($this->form_validation->run() == false)
		{
			$data['inc'] = 'advokasi_form';
			$data['paket_list'] = $this->advokasi_m->get_paket();
			$data['detail'] = $this->advokasi_m->get_detail(array('advokasi_id' => $id));
			$this->load->view('admin/index', $data);
		}else{
			$this->advokasi_m->update($id);
			redirect('advokasi');
		}
	}

	public function delete($id = 0)
	{
		$this->advokasi_m->delete($id);
		redirect('advokasi');
	}

	public function cetak()
	{
		$array = array();
		$data['advokasi'] = $this->advokasi_m->get($array);
		//
		$html = $this->load->view('admin/advokasi_cetak', $data, true);
		$filename = 'cetak_advokasi_'.time();
		$this->pdfgenerator->generate($html, $filename, true, 'legal', 'landscape');
	}
}
