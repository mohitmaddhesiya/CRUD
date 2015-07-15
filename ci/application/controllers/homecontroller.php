<?php if (!defined('BASEPATH')) die('Direct access to the script is not allowed');

class homeController extends CI_Controller 
{

	function __construct() {
    parent::__construct();
     parent::__construct();
	$this->load->helper('form');
	$this->load->helper('url');
    $this->load->library('form_validation');
     $this->load->model('modifycoursemodel');
       $this->load->model('modifytopermodel');
  }
	public function Index()
	{
		
	$data['course']=$this->modifycoursemodel->selectcourse();
	$this->load->view('home',$data);
	}
	public function iframe()
	{

			$this->load->model('newsupdationmode');
			$data['result']=$this->newsupdationmode->retrieve();
			$this->load->view('newsUpdation',$data);
	}
	public function ourtopper()
	{

			$data['result']=$this->modifytopermodel->retrieve();
			$this->load->view('ourTopper',$data);
	}
	public function retrieve_course()
	{
		$data['course']=$this->modifycoursemodel->selectcourse();
		$data['toppersay']=$this->modifycoursemodel->toppersay();
	
		$this->load->view('course',$data);
	}
}
?>