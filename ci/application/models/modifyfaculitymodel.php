<?php
class modifyfaculitymodel extends CI_Model {
	public function __construct()
    {
        parent::__construct();
       $this->load->database();

    }
     public function save($result)
    {
        //var_dump($result);
       // echo $result['path'];
    	$this->db->insert('faculity', $result); 
        if ($result) return $result;
             else return null;   
  
    }
      public function retrieve()
    {
        $q='select faculty_name as name,qualification as quali,mobile_no as mobile,email,photo_name as photo  from faculity';
        $result=$this->db->query($q);
        //var_dump($result->result_array());
        return $result->result_array();
    }
    public function deleteretrive()
    {
        $q='select id,faculty_name,qualification,mobile_no,email,photo_name from faculity';
        $result=$this->db->query($q);
        //var_dump($result->result_array());
        return $result->result_array();
    }
    public function delete($id)
    {
         $this->db->where('id', $id);
        $this->db->delete('faculity');
    }
}
 ?> 