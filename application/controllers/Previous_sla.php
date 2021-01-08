<?php 
defined ('BASEPATH') OR exit('No direct script access allowed');

class Previous_sla extends CI_controller {
    
        public function index()
        
        {
            $this->load->view('previous_sla');
        }
}
