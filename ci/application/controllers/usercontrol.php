<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usercontrol extends CI_Controller {

	 public function __construct()
       {
            parent::__construct();
            $this->load->model('Usermodel');
            // Your own constructor code
       }
       /*retriev the data from model pass to user view page and user view call */
	public function index()
	{

	$data['users']=$this->Usermodel->getuser();
	$this->load->view('user_view',$data);
			}

  /* load setuser method from model  and display the massage */
	public function setUserValue()
	{
		$this->Usermodel->setUser();
		echo "record saved";
	}
	/*load registor page */
	public function Create()
	{
   
    
     $this->load->view('regis');
    
	}
	/*recieve the id from routes and pass to edituser method and recieve the one row value 
 from edituser pass to upadte page*/
	public function edit($id)
	{
        $data['users']=$this->Usermodel->edituser($id);

		$this->load->view('update',$data);      
	}
	/*load update method from model and update the row thhrough id */
	public function Updateuser($id)
	{
       $this->Usermodel->updateuser($id);
       $this->index();
	}

}