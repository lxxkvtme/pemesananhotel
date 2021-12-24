<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesankamar extends CI_Controller
{
   public function index()
   {
      $this->load->view('pages/pesankamar');
   }

   public function addPemesanan()
   {

      $this->form_validation->set_rules('nama_pemesan', 'Nama Pemesan', 'required');
      $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
      $this->form_validation->set_rules('nomor_identitas', 'Nomor Ideentitas', 'required|numberic');
      $this->form_validation->set_rules('tipe_kamar', 'Tipe Kamar', 'required');
      $this->form_validation->set_rules('tanggal_Pesan', 'Tanggal Pesan', 'required');
      $this->form_validation->set_rules('durasi_menginap', 'Durasi Menginap', 'required');

      $data['nama_pemesan'] = $this->input->post('nama_pemesan');
      $data['jk'] = $this->input->post('jk');
      $data['nomor_identitas'] = $this->input->post('nomor_identitas');
      $data['tipe_kamar'] = $this->input->post('tipe_kamar');
      $data['harga_kamar'] = $this->input->post('harga_kamar');
      $data['tanggal_pesan'] = $this->input->post('tanggal_pesan');
      $data['durasi_menginap'] = $this->input->post('durasi_menginap');
      $data['termasuk_breakfast'] = $this->input->post('termasuk_breakfast');


      var_dump($data);
      die;
   }
}
