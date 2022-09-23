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
	}
