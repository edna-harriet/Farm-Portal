<?php defined ('BASEPATH') OR exit('No direct script access allowed');

class OGA extends CI_controller{
    public function index()
    {
        $this->load->view('oga');
    }
}