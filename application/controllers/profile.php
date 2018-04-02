<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$this->load->model('infobio');
		$data = $this->infobio->getData();
		$this->load->view('website_personal',$data,FALSE);
	}

}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */