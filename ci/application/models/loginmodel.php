<?php
class loginmodel extends CI_Model {

	public function __construct()
    {
        parent::__construct();
       $this->load->database();

    }
    public function login($user,$password)
    {
    	$q='select id,username,password,type,date,status from user where username=\''.$user.'\' and password=\''.$password.'\'';
       // echo $q;
    	$result=$this->db->query($q);
      if($result)
    	return $result->result_array();
      else
        return null;
    }
}
   ?>