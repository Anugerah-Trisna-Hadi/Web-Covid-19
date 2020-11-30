<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Covid_19 extends CI_Controller {

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
		
		$data['positif'] = json_decode($covidAPIGlobPos,true);
		$data['sembuh'] = json_decode($covidAPIGlobSem,true);
		$data['meninggal'] = json_decode($covidAPIGlobMen,true);
		$data['body'] = 'home';
		$this->load->view('include/wrapper', $data);
	}
	public function subscribe()
	{
		$this->load->library('form_validation');
		$this->load->model('Subscribe_model');
		$this->form_validation->set_rules('email','Email', 'required|valid_email');      
        if($this->form_validation->run() == FALSE){
        	redirect('');
        }else{
            $data = array(
                'EMAIL_SUBS' => $this->input->post('email'),
            );
            $this->Subscribe_model->subscribe($data);
        	redirect('');
        }
	}
}
