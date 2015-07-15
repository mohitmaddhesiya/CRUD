<?php
class modifytopermodel extends CI_Model {
	public function __construct()
    {
        parent::__construct();
       $this->load->database();

    }
    public function save($result)
    {
        //var_dump($result);
       // echo $result['path'];
    	$this->db->insert('ourtopper', $result); 
        if ($result) return $result;
             else return null;   
  
    }
 public function retrieve()
    {
        $q='select photo_name as photo,name,year from ourtopper';
        $result=$this->db->query($q);
        return $result->result_array();
        
    }
    public function deleteretrieve()
    {
         $q='select id,name,year,photo_name from ourtopper';
        $result=$this->db->query($q);
        return $result->result_array();
    }
    public function delete($id)
    {
        $this->db->where('id', $id);
$this->db->delete('ourtopper'); 
    
    }

}