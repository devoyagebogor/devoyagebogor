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

function _promoImg()
{
	$config['allowed_types'] = 'jpg|jpeg|png';
	$config['upload_path']	 = './assets/img/uploaded/promo/';
	$config['max_size']		 = 2098;

	ci()->load->library('upload', $config);

	if (!ci()->upload->do_upload('img_promo')) {
		ci()->session->set_flashdata('dev', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Failed!</strong> Images not to Insert, try again<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
		redirect('development/project_web_devs_app');
	} else {
		$img = ci()->upload->data();
		$img = $img['file_name'];
	}

	return $img;
}

function _updatePromoImg()
{
	$id    = ci()->uri->segment(3);
	$file_ = ci()->db->get_where('promo', ['id' => $id])->row_array();
	$old_ImgPromo  = $file_['poto'];

	$config['allowed_types'] = 'jpg|jpeg|png';
	$config['upload_path']	 = './assets/img/uploaded/promo/';
	$config['max_size']		 = 2098;

	ci()->load->library('upload', $config);

	if (!empty(FCPATH . '/assets/img/uploaded/promo/' . $old_ImgPromo)) {
		if (ci()->upload->do_upload('img_promo')) {
			unlink(FCPATH . '/assets/img/uploaded/promo/' . $old_ImgPromo);
			$update_ = ci()->upload->data();
			$update_ImgPromo = $update_['file_name'];
		} else {
			$update_ImgPromo = $old_ImgPromo;
		}
	} else {
		$update_ = ci()->upload->data();
		$update_ImgPromo = $update_['file_name'];
	}

	return $update_ImgPromo;
}

function cek_add_product_promo()
{
	ci()->form_validation->set_rules('title_promo', 'Title Promo', 'trim|required');
	ci()->form_validation->set_rules('caption_promo', 'Caption', 'trim|required');
	ci()->form_validation->set_rules('text_promo', 'Text Promo', 'trim|required');
	ci()->form_validation->set_rules('periode_promo', 'Periode Promo', 'trim|required');
}
