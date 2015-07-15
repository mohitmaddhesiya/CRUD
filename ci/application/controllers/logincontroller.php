<?php if (!defined('BASEPATH')) die('Direct access to the script is not allowed');

class logincontroller extends CI_Controller 
{

	function __construct() {
        
		  parent::__construct();
		   session_start();
	$this->load->helper('form');
	$this->load->helper('url');
    $this->load->library('form_validation');
    $this->load->model('loginmodel');
    $this->load->model('newsupdationmode');
   
  }
	public function Index()
	{
		$data['view'] = 'Updation / News Updation';
		$username=$this->input->post('user');
		$password=$this->input->post('password');
        $result=$this->loginmodel->login($username,$password);
		
			if($result!=NULL)
			{
			   foreach ($result as  $res) {
			 
				$sess_array=array('id'=>$res['id'],'username'=>$res['username'],'type'=>$res['type'],'status'=>$res['status']);
				
				
				
			$_SESSION['username']=$res['username'];
					
					}			
			$data['session_user']=$_SESSION['username'];
				$this->load->view('adminNewsupdation',$data);	
				//redirect('newsupadtion');
			}

		else{
			redirect('home');
			}
}
public function logout()
{
	session_destroy();
	
	redirect('home');
}
}
?>