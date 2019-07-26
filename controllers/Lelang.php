<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lelang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('lelang_m');

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
		$data['inc'] = 'lelang_table';
		$data['lelang'] = $this->lelang_m->get();
		$this->load->view('admin/index', $data);
	}

	public function _copy_data()
	{
		$this->db->empty_table('tb_lelang_bck');

		$str = "INSERT INTO tb_lelang_bck
		(SELECT * FROM tb_lelang WHERE kode_lelang)";
		$this->db->query($str);
	}

	public function create()
	{
		$this->_copy_data();

		$json = $this->db->get_where('json',array('data'=>'lelang'))->row();

		// $filename = 'lelang2.json';
		// $year = '2019';

		$filename = $json->url;
		$year = $json->tahun;

		$test = file_get_contents($filename);
		$data = json_decode($test);

		$id_list = implode(",", array_map(function ($val) { return (int) $val->kode_lelang; }, $data));

		$connection = mysqli_connect("localhost","root","","monev");

		mysqli_query($connection, "DELETE FROM tb_lelang WHERE kode_lelang NOT IN ($id_list) AND tahun = '$year'");
		mysqli_query($connection, "TRUNCATE TABLE tb_jadwal");

		foreach ($data as $val)
		{
				$jadwal = (empty($val->jadwal)) ? '' : json_encode($val->jadwal) ;
				if(count($val->jadwal) != 0){
					$data_jadwal = $val->jadwal;
					foreach ($data_jadwal as $val_jadwal)
					{
						$sql1 = "INSERT INTO tb_jadwal (kode_lelang,kode_rup,tahapan,tgl_mulai,tgl_selesai,keterangan)
						VALUES ('$val->kode_lelang','$val->kode_rup','$val_jadwal->tahapan','$val_jadwal->tgl_mulai','$val_jadwal->tgl_selesai','$val_jadwal->keterangan')";
						mysqli_query($connection, $sql1);
					}
				}

		    $sql = "INSERT INTO tb_lelang SET kode_lelang=?, kode_rup=?, nama_paket=?, pagu=?, hps=?, tahun=?, status_lelang=?, paket_status=?, ukpbj=?
		    ON DUPLICATE KEY UPDATE
				kode_rup=values(kode_rup), nama_paket=values(nama_paket), pagu=values(pagu),
				hps=values(hps),tahun=values(tahun),status_lelang=values(status_lelang),paket_status=values(paket_status),ukpbj=values(ukpbj)";
		    $stmt = mysqli_prepare($connection, $sql);

				mysqli_stmt_bind_param($stmt, "iisiisiis", $val->kode_lelang, $val->kode_rup, $val->nama_paket, $val->pagu, $val->hps, $val->tahun,
					$val->status_lelang, $val->paket_status, $val->ukpbj);
		    mysqli_stmt_execute($stmt);
		}

		$this->cari_pemenang();

		// insert ke tb_lelang_new filter rup
		mysqli_query($connection, "TRUNCATE TABLE tb_lelang_new");
		mysqli_query($connection, "INSERT IGNORE INTO tb_lelang_new (SELECT * FROM tb_lelang WHERE (status_lelang = 0 OR status_lelang = 1) ORDER BY kode_lelang DESC)");

		$this->update_status_aktif();

		redirect('lelang');
	}

	public function update_status_aktif()
	{
		// mengupdate status aktif
		$str = "UPDATE tb_lelang l
		LEFT JOIN tb_rup r ON l.kode_rup = r.kode_rup
		SET l.status_aktif = 'aktif'
		WHERE (l.status_lelang = 1 AND l.menang = 5 AND r.sumber_dana != 'APBN')
		OR (l.status_lelang = 1 AND l.menang = 0 AND r.sumber_dana != 'APBN')";
		$this->db->query($str);

		// mengupdate status balikkan (non aktif)
		$str = "UPDATE tb_lelang SET status_aktif = 'non aktif'
		WHERE status_lelang != 1 AND kode_rup IN
		(SELECT kode_rup FROM (SELECT l.* FROM tb_lelang l WHERE (l.status_lelang = 1 AND l.paket_status = 1 AND l.menang = 0)
		OR (l.status_lelang = 1 AND l.paket_status = 1 AND l.menang = 5) AND l.status_aktif = 'aktif') as tb_temp)";
		$this->db->query($str);

		// mengupdate status non aktif
		$str = "UPDATE tb_lelang l SET l.status_aktif = 'non aktif'
		WHERE l.status_aktif != 'aktif' AND l.kode_rup IN
		(SELECT kode_rup FROM (SELECT * FROM tb_lelang WHERE status_aktif = 'aktif') as tb_temp)";
		$this->db->query($str);

		// mengupdate status default
		$str = "UPDATE tb_lelang l SET l.status_aktif = ''
		WHERE l.status_aktif != 'aktif' AND l.kode_rup NOT IN
		(SELECT kode_rup FROM (SELECT * FROM tb_lelang WHERE status_aktif = 'aktif') as tb_temp)";
		$this->db->query($str);
	}

	// public function create2()
	// {
	// 	$this->_copy_data();
	//
	// 	$json = $this->db->get_where('json',array('data'=>'lelang'))->row();
	//
	// 	$year = '2019';
	// 	// $filename = $json->url;
	//
	// 	$filename = 'lelang2.json';
	// 	// $year = $json->tahun;
	//
	// 	$test = file_get_contents($filename);
	// 	$data = json_decode($test);
	//
	// 	$id_list = implode(",", array_map(function ($val) { return (int) $val->kode_lelang; }, $data));
	//
	// 	$connection = mysqli_connect("localhost","root","","monev");
	//
	// 	mysqli_query($connection, "DELETE FROM tb_lelang2 WHERE kode_lelang NOT IN ($id_list) AND tahun = '$year'");
	//
	// 	foreach ($data as $val)
	// 	{
	// 			$jadwal = (empty($val->jadwal)) ? '' : json_encode($val->jadwal) ;
	//
	// 			$tahapan = '';
	// 			$tgl_mulai = '';
	// 			$tgl_selesai = '';
	// 			$keterangan = '';
	//
	// 			$tahapan1 = '';
	// 			$tgl_mulai1 = '';
	// 			$tgl_selesai1 = '';
	// 			$keterangan1 = '';
	//
	// 			if(count($val->jadwal) == 2)
	// 			{
	// 					$tahapan = $val->jadwal[0]->tahapan;
	// 					$tgl_mulai = $val->jadwal[0]->tgl_mulai;
	// 					$tgl_selesai = $val->jadwal[0]->tgl_selesai;
	// 					$keterangan = $val->jadwal[0]->keterangan;
	//
	// 					$tahapan1 = $val->jadwal[1]->tahapan;
	// 					$tgl_mulai1 = $val->jadwal[1]->tgl_mulai;
	// 					$tgl_selesai1 = $val->jadwal[1]->tgl_selesai;
	// 					$keterangan1 = $val->jadwal[1]->keterangan;
	// 			}
	//
	// 	    $sql = "INSERT INTO tb_lelang2 SET kode_lelang=?, kode_rup=?, nama_paket=?, pagu=?, hps=?, tahun=?, status_lelang=?, paket_status=?, ukpbj=?,
	// 			tahapan=?, tgl_mulai=?, tgl_selesai=?, keterangan=?,
	// 			tahapan1=?, tgl_mulai1=?, tgl_selesai1=?, keterangan1=?
	// 	    ON DUPLICATE KEY UPDATE
	// 			kode_rup=values(kode_rup), nama_paket=values(nama_paket), pagu=values(pagu),
	// 			hps=values(hps),tahun=values(tahun),status_lelang=values(status_lelang),paket_status=values(paket_status),ukpbj=values(ukpbj),
	// 			tahapan=values(tahapan),tgl_mulai=values(tgl_mulai),tgl_selesai=values(tgl_selesai),keterangan=values(keterangan),
	// 			tahapan1=values(tahapan1),tgl_mulai1=values(tgl_mulai1),tgl_selesai1=values(tgl_selesai1),keterangan1=values(keterangan1)";
	// 	    $stmt = mysqli_prepare($connection, $sql);
	//
	// 			mysqli_stmt_bind_param($stmt, "iisiisiisssssssss", $val->kode_lelang, $val->kode_rup,
	// 			$val->nama_paket, $val->pagu, $val->hps, $val->tahun, $val->status_lelang, $val->paket_status, $val->ukpbj,
	// 			$tahapan, $tgl_mulai, $tgl_selesai, $keterangan, $tahapan1, $tgl_mulai1, $tgl_selesai1, $keterangan1);
	// 	        mysqli_stmt_execute($stmt);
	// 	}
	//
	// 	$this->cari_pemenang();
	//
	// 	redirect('lelang');
	// }

	public function jadwal()
	{
		$array = array();
		$data['inc'] = 'lelang_jadwal';
		$data['lelang'] = $this->lelang_m->get_jadwal();
		$this->load->view('admin/index', $data);
	}

	public function cari_pemenang()
	{
			$str = "SELECT l.kode_lelang, l.kode_rup, l.status_lelang, j.tgl_mulai FROM tb_lelang_new l
			LEFT JOIN tb_jadwal j ON l.kode_rup = j.kode_rup
			WHERE j.tahapan = 'TANDATANGAN_KONTRAK' AND (l.kode_lelang = j.kode_lelang AND l.kode_rup = j.kode_rup)
			GROUP BY l.kode_lelang";
			$menang = $this->db->query($str)->result();

			// $menang = $this->db->get_where('tb_lelang',array())->result();
			foreach ($menang as $value) {

			// $datetime1 = new DateTime( date('Y-m-d',strtotime($value->tgl_mulai)) );
			// $tgl_sekarang = new DateTime( date('Y-m-d') );

			$datetime1 = new DateTime ($value->tgl_mulai);
			$tgl_sekarang = new DateTime (date('Y-m-d H:i:s'));

			if( ($datetime1 <= $tgl_sekarang) && ($datetime1 !== NULL) ) {
				$key = array('kode_rup'=>$value->kode_rup,'status_lelang'=>1);
				$data['menang'] = 5;
				$this->db->update('tb_lelang_new',$data,$key);
			}elseif( ($datetime1 > $tgl_sekarang) && ($datetime1 !== NULL) ){
				$key = array('kode_rup'=>$value->kode_rup,'status_lelang'=>1);
				$data['menang'] = 0;
				$this->db->update('tb_lelang_new',$data,$key);
			}elseif($datetime1 == NULL){
				$key = array('kode_rup'=>$value->kode_rup,'status_lelang'=>1);
				$data['menang'] = 0;
				$this->db->update('tb_lelang_new',$data,$key);
			}

		}
	}
}
