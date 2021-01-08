<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OCD_reports extends CI_Controller {
    
	public function index()
	{
		$this->load->view('ocd_reports');
	}
}