<?php if (!defined('BASEPATH')) die('Direct access to the script is not allowed');
class modifycourse extends CI_Controller 
{

	function __construct() {

		  parent::__construct();
		session_start();    
if(!isset($_SESSION['username']))
{
	redirect('home');
}
	$this->load->helper('form');
	$this->load->helper('url');
    $this->load->library('form_validation');
    $this->load->model('modifycoursemodel');
   
}
public function Index()
	{
		 $data['session_user']=$_SESSION['username'];
        //var_dump($data);
		$data['view']='Updation / Popular Course';
		$data['result']=$this->modifycoursemodel->selectcourse();
		$this->form_validation->set_rules('input_course','course','required');
    	if($this->form_validation->run()!=false)
    	{
    		 $modify_course=$this->input->post('input_course');
    		 $course_name=$this->input->post('input_course_id');
    		if($this->modifycoursemodel->update($modify_course,$course_name))
    		 $this->session->set_flashdata('sucess', 'your record is sucessfull saved');
    		redirect('modifycourse');
    	}

		$this->load->view('adminpopularcourse',$data);
	
	
	}
	 public function retrieve()
    {
    	$data['result']=$this->modifycoursemodel->selectcourse();
    	
		
		$this->load->view('course',$data);
    }
    
}

?>