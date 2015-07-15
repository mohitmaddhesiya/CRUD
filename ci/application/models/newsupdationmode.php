<?php if (!defined('BASEPATH')) die('Direct access to the script is not allowed');

class newsupdationmode extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->load->helper('date');	
	}
	public function newssave($username,$name,$title,$subject,$description)
	{
		$datestring= "%Y-%m-%d";
		$date = time();
		$date= mdate($datestring, $date);
		$timestring="%h:%i%a";
		$time=time();
		$time=mdate($timestring, $time);
		$data = array(
	'id'=>'',
	'username'=>$username,	
	'name' => $name ,	
   'title' => $title ,
   'subject'=>$subject,
   'description' => $description,
   'date'=>$date,
   'time'=>$time
);
		//echo $date.$time;
	  $result=$this->db->insert('newsupdate', $data); 

	if ($result) return $result;
	else return null;	
	}
	public function retrieve()
	{
		$q='select title,subject from newsupdate';
		$result=$this->db->query($q);
    	//var_dump($result->result_array());
    	return $result->result_array();
	}
	public function deletenews()
	{
		$q='select id,name,title,subject,date from newsupdate;';
		$result=$this->db->query($q);
    	//var_dump($result->result_array());
    	return $result->result_array();
	}
	public function delete($id)
    {
        $this->db->where('id', $id);
$this->db->delete('newsupdate'); 
    
    }
}