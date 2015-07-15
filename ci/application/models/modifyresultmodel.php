<?php
class modifyresultmodel extends CI_Model {
	public function __construct()
    {
        parent::__construct();
       $this->load->database();

    }
     public function save($result)
    {
        //var_dump($result);
       // echo $result['path'];
    	$this->db->insert('our_result', $result); 
        if ($result) return $result;
             else return null;   
  
    }
     public function retrieve()
    {
        $q='select count(start) as total,start,end from our_result group by start order by start desc';
        $result=$this->db->query($q);
        return $result->result_array();
    }
    public function retrieve_result()
    {
      $q='select student_name,exam_name,rank,start,end,photo_name,path,fullpath from our_result group by start,id order by start desc';
        $result=$this->db->query($q);
        return $result->result_array();  
    }
    public function deleteretrive()
    {
        $this->db->select('*')->from('our_result');
        $result = $this->db->get();
        return $result->result_array();
    }
    public function delete($id)
    {
         $this->db->where('id', $id);
        $this->db->delete('our_result');
    }

}
 ?>  