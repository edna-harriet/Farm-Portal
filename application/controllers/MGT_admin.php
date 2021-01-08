<?php defined ('BASEPATH') OR exit('No direct script access allowed');

class MGT_admin extends CI_controller{
    public function index()
    {
        $this->load->view('mgt_admin');
    }
}