<?php
class Advokasi_m extends CI_Model {

  private $key;
  private $tb;

	public function __construct(){
    $tb = '';
    $key = '';
	}

	public function get($key)
	{
		$this->db->select('a.*,b.nama_paket');
    $this->db->from('tb_advokasi a');
		$this->db->join('tb_lelang b','a.kode_rup = b.kode_rup','left');
		$this->db->where($key);
		$query = $this->db->get();
		return $query->result();
	}

  public function get_paket($key = array())
	{
    $key = array('status_lelang'=>1);
		$this->db->select('*');
    $this->db->from('tb_lelang');
		$this->db->where($key);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_detail($key)
	{
		$query = $this->db->get_where('tb_advokasi', $key);
		return $query->row();
	}

	public function create()
	{
		$data['nomor_surat'] = $this->input->post('nomor');
		$data['tanggal'] = $this->input->post('tanggal');
		$data['lembaga'] = $this->input->post('lembaga');
    $data['alamat'] = $this->input->post('alamat');
		$data['kode_rup'] = $this->input->post('paket');
		$data['materi'] = $this->input->post('materi');
		$data['tahap'] = $this->input->post('tahap');
		$data['keterangan'] = $this->input->post('keterangan');

		$this->db->insert('tb_advokasi', $data);
		$result = $this->db->affected_rows();
		if($result = 1)
		{
			$this->session->set_flashdata('msg','<div class="callout callout-success">Berhasil</div>');
		}
	}

	public function update($id)
	{
		$key = array('advokasi_id' => $id);
    $data['nomor_surat'] = $this->input->post('nomor');
		$data['tanggal'] = $this->input->post('tanggal');
		$data['lembaga'] = $this->input->post('lembaga');
    $data['alamat'] = $this->input->post('alamat');
		$data['kode_rup'] = $this->input->post('paket');
		$data['materi'] = $this->input->post('materi');
		$data['tahap'] = $this->input->post('tahap');
		$data['keterangan'] = $this->input->post('keterangan');

		$this->db->update('tb_advokasi', $data, $key);
		$result = $this->db->affected_rows();
		if($result = 1)
		{
			$this->session->set_flashdata('msg','<div class="callout callout-success">Berhasil</div>');
		}
	}

	public function delete($id)
	{
		$filter = array('advokasi_id'=>$id);
		$this->db->delete('tb_advokasi',$filter);
		if($result = 1)
		{
			$this->session->set_flashdata('msg','<div class="callout callout-success">Berhasil</div>');
		}
	}
}
