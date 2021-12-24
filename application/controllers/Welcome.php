<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
<<<<<<< HEAD
		$data['title'] = 'Produk Kamar Hotel';
		$this->load->view('components/header', $data);
		$this->load->view('pages/index');
	}

	function listHarga()
	{
		$data['title'] = 'Harga Kamar Hotel';
		$this->load->view('components/header', $data);
		$this->load->view('pages/daftarharga');
	}

	function tentangHotel()
	{
		$data['title'] = 'Tentang Hotel';
		$this->load->view('components/header', $data);
		$this->load->view('pages/tentangkami');
=======
		$this->load->view('welcome_message');
>>>>>>> 713eb0991b4aa5a97f33a5ad1e4baad349855770
	}
}
