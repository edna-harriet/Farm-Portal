<?php 
   class Redirect_controller extends CI_Controller { 
	
      public function index() { 
         /*Load the URL helper*/ 
         $this->load->helper('url'); 
   
         /*Redirect the user to some site*/ 
         redirect('localhost/ams_user_guide'); 
      }
		
      public function sla() { 
         /*Load the URL helper*/ 
         $this->load->helper('url'); 
         redirect('localhost/ams_user_guide'); 
      } 
  
      public function ams_issuelog() { 
         /*Load the URL helper*/ 
         $this->load->helper('url'); 
   
         /*Redirect the user to some internal controller’s method*/ 
         redirect('redirect/ams_user_guide'); 
      } 
		
   } 
?>