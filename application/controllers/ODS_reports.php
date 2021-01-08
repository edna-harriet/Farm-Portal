<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ODS_reports extends CI_controller{
    
    public function index()
    
    {
        $this->load->view('ods_reports');
    }
}