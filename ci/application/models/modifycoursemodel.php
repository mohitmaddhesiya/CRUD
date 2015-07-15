<?php if (!defined('BASEPATH')) die('Direct access to the script is not allowed');
class modifycoursemodel extends CI_Model {
	public function __construct()
    {
        parent::__construct();
       $this->load->database();

    }
     public function selectcourse()
    {
    	$q='select course_name as name from course;';
    		$result=$this->db->query($q);
    	return ($result->result_array());
    }
    public function retrieve()
    {
    	$q='select id,course_name as name from course;';
    		$result=$this->db->query($q);
    	return ($result->result_array());
    }
    public function update($update_course,$course_name)
    {
        $result= array('course_name' => $update_course );
            $this->db->where('course_name', $course_name);
        if($r= $this->db->update('course', $result))
        return true; 
    }
    public function toppersay()
    {
        $q='select name,year,description,photo_name from toppersay';
        $result=$this->db->query($q);
        //var_dump($result);
        return ($result->result_array());
    }
}
?>