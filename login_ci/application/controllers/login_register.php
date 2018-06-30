<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_register extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();//to load database globally
        $this->load->model('Signup');//load model name
    }
	public function index()
	{
//     $data= array(
//    'user_username' => $this->input->post('username'),
//    'user_password' => $this->input->post('password')
//    );
//         
//       $this->Signup->insert_data('users',$data);//calling model method
       $this->load->view('login-register'); 
	}
    public function ravi()
    {
		$data=array(
			'user_username'=> $this->input->post('user_username'),
			'user_password' => $this->input->post('user_password')
		);
		$res	=$this->Signup->insert_data($data);
		if($res)
		{
		die('da');
		}
		
		//	print_r($data);
    }
}
