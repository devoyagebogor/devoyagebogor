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
		}

		public function index()
		{
		    $data['title'] = 'Devoyage Bogor';
		    $this->load->view('templates/header', $data);
		    $this->load->view('devoyage/index', $data);
		    $this->load->view('templates/footer');
		}
	}
