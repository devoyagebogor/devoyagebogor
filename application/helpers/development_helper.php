<?php
defined('BASEPATH') or exit('No direct script access allowed');

function ci()
{
	return get_instance();
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

function d_promoImg()
{
	$id    = ci()->uri->segment(3);
	$file_ = ci()->db->get_where('promo', ['id' => $id])->row_array();
	$f_d   = $file_['poto'];
	unlink(FCPATH . '/assets/img/uploaded/promo/' . $f_d);
}

function cek_add_product_promo()
{
	ci()->form_validation->set_rules('title_promo', 'Title Promo', 'trim|required');
	ci()->form_validation->set_rules('caption_promo', 'Caption', 'trim|required|max_length[100]');
	ci()->form_validation->set_rules('text_promo', 'Text Promo', 'trim|required|max_length[100]');
	ci()->form_validation->set_rules('periode_promo', 'Periode Promo', 'trim|required');
}

// Packages

function _packagesImg()
{
	$config['allowed_types'] = 'jpg|jpeg|png';
	$config['upload_path']	 = './assets/img/uploaded/packages/';
	$config['max_size']		 = 2098;

	ci()->load->library('upload', $config);

	if (!ci()->upload->do_upload('img_packages')) {
		ci()->session->set_flashdata('dev', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Failed!</strong> Images not to Insert, try again<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
		redirect('development/project_web_devs_app');
	} else {
		$img = ci()->upload->data();
		$img = $img['file_name'];
	}

	return $img;
}
