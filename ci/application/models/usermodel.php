<?php
class Usermodel extends CI_Model {

	public function __construct()
    {
        parent::__construct();
       $this->load->database();

    }
    /*retrieve the data from person table and return to controller in index method*/
 function getUser()
{

    $query = $this->db->get('person');
    return $query->result_array();

}

/*
recieve the infromation through post method and dinsert into table person
*/
function setUser()
{
     $data = array(
     'firstname'=>$this->input->post("firstname"),
     'lastname'=>$this->input->post("lastname"),
     'password'=>$this->input->post("password"),
     'city'=>$this->input->post("city"),
    'pin_code'=>$this->input->post("pincode"),
     'Email'=>$this->input->post("email"),
     'mobile_no'=>$this->input->post("mobile_no"),
     'address'=>$this->input->post("address")
     );
  
    $this->db->insert('person',$data);

    
        
}

/*recieve the id from  edit method (controller) and retrieve the data from
person table nad pass to edit method */
function edituser($id)
{
    
   $query = $this->db->get_where('person', array('id' => $id));
    
    return $query->result_array();
  
   
   
}
/*recieve the id from updateuser method (controller) and according id update the person table*/
function updateuser($id)
{
$data = array(
     'firstname'=>$this->input->post("firstname"),
     'lastname'=>$this->input->post("lastname"),
     'password'=>$this->input->post("password"),
     'city'=>$this->input->post("city"),
    'pin_code'=>$this->input->post("pincode"),
     'Email'=>$this->input->post("email"),
     'mobile_no'=>$this->input->post("mobile_no"),
     'address'=>$this->input->post("address")
     );
$this->db->where('id', $id);
$this->db->update('person', $data); 
}
}
?>