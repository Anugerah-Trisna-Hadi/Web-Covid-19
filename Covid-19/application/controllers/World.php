<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class World extends CI_Controller {

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

		$covidAPIGlobSem = file_get_contents('https://api.kawalcorona.com/sembuh');
		$covidAPIGlobMen = file_get_contents('https://api.kawalcorona.com/meninggal');
		$covidAPIGlobPos = file_get_contents('https://api.kawalcorona.com/positif');
		$covidAPIGlob = file_get_contents('https://api.kawalcorona.com/');
		
		$data['global'] = json_decode($covidAPIGlob, true);
		$data['positif'] = json_decode($covidAPIGlobPos,true);
		$data['sembuh'] = json_decode($covidAPIGlobSem,true);
		$data['meninggal'] = json_decode($covidAPIGlobMen,true);
		$data['body'] = 'world';
		$this->load->view('include/wrapper', $data);
	}
}
