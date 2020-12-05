<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk extends CI_Controller {

	public function index()
	{
		$data['penduduk']=$this->M_penduduk->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('V_pdk',$data);
		$this->load->view('templates/footer');
	}
		public function tambah_data()
	{

		$nik=$this->input->post('nik');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$panjang=$this->input->post('panjang');
		$lebar=$this->input->post('lebar');
		$tinggi=$this->input->post('tinggi');
		$data = array('nik' =>$nik , 
					  'nama' =>$nama,
					  'alamat' =>$alamat ,
					   'panjang' =>$panjang ,
						'lebar' =>$lebar ,
						'tinggi' =>$tinggi ,);
		$this->M_penduduk->input_data($data);
		redirect('penduduk/index');
	}

	public function hapus($id){
		$where = array('id' => $id , );
		$this->M_penduduk->hapus_data($where,'tb_pdk');
		redirect('penduduk/index');
	}
	public function edit($id){
		$where = array('id' => $id, );
		$data['Penduduk']=$this->M_penduduk->edit_data($where,'tb_pdk');
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit',$data);
		$this->load->view('templates/footer');
	}
	public function update(){
		$nik=$this->input->post('nik');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$panjang=$this->input->post('panjang');
		$lebar=$this->input->post('lebar');
		$tinggi=$this->input->post('tinggi');
		$data = array('nik' =>$nik , 
					  'nama' =>$nama,
					  'alamat' =>$alamat ,
					   'panjang' =>$panjang ,
						'lebar' =>$lebar ,
						'tinggi' =>$tinggi ,
					);
		$where = array('id'=>$id ,);
		$this->M_penduduk->update_data($where,$data,'tb_pdk');

	}
	public function print(){
		$data['penduduk']=$this->M_penduduk->tampil_data()->result();
		$this->load->view('print_penduduk',$data);
	}
	public function pdf(){
		$this->load->library('Dompdf_gen');
		$data['penduduk']=$this->M_penduduk->tampil_data()->result();
		$this->load->view('laporan_pdf',$data);
		$paper_size='A4';
		$orientation='landscape';
		$html=$this->output->get_output();

		$this->dompdf->set_paper($paper_size,$orientation);
		$this->dompdf->load_html($html);


		$this->dompdf->stream('laporan_datapenduduk.pdf',array('Attachment'=> 0));

	}
	public function search(){
		$keyword=$this->input->post('keyword');
		$data['penduduk']=$this->M_penduduk->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit',$data);
		$this->load->view('templates/footer');

	}
}
