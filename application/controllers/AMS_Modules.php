<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AMS_Modules extends CI_Controller {
    
	public function index()
	{
		$this->load->view('ams_modules');
	}
}