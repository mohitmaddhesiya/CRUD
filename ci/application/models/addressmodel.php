<?php
class addressmodel extends CI_Model {
	public function __construct()
    {
        parent::__construct();
       $this->load->database();

    }
    public function retrieve()
    {
    	$q='select contactus1_line1 as line1,contactus1_line2 as line2, contactus1_city as city,contactus1_zip as zip,contactus2_line1 as line3,contactus2_line2 as line4,contactus2_city as city2,contactus2_zip as zip2,mobile1,mobile2, phone,email from address;';
    	$result=$this->db->query($q);
    	//var_dump($result->result_array());
    	return $result->result_array();
    }
  public function modify($result)
  {
    //var_dump($result);
  $r= $this->db->update('address', $result); 
  //if($r)
    //return ture;
  }


}