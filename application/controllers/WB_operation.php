<?php defined ('BASEPATH') OR exit('No direct script access allowed');

class WB_operation extends CI_controller{
    public function index()
    {
        $this->load->view('wb_operation');
    }
}