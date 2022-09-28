<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Model Development
 */
class Devweb_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function register_of_development_account()
	{
		// register account of development website of devoyage bogor -  Deresto Coffee & Kitchen
		$data = [

			'email'		=> $this->input->post('email', TRUE),
			'password'	=> password_hash($this->input->post('pass1', TRUE), PASSWORD_DEFAULT)

		];
		$this->db->insert('development_web', $data);
	}

	public function add_apps_for_promo()
	{
		$this->load->helper('development_helper');

		$data = [

			'title'			=> $this->input->post('title_promo', true),
			'paragraph'		=> $this->input->post('text_promo', true),
			'caption'		=> $this->input->post('caption_promo', true),
			'periode'		=> $this->input->post('periode_promo', true),
			'status'		=> 1, // rever to active ==> 0 rever to non-active
			'poto'			=> _promoImg(),
			'date'			=> time()

		];
		$this->db->insert('promo', $data);
	}

	public function show_promo()
	{
		return $this->db->get('promo')->result_array();
	}

	public function is_active()
	{
		// method joid id & status tb-promo 
	}

	public function get_promoById($id)
	{
		return $this->db->get_where('promo', ['id' => $id])->row_array();
	}

	public function update_this_promo($id)
	{
		$id = $this->get_promoById($id);
		$data = [

			'title'			=> $this->input->post('title_promo', true),
			'paragraph'		=> $this->input->post('text_promo', true),
			'caption'		=> $this->input->post('caption_promo', true),
			'periode'		=> $this->input->post('periode_promo', true),
			'status'		=> 1, // rever to active ==> 0 rever to non-active
			'poto'			=> _updatePromoImg(),
			'date'			=> time()

		];
		return $this->db->update('promo', $data, ['id' => $id['id']]);
	}

	public function d_app_promo($id)
	{
		$id = $this->get_promoById($id);
		d_promoImg();
		return  $this->db->delete('promo', ['id' => $id['id']]);
	}
}
