<?php if (!defined('BASEPATH')) die('Direct access to the script is not allowed');

class facultyController extends CI_Controller 
{

	function __construct() {
    parent::__construct();
  
$this->load->helper('form');
	$this->load->helper('url');
    $this->load->library('form_validation');
     $this->load->library('upload');
       $this->load->helper('date');
        $this->load->model('modifyfaculitymodel');
  }
	public function Index()
	{
	$data['result']=$this->modifyfaculitymodel->retrieve();
	$this->load->view('faculty',$data);
	}

	public function modifyfaculity()
	{
    session_start();    
if(!isset($_SESSION['username']))
{
  redirect('home');
}
 $data['session_user']=$_SESSION['username'];
		//$this->load->view('modifyfaculity');
		$this->form_validation->set_rules('faculity','faculity','required');
            $this->form_validation->set_rules('qualification','qualification','required');
             $this->form_validation->set_rules('email','email','required');
            $this->form_validation->set_rules('mobile','mobile','required');
      
       
           // $this->form_validation->set_rules('start','start','required');
           // $this->form_validation->set_rules('end','end','required');
  if($this->form_validation->run()!=false)
    {

            $data['view']='Role \ Our Top Faculity';
            $config = array(
            'upload_path' => "./faculty/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'image_width'=>200,
            'image_height'=>150
            );
            $this->upload->initialize($config);
            $this->load->library('upload', $config);

            if($this->upload->do_upload())
            {
          
            $data = array('upload_data' => $this->upload->data(),'view'=>'Faculity \ Our Top Faculity','error'=>'');
            $datestring= "%Y-%m-%d";
            $date = time();
            $date= mdate($datestring, $date);
            //echo $data['upload_data']['file_name']."sadas".$data['upload_data']['file_path'].$data['upload_data']['full_path'];
           $result= array('id'=>"",'faculty_name'=>$this->input->post('faculity'),'qualification'=>$this->input->post('qualification'),'mobile_no'=>$this->input->post('mobile'),'email'=>$this->input->post('email'),'spec_quali'=>'','photo_name' => $data['upload_data']['file_name'],'path'=>$data['upload_data']['file_path'],'fullpath'=>$data['upload_data']['full_path']);
                
                if($this->modifyfaculitymodel->save($result))
                {
                 $this->session->set_flashdata('sucess', 'your record is sucessfull saved');
                 redirect('modifyfaculity');
                }
                $this->load->view('modifyfaculity',$data);
            }
            else
            {
          

            $data = array('error' => $this->upload->display_errors(),'view'=>'Upadtion \ Our Result');
            $this->load->view('modifyfaculity', $data);
            }
    }
  else
    {
        $data['view']='Role \ Our Top Faculity';
        $data['error']='';
        $this->load->view('modifyfaculity',$data);
    }
	}

  public function deleteretrive()
  {
    session_start();    
if(!isset($_SESSION['username']))
{
  redirect('home');
}
     $data['session_user']=$_SESSION['username'];
    $data['view']='Delete / Faculity';
    $data['result']=$this->modifyfaculitymodel->deleteretrive();
    $this->load->view('deletefaculity',$data);
  }
  public function delete_faculity($id)
  {
    session_start();    
if(!isset($_SESSION['username']))
{
  redirect('home');
}
     $data['session_user']=$_SESSION['username'];
$this->modifyfaculitymodel->delete($id);
redirect('deletefaculity');

  }
}
?>