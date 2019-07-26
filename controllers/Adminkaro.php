<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminkaro extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
    $this->load->model(array('adminkaro_m'));

		$this->form_validation->set_error_delimiters(
      $this->config->item('error_start_delimiter', 'ion_auth'),
      $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');

		$groups = array('admin_karo','karo','kabagpp');
		if(!$this->ion_auth->logged_in() || !$this->ion_auth->in_group($groups))
		{
			redirect('auth/login', 'refresh');
		}
	}

  public function index()
	{
			$data['inc'] = 'home';
			$this->load->view('admin/index',$data);
	}

	public function pokja_daftar()
	{
		$data['inc'] = 'Adminkaro_pokja_daftar';
		$data['pokja'] = $this->adminkaro_m->get_pokja_daftar();
		$this->load->view('admin/index',$data);
	}

	public function pokja_penerima()
	{
		$data['inc'] = 'Adminkaro_pokja_penerima';
		$data['pokja'] = $this->adminkaro_m->get_pokja_penerima();
		$this->load->view('admin/index',$data);
	}
}
