<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminkaro_m extends CI_Model{

    function __construct(){

    }

    public function get_pokja_daftar()
    {
      $this->db->select('*');
      $this->db->from('tb_pokja');
      $this->db->group_by('pokja_nip');
  		$query = $this->db->get();
  		return $query->result();
    }

    public function get_pokja_penerima()
    {
      $this->db->select('a.*,
        (SELECT COUNT(b.id) FROM tb_sp_anggota b WHERE a.pokja_nip = b.anggota_nip) as tkelompok,
        (SELECT COUNT(d.id) FROM tb_sp_anggota b
          left join tb_sp c on b.sp_id = c.sp_id
          left join tb_sp_paket d on c.sp_id = d.paket_sp
          WHERE b.anggota_nip = a.pokja_nip) as tpaket
        ');
      $this->db->from('tb_pokja a');
      $this->db->group_by('a.pokja_nip');
  		$query = $this->db->get();
  		return $query->result();
    }
}
