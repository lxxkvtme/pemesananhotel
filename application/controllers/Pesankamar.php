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

      $this->form_validation->set_rules('nama_pemesan', 'Nama pemesan', 'required');
      $this->form_validation->set_rules('jk', 'Jenis kelamin', 'required');
      $this->form_validation->set_rules('nomor_identitas', 'Nomor identitas', 'required|max_length[16]|min_length[16]');
      $this->form_validation->set_rules('tipe_kamar', 'Tipe kamar', 'required');
      $this->form_validation->set_rules('tanggal_pesan', 'Tanggal pesan', 'required');
      $this->form_validation->set_rules('durasi_menginap', 'Durasi menginap', 'required');

      if ($this->form_validation->run() == false) {
         $this->session->set_flashdata('flash');
         $this->load->view('pages/pesankamar');
      } else {
         $data['nama_pemesan'] = $this->input->post('nama_pemesan');
         $data['jk'] = $this->input->post('jk');
         $data['nomor_identitas'] = $this->input->post('nomor_identitas');
         $data['tipe_kamar'] = $this->input->post('tipe_kamar');
         $data['harga_kamar'] = $this->input->post('harga_kamar');
         $data['tanggal_pesan'] = $this->input->post('tanggal_pesan');
         $data['durasi_menginap'] = $this->input->post('durasi_menginap');
         $data['termasuk_breakfast'] = $this->input->post('termasuk_breakfast');
         $data['total_bayar'] = $this->input->post('total_bayar');
         $data['diskon'] = $this->input->post('diskon');

         // var_dump($data);
         $this->load->view('pages/hasilpesanan', $data);
      }
   }
}
