<?php
class StudyMatrial extends CI_Model {
	public function __construct()
    {
        parent::__construct();
       $this->load->database();

    }
     public function save($result)
    {
        if ($this->db->insert('studymatrial', $result)) return true;
             else return null;   
  
    }
     public function retrieve($subject,$writter)
    {
        if($subject!="" and $writter!="")
         {
        $this->db->select('*')->from('studymatrial');
        $this->db->where('subject', $subject)->where('writter', $writter);
        $result = $this->db->get();
        $subject="";
        $writter="";

         }   
         else
         {
            if($subject!="")
             {
               $this->db->select('*')->from('studymatrial');
                $this->db->where('subject', $subject);
                $result = $this->db->get();
                 $subject="";
             }
             else
             {
                if($writter!="")
                {
                    $this->db->select('*')->from('studymatrial');
                    $this->db->where('writter', $writter);
                    $result = $this->db->get();
                    $writter="";
                }
                else
                {
                     $this->db->select('*')->from('studymatrial');
                    $result = $this->db->get();
                }
             }   
        
        }
        return $result->result_array();
    }
    public function RetrieveJon()
    {
        
        $q='select Subject,id from studymatrial';
        $result=$this->db->query($q);
        return $result->result_array();
    }
    public function RetrieveJson()
    {
        
        $q='select writter,id from studymatrial';
        $result=$this->db->query($q);
        return $result->result_array();
    }
    public function deleteretrive()
    {
        $this->db->select('*')->from('studymatrial');
        $result = $this->db->get();
        return $result->result_array();
    }
    public function delete($id)
    {
         $this->db->where('id', $id);
        $this->db->delete('studymatrial');
    }
    public function downloads($id)
    {
                $this->db->select('filename')->from('studymatrial');
                $this->db->where('id', $id);
                $result = $this->db->get();
                return $result->result_array();
    }
      
}
 ?>  