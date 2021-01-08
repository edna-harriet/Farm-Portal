<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class AMS_Issuelog extends CI_controller{
   
    public function index()
    {
        $this->load->view('ams_issuelog');
    }
    
}
