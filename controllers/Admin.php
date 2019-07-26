<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_m');
		// $this->load->database();
		// $this->load->library(array('ion_auth','form_validation'));
		// $this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters(
			$this->config->item('error_start_delimiter', 'ion_auth'),
			$this->config->item('error_end_delimiter', 'ion_auth')
		);

		$this->lang->load('auth');
		if(!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
	}

	public function index()
	{
		$this->data['inc'] = 'home';
		$this->load->view('admin/index',$this->data);
	}

	public function laporan()
	{
		$this->data['inc'] = 'admin_laporan';
		$this->data['lap'] = $this->admin_m->get_laporan();
		$this->load->view('admin/index',$this->data);
	}

	public function grafik()
	{
		$this->data['inc'] = 'admin_grafik';
		$this->load->view('admin/index',$this->data);
	}

}
