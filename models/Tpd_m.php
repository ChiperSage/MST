<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tpd_m extends CI_Model{

    function __construct(){

    }

    public function get()
  	{
      // get login data
      $id = $this->session->userdata('user_id');
  		$data_login = $this->ion_auth->user($id)->row();

      $id_satker = 0;
      if($data_login->id_satker != 0 && !empty($data_login->id_satker)){
        $id_satker = $data_login->id_satker;
      }

  		$this->db->select('a.*, b.first_name, b.last_name');
      $this->db->from('tb_tpd a');
      $this->db->join('users b','a.petugas_id = b.id','left');
      $this->db->where(array('a.id_satker'=>$id_satker));
      $this->db->group_by('a.id');
      $this->db->order_by('a.tanggal DESC');
  		$query = $this->db->get();
  		return $query->result();
  	}

    public function tpd_get($var = '')
    {
      $filter = array();
      if(!empty($var)){
        $filter = array('jenis_pengadaan'=>$var);
      }

      $this->db->select('a.*, b.first_name, b.last_name');
      $this->db->from('tb_tpd a');
      $this->db->join('users b','a.petugas_id = b.id','left');
      $this->db->where($filter);
      $this->db->group_by('a.kode_rup');
      $this->db->order_by('a.tanggal DESC');
      $query = $this->db->get();
      return $query->result();
    }

    public function tpd_detail($kode_rup)
    {
      $tb = 'tb_tpd_checklist b';
      $jenis = $this->db->get_where('tb_tpd',array('kode_rup'=>$kode_rup))->row();
      if($jenis->jenis_pengadaan == 'Barang'){
        $tb = 'tb_tpd_barang b';
      }elseif ($jenis->jenis_pengadaan == 'Jasa Lainnya') {
        $tb = 'tb_tpd_jasa b';
      }elseif ($jenis->jenis_pengadaan == 'Pekerjaan Konstruksi') {
        $tb = 'tb_tpd_konstruksi b';
      }elseif ($jenis->jenis_pengadaan == 'Jasa Konsultansi') {
        $tb = 'tb_tpd_konsultansi b';
      }

      $this->db->select('a.*, u.*, b.*, a.kode_rup as vkode_rup, a.id_satker as vid_satker');
      $this->db->from('tb_tpd a');
      $this->db->join($tb,'b.kode_rup = a.kode_rup','left');
      $this->db->join('users u','b.id_petugas = u.id','left');
      $this->db->where(array('a.kode_rup'=>$kode_rup));
      $this->db->group_by('a.kode_rup');
      $query = $this->db->get();
      return $query->row();
    }

    public function list_skpa()
    {
      $this->db->select('id_satker,nama_satker');
      $this->db->from('tb_rup');
      // $this->db->where();
      $this->db->group_by('id_satker');
      $this->db->order_by('nama_satker ASC');
      return $this->db->get()->result();
    }

    public function list_rup()
    {
      $tahun = $this->db->get_where('json',array('data'=>'rup'))->row('tahun');
      
      // get login data
      $id = $this->session->userdata('user_id');
  		$data_login = $this->ion_auth->user($id)->row();

      // $id_satker = 0;
      if($data_login->id_satker != 0 && !empty($data_login->id_satker)){
        $id_satker = $data_login->id_satker;
      }

      $str = "SELECT r.*,l.hps from tb_rup r
  		LEFT JOIN tb_lelang l ON r.kode_rup = l.kode_rup
  		WHERE r.id_satker = '$id_satker' AND l.tahun = $tahun AND (l.ukpbj = '1106.00' OR l.status_lelang = 1)
      AND r.kode_rup NOT IN (SELECT kode_rup FROM tb_tpd)";

      // $str1 = "SELECT kode_rup,nama_paket FROM tb_rup
  		// WHERE id_satker = '$id_satker' AND kode_rup NOT IN (SELECT kode_rup FROM tb_tpd)
  		// AND (metode_pemilihan = 'Tender' OR metode_pemilihan = 'Tender Cepat' OR metode_pemilihan = 'Seleksi' OR (metode_pemilihan = 'Penunjukan Langsung' AND pagu_rup > 200000000))
  		// AND left(akhir_pekerjaan,4) = '2019' AND status_aktif = 'ya' AND status_umumkan = 'sudah'
  		// AND (sumber_dana = 'APBD' OR sumber_dana = 'BLUD')";

  		$query = $this->db->query($str);
  		return $query->result();
    }

    public function contoh_list_paket()
  	{
  		$str = "SELECT * FROM tb_rup
  		WHERE kode_rup NOT IN (SELECT kode_rup FROM tb_skn)
  		AND (metode_pemilihan = 'Tender' OR metode_pemilihan = 'Tender Cepat' OR metode_pemilihan = 'Seleksi' OR (metode_pemilihan = 'Penunjukan Langsung' AND pagu_rup > 200000000))
  		AND left(akhir_pekerjaan,4) = '2019' AND status_aktif = 'ya' AND status_umumkan = 'sudah'
  		AND (sumber_dana = 'APBD' OR sumber_dana = 'BLUD')";
  		$query = $this->db->query($str);
  		return $query->result();
  	}

  	public function get_detail($id)
  	{
      $id_satker = $this->login_id_satker();

      $this->db->select('*');
      $this->db->from('tb_tpd');
      $this->db->where(array('id'=>$id,'id_satker'=>$id_satker));
      // $this->db->group_by('id');
      $query = $this->db->get();
      return $query->row();
  	}

  	public function create()
  	{
      $data['tanggal'] = date('Y-m-d H:i:s');
      $data['kode_rup'] = $this->input->post('kode_rup');
      $data['nama_pabung'] = $this->input->post('nama_pabung');
      $data['hp_pabung'] = $this->input->post('hp_pabung');
      $data['nilai_hps'] = $this->input->post('nilai_hps');
      $data['pengelola_teknis_kegiatan'] = $this->input->post('pengelola_teknis_kegiatan');
      $data['hp_pengelola_teknis_kegiatan'] = $this->input->post('hp_ptk');
      $data['id_satker'] = $this->login_id_satker();

      $data['nama_skpa'] = $this->input->post('nama_skpa');
      $data['nama_pa'] = $this->input->post('nama_pa');
      $data['hp_pa'] = $this->input->post('hp_pa');
      $data['nama_paket'] = $this->input->post('nama_paket');
      $data['jenis_pengadaan'] = $this->input->post('jenis_pengadaan');
      $data['lokasi_pekerjaan'] = $this->input->post('lokasi_pekerjaan');
      $data['sumber_dana'] = $this->input->post('sumber_dana');
      $data['nilai_pagu'] = $this->input->post('nilai_pagu');
      $data['awal_pengadaan'] = $this->input->post('awal_pengadaan');
      $data['akhir_pengadaan'] = $this->input->post('akhir_pengadaan');
      $data['status_pengadaan'] = $this->input->post('status_pengadaan');
      $data['petugas_id'] = $this->session->userdata('user_id');

  		$this->db->insert('tb_tpd', $data);
  		$result = $this->db->affected_rows();
  		if($result = 1)
  		{
  			$this->session->set_flashdata('msg','<div class="callout callout-success">Berhasil menambah data.</div>');
  		}
  	}

  	public function update($id)
  	{
      $id_satker = $this->login_id_satker();
  		$key = array('id'=>$id,'id_satker'=>$id_satker);

      $data['tanggal'] = date('Y-m-d H:i:s');
      $data['kode_rup'] = $this->input->post('kode_rup');
      $data['nama_pabung'] = $this->input->post('nama_pabung');
      $data['hp_pabung'] = $this->input->post('hp_pabung');
      $data['nilai_hps'] = $this->input->post('nilai_hps');
      $data['pengelola_teknis_kegiatan'] = $this->input->post('pengelola_teknis_kegiatan');
      $data['hp_pengelola_teknis_kegiatan'] = $this->input->post('hp_ptk');
      $data['id_satker'] = $this->login_id_satker();

      $data['nama_skpa'] = $this->input->post('nama_skpa');
      $data['nama_pa'] = $this->input->post('nama_pa');
      $data['hp_pa'] = $this->input->post('hp_pa');
      $data['nama_paket'] = $this->input->post('nama_paket');
      $data['jenis_pengadaan'] = $this->input->post('jenis_pengadaan');
      $data['lokasi_pekerjaan'] = $this->input->post('lokasi_pekerjaan');
      $data['sumber_dana'] = $this->input->post('sumber_dana');
      $data['nilai_pagu'] = $this->input->post('nilai_pagu');
      $data['awal_pengadaan'] = $this->input->post('awal_pengadaan');
      $data['akhir_pengadaan'] = $this->input->post('akhir_pengadaan');
      $data['status_pengadaan'] = $this->input->post('status_pengadaan');

  		$this->db->update('tb_tpd',$data,$key);
  		$result = $this->db->affected_rows();
  		if($result = 1)
  		{
  			$this->session->set_flashdata('msg','<div class="callout callout-success">Berhasil mengupdate data.</div>');
  		}
  	}

    public function delete($kode_rup)
  	{
      $id_satker = $this->login_id_satker();
  		$filter = "kode_rup = '$kode_rup' AND id_satker = '$id_satker'";
  		$this->db->delete('tb_tpd',$filter);
  		if($result == 1){
  			$this->session->set_flashdata('msg','<div class="callout callout-success">Berhasil</div>');
  		}
  	}

    public function login_id_satker()
    {
      $id = $this->session->userdata('user_id');
  		$data_login = $this->ion_auth->user($id)->row();

      $id_satker = 0;
      if($data_login->id_satker != 0 && !empty($data_login->id_satker)){
        $id_satker = $data_login->id_satker;
      }
      return $id_satker;
    }

    public function count_jenis_pengadaan($var)
    {
      return $this->db->get_where('tb_tpd',array('jenis_pengadaan'=>$var))->num_rows();
    }

    public function get_berita_acara($filter)
    {
      $tanggal = date('Y-m-d');
      $id_satker = 0;
      if(isset($_GET['tanggal']) && isset($_GET['skpa'])){
        $tanggal = $_GET['tanggal'];
        $id_satker = $_GET['skpa'];
      }

      $str = "SELECT a.tanggal, a.id_satker, b.nama, a.nama_pabung
        FROM tb_tpd a
        LEFT JOIN tb_skpa b ON a.id_satker = b.kode
        WHERE a.tanggal = '$tanggal' AND a.id_satker = '$id_satker'
        GROUP BY a.tanggal";
      return $this->db->query($str)->row();
    }

    public function get_berita_list($filter)
    {
      $tanggal = date('Y-m-d');
      $id_satker = 0;
      if(isset($_GET['tanggal']) && isset($_GET['skpa'])){
        $tanggal = $_GET['tanggal'];
        $id_satker = $_GET['skpa'];
      }

      $str = "(SELECT a.kode_rup, b.nama_paket, b.jenis_pengadaan FROM tb_tpd_barang a LEFT JOIN tb_tpd b ON a.kode_rup = b.kode_rup
          WHERE b.tanggal = '$tanggal' AND b.id_satker = '$id_satker' AND kelengkapan = '1') UNION
              (SELECT a.kode_rup, b.nama_paket, b.jenis_pengadaan FROM tb_tpd_jasa a LEFT JOIN tb_tpd b ON a.kode_rup = b.kode_rup
          WHERE b.tanggal = '$tanggal' AND b.id_satker = '$id_satker' AND kelengkapan = '1') UNION
              (SELECT a.kode_rup, b.nama_paket, b.jenis_pengadaan FROM tb_tpd_konstruksi a LEFT JOIN tb_tpd b ON a.kode_rup = b.kode_rup
          WHERE b.tanggal = '$tanggal' AND b.id_satker = '$id_satker' AND kelengkapan = '1') UNION
              (SELECT a.kode_rup, b.nama_paket, b.jenis_pengadaan FROM tb_tpd_konsultansi a LEFT JOIN tb_tpd b ON a.kode_rup = b.kode_rup
          WHERE b.tanggal = '$tanggal' AND b.id_satker = '$id_satker' AND kelengkapan = '1')";
      return $this->db->query($str)->result();
    }
}
