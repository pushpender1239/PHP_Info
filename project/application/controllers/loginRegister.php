<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginRegister extends CI_Controller {

     function __construct(){
         parent:: __construct();
          $this->load->helper(array('form','url'));
        }
    
        
	public function index()
	{
		$this->load->view('login-register');
               
	}
        
       
}
