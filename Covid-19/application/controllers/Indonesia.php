<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indonesia extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$covidAPIIndo = file_get_contents('https://api.kawalcorona.com/indonesia');
		
		$data['indonesia'] = json_decode($covidAPIIndo, true);

		$covidAPIProv = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
		
		$data['provinsi'] = json_decode($covidAPIProv, true);
		$data['body'] = 'indonesia';
		$this->load->view('include/wrapper', $data);
	}
	public function mapping($map)
	{
		$data['body'] = 'mapping';
		$data['map'] = $map;
		$this->load->view('include/wrapper', $data);
	}
	public function hospital()
	{
		$covidAPIIndo = file_get_contents('https://api.kawalcorona.com/indonesia');
		
		
		$this->load->model('Hospital_model');
		$data['hospital'] = $this->Hospital_model->hospital();
		$data['body'] = 'hospital';
		$data['indonesia'] = json_decode($covidAPIIndo, true);
		$this->load->view('include/wrapper', $data);
	}
}
