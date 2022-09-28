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
		if ($this->form_validation->run() == FALSE) {

			$data['title'] = 'Login | Development';
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
		if ($this->form_validation->run() == FALSE) {

			$data['title'] = 'Register | Development';
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
		$data['title'] = 'Web Application';
		// $data['promo_byID'] = $this->devweb->get_promoById();
		$this->load->view('templates/app/header_app', $data);
		$this->load->view('development/app', $data);
		$this->load->view('templates/app/footer_app');
	}

	public function dev_promo()
	{
		cek_add_product_promo();
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Web Application';
			$this->load->view('templates/app/header_app', $data);
			$this->load->view('development/app', $data);
			$this->load->view('templates/app/footer_app');
		} else {

			$this->devweb->add_apps_for_promo();
			$this->session->set_flashdata('dev', '<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Add New Promo Success!</strong> You Can Show This Promo From the Landing Web Page. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
			redirect('development/project_web_devs_review');
		}
	}

	public function project_web_devs_review()
	{
		$data['title'] = 'Review Project';
		$data['view_promo'] = $this->devweb->show_promo();
		$this->load->view('templates/app/header_app', $data);
		$this->load->view('development/review', $data);
		$this->load->view('templates/app/footer_app');
	}

	public function projcet_update_promo($id)
	{
		cek_add_product_promo();
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Review Project';
			$data['view_promo'] = $this->devweb->get_promoById($id);
			$this->load->view('templates/app/header_app', $data);
			$this->load->view('development/review', $data);
			$this->load->view('templates/app/footer_app');
		} else {
			$this->devweb->update_this_promo($id);
			$this->session->set_flashdata('dev', '<div class="alert alert-warning alert-dismissible fade show" role="alert"> <strong>Update Promo Success!</strong> You Can Show This Promo From the Landing Web Page. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
			redirect('development/project_web_devs_review');
		}
	}

	public function shows($id)
	{
		_updatePromoImg($id);
		var_dump(_updatePromoImg($id));
		die;
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
