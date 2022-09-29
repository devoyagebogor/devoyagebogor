<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Controller Admin to Develope the Website
 */

class Authdevs extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('system_request_helper');
    }

    public function index()
    {
        check_log_devs();
        if ($this->form_validation->run() == FALSE) {

            $data['title'] = 'Login | Development';
            $this->load->view('templates/dev/header', $data);
            $this->load->view('authdevs/index', $data);
            $this->load->view('templates/dev/footer');
        } else {

            process_reg_development();
        }
    }

    public function auth_reg_system()
    {
        cek_reg_development();
        if ($this->form_validation->run() == FALSE) {

            $data['title'] = 'Register | Development';
            $this->load->view('templates/dev/header', $data);
            $this->load->view('authdevs/request_system_reg', $data);
            $this->load->view('templates/dev/footer');
        } else {

            $this->devweb->register_of_development_account();
            $this->session->set_flashdata('dev', '<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Account Register Success!</strong> You Can Develops Web Devoyage Bogor - Deresto Coffee & Kitchen <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            redirect('authdevs');
        }
    }

    public function logout_devs_web()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('password');
        $this->session->set_flashdata('dev', '<div class="alert alert-secondary alert-dismissible fade show" role="alert"> <strong>Account Logout Success!</strong> Good Luck For To Day, See You Tomorrow<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('authdevs');
    }
}
