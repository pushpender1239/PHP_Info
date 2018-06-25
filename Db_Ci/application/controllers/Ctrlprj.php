<?php
defined('BASEPATH') OR exit('No Direct Script Allowed');

class Ctrlprj extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Prj_model');
    }
    
    public function index()
    {
        //('working');
        $res    =$this->Prj_model->get_data();
        print_r($res);
        
        
        
    }
}
?>