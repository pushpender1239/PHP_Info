

<?php
class Prj_model extends CI_Model{
    function __construct()
    {
        parent::__construct();  
    }

public function get_data()
{
    
$result =$this->db->get('demo')->result_array();
    //print_r($result);
    //die();
return $result;

}

}
?>