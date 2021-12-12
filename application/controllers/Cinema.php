<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cinema extends CI_Controller {

	
	public function index()
	{
		$data['judul']="Pemesanan Tiket Cinema 99";
		$this->load->view('view-form-cinema99',$data);
		
	}


	public function proses_tambah()
	{
		$this->form_validation->set_rules('nama_pemesan', 'Nama Pemesan', 'trim|required|min_length[3]',
		array(
			'required'      => '%s Wajib diisi.',
			'min_length'      => '%s diisi minimal 3 karakter.'
	)
	);
		$this->form_validation->set_rules('judul_film', 'Judul Fim', 'required',
		array(
			'required'      => '%s Wajib diisi.'
	)
	);
		$this->form_validation->set_rules('pukul', 'Pukul', 'required',
		array(
			'required'      => '%s Wajib dipilih.'
	)
	);
		$this->form_validation->set_rules('tipe_studio', 'Tipe Studio', 'required',
		array(
			'required'      => '%s Wajib dipilih.'
	)
	);
		$this->form_validation->set_rules('jumlah_pesanan', 'Jumlah Pesanan', 'required',
		array(
			'required'      => '%s Wajib diisi.'
	)
	);

		if ($this->form_validation->run() == FALSE)
                {
					$this->load->view('view-form-cinema99',$data);
                }
                else
                {
					$data['judul']="Pemesanan Tiket Cinema 99";
					$data['nama_pemesan']=$this->input->post('nama_pemesan', TRUE);
					$data['judul_film']=$this->input->post('judul_film', TRUE);
					$data['pukul']=$this->input->post('pukul', TRUE);
					$data['tipe_studio']=$this->input->post('tipe_studio', TRUE);
					$data['jumlah_pesanan']=$this->input->post('jumlah_pesanan', TRUE);
					$data['harga_tiket']=$harga_tiket;
					$data['total']=$total;
			
					$this->load->view('view-output-cinema99',$data);
                }

		if($this->input->post('tipe_studio', TRUE)=="Reguler 2D")
		{
			$harga_tiket=40000;
		}
		elseif($this->input->post('tipe_studio', TRUE)=="3D")
		{
			$harga_tiket=80000;
		}
		elseif($this->input->post('tipe_studio', TRUE)=="Velvet")
		{
			$harga_tiket=100000;
		}

		$total=$this->input->post('jumlah_pesanan', TRUE)*$harga_tiket;

		
	}

}