<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospital_model extends CI_Model {

	public function hospital()
	{
		return $this->db->get('rumah_sakit')->result();
	}
}
