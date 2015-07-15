<?php if (!defined('BASEPATH')) die('Direct access to the script is not allowed');

class studymatrialController extends CI_Controller 
{
	function __construct() {
    parent::__construct();
     $this->load->helper('form');
	 $this->load->helper('url');
     $this->load->library('form_validation');
     $this->load->library('upload');
     $this->load->helper('date');
       $this->load->model('StudyMatrial');
       $this->load->helper('download');
       $this->load->helper('file');
  
  }
	public function Index()
	{
		 $this->load->view('modifystudymatrial');
	}
	public function retrieve()
	{
  $subject=strtolower($this->input->post('Subject'));
  $writter=strtolower($this->input->post('Writter'));
    $data['Result']=$this->StudyMatrial->retrieve($subject,$writter);
		$this->load->view('studyMatrial',$data);
	}
	
  public function adminuploadfile()
  {
    session_start();    
    if(!isset($_SESSION['username']))
    {
    redirect('home');
    }
    $data['view']="Role / Studymatrial";
    $config = array(
    'upload_path' => "./studymatrial/",
    'allowed_types' => "pdf|doc|docx|text|sql",
    'overwrite' => TRUE,
    'max_size' => "2048000"
    );
    $data['session_user']=$_SESSION['username'];
                $this->form_validation->set_rules('SM_subject','SM_subject','required');
            $this->form_validation->set_rules('SM_title','SM_title','required');
             $this->form_validation->set_rules('SM_writter','SM_writter','required');
             //$this->form_validation->set_rules('SM_userfile','SM_userfile','');
           //print_r($this->form_validation->run());
  if($this->form_validation->run()!=false)
    {
    $this->upload->initialize($config);
    $this->load->library('upload', $config);
    if($this->upload->do_upload())
    {
      $data = array('upload_data' => $this->upload->data(),'view'=>'Role \ Study Matrial','error'=>'');
      $datestring= "%Y-%m-%d";
      $date = time();
      $date= mdate($datestring, $date);
      $result= array('id'=>"",'subject'=>strtolower($this->input->post('SM_subject')),'title'=>strtolower($this->input->post('SM_title')),'writter'=>strtolower($this->input->post('SM_writter')),'filename' => $data['upload_data']['file_name'],'path'=>$data['upload_data']['file_path'],'fullpath'=>$data['upload_data']['full_path'],'date'=>$date,'upadateby'=>$_SESSION['username']);
      if($this->StudyMatrial->save($result))
      {
       $this->session->set_flashdata('sucess', 'your record is sucessfull saved');
      
      }
      else
      {
        $this->session->set_flashdata('error', 'your record is not sucessfull saved');
      }
redirect('modifystudymatrial');
    }
    else
    {
      $data = array('error' => $this->upload->display_errors(),'view'=>'Role \ Study Matrial');
      redirect('modifystudymatrial');
    } 
  }
    else
    {
    $data['view']='Role \ Study Matrial';
    $data['error']='';
    $this->load->view('adminUploadfile',$data);
  }
  }
  public function SubjectJson()
  {
    $Subject=$this->StudyMatrial->RetrieveJon();
    $jsonSubject = array();
    foreach ($Subject as $Subjects)
      $jsonSubject[$Subjects['id']] = $Subjects['Subject'];
    print json_encode($jsonSubject);
    exit;
  }
  public function WritterJson()
  {
    $writter=$this->StudyMatrial->RetrieveJson();
    $jsonwritter = array();
    foreach ($writter as $writters)
      $jsonwritter[$writters['id']] = $writters['writter'];
    print json_encode($jsonwritter);
    exit;
  }
  public function deleteretrieve()
  {
    session_start();    
    if(!isset($_SESSION['username']))
    {
        redirect('home');
    }
    $data['session_user']=$_SESSION['username'];
    $data['view']='Delete / Study matrial';
    $data['result']=$this->StudyMatrial->deleteretrive();
    $this->load->view('deletstudymatrial',$data);
    }
    public function delete_studymatrial($id)
    {
    session_start();    
    if(!isset($_SESSION['username']))
    {
      redirect('home');
    }
     $data['session_user']=$_SESSION['username'];
      $this->StudyMatrial->delete($id);
//delete_file('ART_Center_DH,_Chamrajnagar_patient-dispensation-report(2nd_Mar_2015_-_5th_Mar_2015).pdf');
      //unlink('studymatrial/ART_Center_DH,_Chamrajnagar_patient-dispensation-report(2nd_Mar_2015_-_5th_Mar_2015).pdf')
      redirect('deletestudymatrial');

  }
  public function downloads($id)
  {
      $filename=$this->StudyMatrial->downloads($id);
      
       // foreach ($filename as $key) {
         // echo  'studymatrial/'.$key['filename'].'';\
         // force_download('base_url()/studymatrial/'.$key['filename'].'', null);
        //}
        
       // $data1 = 'Here is some text!';
//$name = 'mytext.txt';
        //die;
      $str=base_url().'/studymatrial/ART_Center_DH,_Chamrajnagar_patient-dispensation-report(2nd_Mar_2015_-_5th_Mar_2015).pdf';
      //echo $str;
      //die;
force_download(null, $str);
      redirect('studymatrial');
  }
}
?>