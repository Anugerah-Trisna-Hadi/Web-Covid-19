<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe_model extends CI_Model {

	public function subscribe($data)
	{
        $this->db->insert('subscriber',$data);
	}
}
