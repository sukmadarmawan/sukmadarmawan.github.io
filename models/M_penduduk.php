<?php


class M_penduduk extends CI_Model {

	public function tampil_data()
	{
		return $this->db->get('tb_pdk');

	}

	public function input_data($data)
	{
		return $this->db->insert('tb_pdk',$data);

	}
	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function edit_data($where,$table){
		return $this->db->get_where($table,$where)->result();
	}
	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('tb_pdk');
		$this->db->like('nik',$keyword);
		$this->db->or_like('nama',$keyword);
		$this->db->or_like('alamat',$keyword);
		$this->db->or_like('panjang',$keyword);
		$this->db->or_like('lebar',$keyword);
		$this->db->or_like('tinggi',$keyword);
		return $this->db->get()->result();
			}
}
