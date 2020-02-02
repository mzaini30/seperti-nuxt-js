<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hash extends MY_Controller {
	public function index(){
		$this->twig->display('hash/beranda');
	}

	public function halaman($nama){
		$this->twig->display('hash/' . $nama);
	}
}
