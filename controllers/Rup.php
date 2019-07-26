<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rup extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('rup_m');
		$this->load->library('Rup_lib');

		$this->form_validation->set_error_delimiters(
			$this->config->item('error_start_delimiter', 'ion_auth'),
			$this->config->item('error_end_delimiter', 'ion_auth')
		);

		$this->lang->load('auth');

		$groups = array('admin','monev');
		if(!$this->ion_auth->logged_in() || !$this->ion_auth->in_group($groups))
		{
			redirect('auth/login', 'refresh');
		}
	}

	public function index($page = 0)
	{
		$data['first_url'] = '';
		$data['suffix'] = '';

		if(isset($_GET['search']))
		{
			$data['first_url'] = base_url().'rup/index/0/?search='.$_GET['search'];
			$data['suffix'] = '/?search='.$_GET['search'];

			$config['search'] = $_GET['search'];
		}

		$config['page'] = $page;
		$rup = $this->rup_m->get($config);

		$data['base_url'] = base_url('rup/index');
		$data['total_rows'] = $rup['count'];
		$data['per_page'] = 20;
		$data['uri_segment'] = 3;

		$data['inc'] = 'rup_table';
		$data['rup'] = $rup['result'];
		$this->load->view('admin/index', $data);
	}

	public function create()
	{
		$json = $this->db->get_where('json',array('data'=>'rup'))->row();
		$filename = $json->url;
		$year = $json->tahun;

		$test = file_get_contents($filename);
		$data = json_decode($test);

		// cek koneksi json dulu
		$response = get_headers($filename);
		if($response[0] === 'HTTP/1.1 200 OK') {
			echo 'konek';
		}else{
			echo 'tidak konek';
			exit;
		}

		$id_list = implode(",", array_map(function ($val) { return (int) $val->kode_rup; },$data));
		$connection = mysqli_connect("localhost","root","","monev");
		mysqli_query($connection, "DELETE FROM tb_rup WHERE kode_rup NOT IN ($id_list) AND akhir_pekerjaan='$year'");

		foreach ($data as $val)
		{
		    $sql = "INSERT INTO tb_rup SET tanggal_terakhir_di_update=?, kode_kldi=?, id_satker=?, kode_satker_asli=?, jenis=?, kldi=?,
							kode_rup=?, nama_satker=?, nama_paket=?, program=?, kode_string_program=?, kegiatan=?, kode_string_kegiatan=?, volume=?, pagu_rup=?, mak=?,
							lokasi=?, detail_lokasi=?, sumber_dana=?, metode_pemilihan=?, jenis_pengadaan=?, pagu_perjenis_pengadaan=?, awal_pengadaan=?,
							akhir_pengadaan=?, awal_pekerjaan=?, akhir_pekerjaan=?, tanggal_kebutuhan=?, spesifikasi=?, id_swakelola=?, nama_kpa=?, penyedia_didalam_swakelola=?,
							tkdn=?, pradipa=?, status_aktif=?, status_umumkan=?, id_client=?
		            ON DUPLICATE KEY UPDATE
								tanggal_terakhir_di_update=values(tanggal_terakhir_di_update), kode_kldi=values(kode_kldi), id_satker=values(id_satker), kode_satker_asli=values(kode_satker_asli), jenis=values(jenis), kldi=values(kldi),
									nama_satker=values(nama_satker),nama_paket=values(nama_paket),program=values(program),kode_string_program=values(kode_string_program),kegiatan=values(kegiatan),kode_string_kegiatan=values(kode_string_kegiatan),volume=values(volume),pagu_rup=values(pagu_rup),
									mak=values(mak),lokasi=values(lokasi),detail_lokasi=values(detail_lokasi),sumber_dana=values(sumber_dana),metode_pemilihan=values(metode_pemilihan),jenis_pengadaan=values(jenis_pengadaan),pagu_perjenis_pengadaan=values(pagu_perjenis_pengadaan),awal_pengadaan=values(awal_pengadaan),
									akhir_pengadaan=values(akhir_pengadaan),awal_pekerjaan=values(awal_pekerjaan),akhir_pekerjaan=values(akhir_pekerjaan),tanggal_kebutuhan=values(tanggal_kebutuhan),spesifikasi=values(spesifikasi),id_swakelola=values(id_swakelola),nama_kpa=values(nama_kpa),penyedia_didalam_swakelola=values(penyedia_didalam_swakelola),
									tkdn=values(tkdn),pradipa=values(pradipa),status_aktif=values(status_aktif),status_umumkan=values(status_umumkan),id_client=values(id_client)";
		    $stmt = mysqli_prepare($connection, $sql);

			mysqli_stmt_bind_param($stmt, "isisssisssssssissssssissssssssssssss", $val->tanggal_terakhir_di_update, $val->kode_kldi, $val->id_satker, $val->kode_satker_asli, $val->jenis, $val->kldi,
					$val->kode_rup, $val->nama_satker, $val->nama_paket, $val->program, $val->kode_string_program, $val->kegiatan, $val->kode_string_kegiatan, $val->volume, $val->pagu_rup,
					$val->mak, $val->lokasi, $val->detail_lokasi, $val->sumber_dana, $val->metode_pemilihan, $val->jenis_pengadaan, $val->pagu_perjenis_pengadaan, $val->awal_pengadaan,
					$val->akhir_pengadaan, $val->awal_pekerjaan, $val->akhir_pekerjaan, $val->tanggal_kebutuhan, $val->spesifikasi, $val->id_swakelola, $val->nama_kpa, $val->penyedia_didalam_swakelola,
					$val->tkdn, $val->pradipa, $val->status_aktif, $val->status_umumkan, $val->id_client);
		  $array = mysqli_stmt_execute($stmt);
			// $array[] = $stmt;
		}
		redirect('rup');
	}

	public function createx()
	{
		$this->form_validation->set_rules('nama_paket','Nama Paket','trim|required');

		if($this->form_validation->run() == false)
		{
			$data['inc'] = 'rup_form';
			$this->load->view('admin/index', $data);
		}else{
			$this->rup_m->create();
			redirect('rup');
		}
	}

	public function updatex($id = 0)
	{
		$this->form_validation->set_rules('nama_paket','Nama Paket','trim|required');

		if($this->form_validation->run() == false)
		{
			$data['inc'] = 'rup_form';
			$data['rup_detail'] = $this->rup_m->get_detail(array('id' => $id));
			$this->load->view('admin/index', $data);
		}else{
			$this->rup_m->update($id);
			redirect('rup');
		}
	}

	public function deletex($id = 0)
	{
		$this->rup_m->delete($id);
		redirect('rup');
	}
}
