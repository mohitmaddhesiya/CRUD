<?php if (!defined('BASEPATH')) die('Direct access to the script is not allowed');
class newsupdatecontroller extends CI_Controller 
{

	function __construct() {
    parent::__construct();
     parent::__construct();
    session_start();    
if(!isset($_SESSION['username']))
{
  redirect('home');
}
	$this->load->helper('form');
	$this->load->helper('url');
    $this->load->library('form_validation');
    $this->load->model('newsupdationmode');
        $this->load->model('loginmodel');
  
    
  }
  public function Index()
	{
  $data['session_user']=$_SESSION['username'];
	$data['view'] = 'Updation / News Updation';
  $this->form_validation->set_rules('title','title','required');
  $this->form_validation->set_rules('subject','subject','required');
  $this->form_validation->set_rules('description','description','required');
  if($this->form_validation->run()!=false)
  { 
        $session_data=$this->session->userdata('login');
        $data['username']=$session_data['username'];
        $user=$this->input->post('user');
         $password=$this->input->post('password');
         $data['user']=$this->loginmodel->login($user,$password);
        $username=$this->input->post('username');
        $name=$this->input->post('name');
        $title=$this->input->post('title');
        $subject=$this->input->post('subject');
        $description=$this->input->post('description');
        //echo $name."//".$username."//".$title."//".$subject."//".$description;
        $data['result']=$this->newsupdationmode->newssave($username,$name,$title,$subject,$description);
        if($data['result'])
        {
          $this->session->set_flashdata('title', 'title');
          redirect('newsupadtion');
        }
          
  }

    $this->load->view('adminNewsupdation',$data);
  }
  public function deletenews()
  {
     $data['session_user']=$_SESSION['username'];
    $data['view']='Delete / news';
    $data['result']=$this->newsupdationmode->deletenews();
    $this->load->view('deletenews',$data);
  }
  public function delete_news($id)
  {
     $data['session_user']=$_SESSION['username'];
$this->newsupdationmode->delete($id);
redirect('deletenews');

  }

}
?>