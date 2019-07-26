<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Konstruksi_m extends CI_Model{

    function __construct(){

    }

    public function get_paket()
    {
      $filter1 = array('b.jenis_pengadaan'=>'konstruksi');
      $filter2 = array('b.jenis_pengadaan'=>'konsultansi');
      $this->db->select('a.*,b.nama_paket,b.jenis_pengadaan');
      $this->db->join('tb_rup b','a.paket_id = b.kode_rup','left');
      $this->db->where($filter1)->or_where($filter2);
      $this->db->group_by('a.paket_id');
      return $this->db->get('tb_sp_paket a')->result();
    }
}
