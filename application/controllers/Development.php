<?php
defined('BASEPATH') or exit('No direct script access allowed');

	/**
	 * Controller Admin to Develope the Website
	 */
	class Development extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Devweb_model', 'devweb');
			$this->load->helper('development_helper');
		}

		public function index()
		{
			check_log_devs();
			if ( $this->form_validation->run() == FALSE ) {
				
				$data['title'] = 'Developmnet Web';
				$this->load->view('templates/dev/header', $data);
				$this->load->view('development/index', $data);
				$this->load->view('templates/dev/footer');
			} else {

				process_reg_development();
			}
		}

		public function register_of_development()
		{
			  cek_reg_development();
			  if ( $this->form_validation->run() == FALSE ) {

			  	$data['title'] = 'Developmnet Web';
				$this->load->view('templates/dev/header', $data);
				$this->load->view('development/register_development', $data);
				$this->load->view('templates/dev/footer');

			  } else {

			  	$this->devweb->register_of_development_account();
			  	$this->session->set_flashdata('dev', '<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Account Register Success!</strong> You Can Develops Web Devoyage Bogor - Deresto Coffee & Kitchen <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
			  	redirect('development');

			  }

		}

		public function project_web_devs_app()
		{
				$data['title'] = 'Developmnet Web';
				$this->load->view('templates/app/header_app', $data);
				$this->load->view('development/app', $data);
				$this->load->view('templates/app/footer_app');
		}

		public function logout_devs_web()
		{
		    $this->session->unset_userdata('id');
		    $this->session->unset_userdata('email');
		    $this->session->unset_userdata('password');
		    $this->session->set_flashdata('dev', '<div class="alert alert-secondary alert-dismissible fade show" role="alert"> <strong>Account Logout Success!</strong> Good Luck For To Day, See You Tomorrow<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
			  	redirect('development');
		}
	}