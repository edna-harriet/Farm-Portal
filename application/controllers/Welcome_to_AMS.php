<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_to_AMS extends CI_controller{
   
    public function index()
    {
        $this->load->view('welcome_to_ams');
}
}
