<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_m extends CI_Model{

    function __construct(){

    }

    public function count($tb_name, $filter)
    {
        return $this->db->get_where($tb_name,$filter)->num_rows();
    }

    public function get_laporan()
    {
      $str = "SELECT * FROM tb_skpa";
      return $this->db->query($str)->result();
    }
}
