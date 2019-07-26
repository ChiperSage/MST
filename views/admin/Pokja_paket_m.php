<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pokja_paket_m extends CI_Model{

    function __construct(){

    }

    public function get_paket()
    {
      $id = $this->session->userdata('user_id');
      $nip = $this->db->get_where('users',array('id'=>$id))->row('nip');

      $this->db->select('a.*, b.kode_rup, b.nama_paket, c.sp_kelompok, d.anggota_nip, d.anggota_jabatan, e.pokja_nama,
      c.sp_status, (SELECT hapus FROM tb_hapus WHERE nip = d.anggota_nip AND kode_rup = a.paket_id) as hapus,
      (SELECT COUNT(id) FROM tb_sp_anggota WHERE anggota_sp = c.sp_id) as tpokja,
      (SELECT SUM(hapus) FROM tb_hapus WHERE kode_rup = a.paket_id) as tsetuju');
      $this->db->from('tb_sp_paket a');
      $this->db->join('tb_rup b','a.paket_id = b.kode_rup','left');
      $this->db->join('tb_sp c','a.paket_sp = c.sp_id','left');
      $this->db->join('tb_sp_anggota d','c.sp_id = d.anggota_sp','left');
      $this->db->join('tb_pokja e','d.anggota_nip = e.pokja_nip','left');

      $this->db->where(array('d.anggota_jabatan'=>'anggota','d.anggota_nip'=>$nip));
      $this->db->group_by('a.id');
  		$query = $this->db->get();
  		return $query->result();
    }

    public function get_paket_review()
    {
      $id = $this->session->userdata('user_id');
      $nip = $this->db->get_where('users',array('id'=>$id))->row('nip');

      $this->db->select('a.id_sp, b.kode_rup, b.nama_paket, b.nama_satker, c.sp_kelompok,
      (SELECT tgl_review FROM tb_review_paket WHERE kode_rup = a.kode_rup ORDER BY tgl_review DESC LIMIT 1) as tgl_review,
      (SELECT rv.status FROM tb_review_paket rv WHERE kode_rup = a.kode_rup ORDER BY tgl_review DESC LIMIT 1) as rv_status,
      (SELECT keterangan FROM tb_review_paket WHERE kode_rup = a.kode_rup ORDER BY tgl_review DESC LIMIT 1) as ket_review,
      a.tgl_review, a.tgl_selesai, a.status, b.nama_kpa');
      $this->db->from('tb_review a');
      $this->db->join('tb_rup b','a.kode_rup = b.kode_rup','left');
      $this->db->join('tb_sp c','a.id_sp = c.sp_id','left');
      $this->db->join('tb_sp_anggota d','c.sp_id = d.anggota_sp','left');
      $this->db->join('tb_pokja e','d.anggota_nip = e.pokja_nip','left');

      // $this->db->where(array('d.anggota_jabatan'=>'anggota'));
      $this->db->where(array('d.anggota_jabatan'=>'anggota','d.anggota_nip'=>$nip));
      $this->db->order_by('a.status ASC');
      $this->db->group_by('a.kode_rup');
  		$query = $this->db->get();
  		return $query->result();
    }

    public function get_history()
    {
      $id = $this->session->userdata('user_id');
      $nip = $this->db->get_where('users',array('id'=>$id))->row('nip');

      $str = "SELECT * FROM (SELECT v.kode_rup as kode_rup, r.nama_paket as nama_paket, r.nama_satker as nama_satker, r.nama_kpa as nama_kpa, s.sp_kelompok as kelompok, '' as tgl_review, '' as keterangan
      FROM tb_review v, tb_review_paket h, tb_rup r,
      tb_sp s, tb_sp_paket pk, tb_sp_anggota sa, tb_pokja pj
      WHERE v.kode_rup = h.kode_rup AND v.kode_rup = r.kode_rup AND v.kode_rup = pk.paket_id AND pk.paket_sp = s.sp_id AND s.sp_id = sa.anggota_sp
      GROUP BY v.kode_rup

      UNION

      SELECT h.kode_rup as kode_rup, '' as nama_paket, '' as nama_satker, '' as nama_kpa, '' as kelompok, h.tgl_review as tgl_review, h.keterangan as keterangan
      FROM tb_review v, tb_review_paket h, tb_rup r,
      tb_sp s, tb_sp_paket pk, tb_sp_anggota sa, tb_pokja pj
      WHERE v.kode_rup = h.kode_rup AND v.kode_rup = r.kode_rup AND v.kode_rup = pk.paket_id AND pk.paket_sp = s.sp_id AND s.sp_id = sa.anggota_sp
      ) as tb_join ORDER BY kode_rup DESC";

      return $this->db->query($str)->result();
    }

    public function update_review($kode_rup, $sp, $status)
    {
      $count = $this->db->get_where('tb_review',array('kode_rup'=>$kode_rup))->num_rows();
      if($count == 1 && $status == 1){
        $data['tgl_review'] = date('Y-m-d');
        $data['status'] = $status;
        $this->db->update('tb_review', $data, array('kode_rup'=>$kode_rup));
      }elseif($count == 1 && $status == 2){
        $data['tgl_selesai'] = date('Y-m-d');
        $data['status'] = $status;
        $this->db->update('tb_review', $data, array('kode_rup'=>$kode_rup));
      }
    }

  	public function batal()
    {
      // pakai kode rup
      $id = $this->input->post('id');

      // lock sp
      // if($this->_islocked($id) != true){

      $sp_paket = $this->db->get_where('tb_sp_paket',array('paket_id'=>$id))->row();
      $sp = $sp_paket->paket_sp;
      $paket = $sp_paket->paket_id;

      // tambah ke tabel batal
      $data['batal_sp'] = $sp;
      $data['batal_paket'] = $paket;
      $data['batal_keterangan'] = $this->input->post('keterangan');
      $this->db->insert('tb_batal',$data);

      // delete from sp_paket
      $this->db->delete('tb_review',array('kode_rup'=>$id));
      $this->db->delete('tb_sp_paket',array('paket_id'=>$id));
  		$result = $this->db->affected_rows();
  		if($result = 1)
  		{
  			$this->session->set_flashdata('msg','<div class="callout callout-success">Paket telah dibatalkan</div>');
  		}
  	}

    public function _islocked($kode_rup)
    {
      $this->db->select('b.sp_status');
      $this->db->from('tb_sp_paket a');
      $this->db->join('tb_sp b','a.paket_sp = b.sp_id','left');
      $this->db->where(array('a.paket_id'=>$kode_rup));
      $this->db->group_by('a.paket_id');
      $result = $this->db->get()->row();
      if($result->sp_status == 2){
        return true;
      }else{
        return false;
      }
    }
}
