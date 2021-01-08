<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Installation_Instruction extends CI_controller{
    
    public function index()
    {
        $this->load->view('installation_instruction');
    }
    
    //creat a function that loads the first link: upgrading to the previous version
    
    public function previous_version()
    {
        
        $this->load->view('previous_version');
    }
    
    
}