<?php
defined('BASEPATH') or exit('No direct script access allowed');

function ci()
{
	return get_instance();
}

function cek_reg_development()
{
	ci()->form_validation->set_rules('email', 'Email Active', 'trim|required|valid_email');
	ci()->form_validation->set_rules('pass1', 'Password', 'trim|required|min_length[5]|max_length[16]|matches[pass2]');
	ci()->form_validation->set_rules('pass2', 'Password', 'trim|required|min_length[5]|max_length[16]|matches[pass1]');
}

function check_log_devs()
{
	ci()->form_validation->set_rules('email', 'Email Active', 'trim|required|valid_email');
	ci()->form_validation->set_rules('pass1', 'Password', 'trim|required|min_length[5]|max_length[16]');
}

function process_reg_development()
{
	$email_dev = ci()->input->post('email');
	$pass_dev  = ci()->input->post('pass1');
	$dev = ci()->db->get_where('development_web', ['email' => $email_dev])->row_array();

	if ($dev) {

		if ($email_dev == $dev['email']) {

			if (password_verify($pass_dev, $dev['password'])) {

				$session_dev = [
					'id'		 => $dev['id'],
					'email' 	 => $dev['email'],
					'passwordss' => $dev['password']
				];
				ci()->session->set_userdata($session_dev);
				redirect('development/project_web_devs_app');
			} else {

				ci()->session->set_flashdata('dev', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Wrong Password!</strong> Please Check for your Password Again<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
				redirect('development');
			}
		} else {

			ci()->session->set_flashdata('dev', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Email not Found!</strong> Please Check for your Email Again<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
			redirect('development');
		}
	} else {

		ci()->session->set_flashdata('dev', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Account Not Found!</strong> This Account Not Registered<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
		redirect('development');
	}
}
