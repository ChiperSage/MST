<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Non_tender extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('non_tender_m');

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
		$array = array();
		$data['inc'] = 'nontender_table';
		$data['lelang'] = $this->non_tender_m->get();
		$this->load->view('admin/index', $data);
	}

	public function _copy_data()
	{
		$this->db->empty_table('tb_non_tender_bck');

		$str = "INSERT INTO tb_non_tender_bck
		(SELECT * FROM tb_non_tender WHERE kode_lelang)";
		$this->db->query($str);
	}

	public function create()
	{
		$this->_copy_data();

		$json = $this->db->get_where('json',array('data'=>'non_tender'))->row();

		$filename = $json->url;
		$year = $json->tahun;

		$test = file_get_contents($filename);
		$data = json_decode($test);

		$id_list = implode(",", array_map(function ($val) { return (int) $val->kode_lelang; }, $data));

		$connection = mysqli_connect("localhost","root","","monev");

		mysqli_query($connection, "DELETE FROM tb_non_tender WHERE kode_lelang NOT IN ($id_list) AND tahun = '$year'");

		mysqli_query($connection, "TRUNCATE TABLE tb_jadwal_non_tender");

		foreach ($data as $val)
		{
				$jadwal = (empty($val->jadwal)) ? '' : json_encode($val->jadwal);

				if(count($val->jadwal) != 0){
					$data_jadwal = $val->jadwal;
					foreach ($data_jadwal as $val_jadwal)
					{
						$sql1 = "INSERT INTO tb_jadwal_non_tender (kode_lelang,kode_rup,tahapan,tgl_mulai,tgl_selesai,keterangan)
						VALUES ('$val->kode_lelang','$val->kode_rup','$val_jadwal->tahapan','$val_jadwal->tgl_mulai','$val_jadwal->tgl_selesai','$val_jadwal->keterangan')";
						mysqli_query($connection, $sql1);
					}
				}

				$tahapan = '';
				$tgl_mulai = '';
				$tgl_selesai = '';
				$keterangan = '';
				if(count($val->jadwal)){
						$tahapan = $val->jadwal[0]->tahapan;
						$tgl_mulai = $val->jadwal[0]->tgl_mulai;
						$tgl_selesai = $val->jadwal[0]->tgl_selesai;
						$keterangan = $val->jadwal[0]->keterangan;
				}

		    $sql = "INSERT INTO tb_non_tender SET kode_lelang=?, kode_rup=?, nama_paket=?, pagu=?, hps=?, tahun=?, status_lelang=?,
				paket_status=?, ukpbj=?, tahapan=?, tgl_mulai=?, tgl_selesai=?, keterangan=?
		    ON DUPLICATE KEY UPDATE
				kode_rup=values(kode_rup), nama_paket=values(nama_paket), pagu=values(pagu),
				hps=values(hps),tahun=values(tahun),status_lelang=values(status_lelang),paket_status=values(paket_status),ukpbj=values(ukpbj),
				tahapan=values(tahapan),tgl_mulai=values(tgl_mulai),tgl_selesai=values(tgl_selesai),keterangan=values(keterangan)";
		    $stmt = mysqli_prepare($connection, $sql);

				mysqli_stmt_bind_param($stmt, "iisiisiisssss", $val->kode_lelang, $val->kode_rup,
				$val->nama_paket, $val->pagu, $val->hps, $val->tahun, $val->status_lelang, $val->paket_status, $val->ukpbj, $tahapan,
				$tgl_mulai, $tgl_selesai, $keterangan);
		        mysqli_stmt_execute($stmt);
		}

		$this->cari_pemenang();

		redirect('non_tender');
	}

	public function cari_pemenang()
	{
		$menang = $this->db->get_where('tb_non_tender',array())->result();
		foreach ($menang as $value) {

			$datetime1 = new DateTime( date('Y-m-d',strtotime($value->tgl_mulai)) );
			$tgl_sekarang = new DateTime( date('Y-m-d') );

			if(($datetime1 <= $tgl_sekarang) && $value->tgl_mulai !== NULL)
			{
				$key = array('kode_rup'=>$value->kode_rup,'status_lelang'=>1);
				$data['menang'] = 5;
				$this->db->update('tb_lelang',$data,$key);
			}else{
				$key = array('kode_rup'=>$value->kode_rup,'status_lelang'=>1);
				$data['menang'] = 0;
				$this->db->update('tb_lelang',$data,$key);
			}
		}
	}
}
