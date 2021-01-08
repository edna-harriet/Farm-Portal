<?php defined('BASEPATH') OR exit('No direct script access allowed');

class AMS_upgrade extends CI_controller { 
    public function index()
    {
        $this->load->view('ams_upgrade');
    }
}