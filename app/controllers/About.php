<?php

class About extends Controller {

	public function index($nama = 'Sodik Fikri', $status = 'Mahasantri') {
	$data['nama'] = $nama;
	$data['status'] = $status;

	$data['judul'] = 'About Me';
	$this->view('templates/header', $data);
	$this->view('about/index', $data);
	$this->view('templates/footer'); 
	}

	public function page()
	{
		$data['judul'] = 'Pages';
		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/footer'); 
	}
}