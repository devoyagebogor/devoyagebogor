<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class of Homepage Devoyage Bogor
 */
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Devweb_model', 'devweb');
	}

	public function index()
	{
		$data['title'] = 'Devoyage Bogor';
		$data['hotspromo'] = $this->devweb->show_promo();
		$Packges = new Devweb_model;
		$data['packages'] = $Packges->show_packages();
		$this->load->view('templates/header', $data);
		$this->load->view('devoyage/index', $data);
		$this->load->view('templates/footer');
	}
}
