<?php if (!defined('BASEPATH')) die('Direct access to the script is not allowed');

class resultController extends CI_Controller 
{

	function __construct() {
    parent::__construct();
    
$this->load->helper('form');
	$this->load->helper('url');
    $this->load->library('form_validation');
       $this->load->library('upload');
       $this->load->helper('date');
     $this->load->model('modifyresultmodel');
  }
	public function Index()
	{
		
	
	}

	public function our_result()
	{
        
        $data['no_of_record']=$this->modifyresultmodel->retrieve();
       
        $data['total_result']=$this->modifyresultmodel->retrieve_result();
         //r_dump($data);
		$this->load->view('result',$data);
	}
	public function modifyresult()
	{
    session_start();    
if(!isset($_SESSION['username']))
{
  redirect('home');
}
            $data['session_user']=$_SESSION['username'];
		        $this->form_validation->set_rules('student','student','required');
            $this->form_validation->set_rules('exam_name','exam_name','required');
             $this->form_validation->set_rules('exam_type','exam_type','required');
            $this->form_validation->set_rules('rank','rank','required');
          
            $this->form_validation->set_rules('start','start','required');
            $this->form_validation->set_rules('end','end','required');
  if($this->form_validation->run()!=false)
    {
            $data['view']='Upadtion \ Study Matrial';
            $config = array(
            'upload_path' => "./our_result/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'image_width'=>200,
            'image_height'=>150
            );
            $this->upload->initialize($config);
            $this->load->library('upload', $config);

            if($this->upload->do_upload())
            {
          
            $data = array('upload_data' => $this->upload->data(),'view'=>'Upadtion \ Our Result','error'=>'');
            $datestring= "%Y-%m-%d";
            $date = time();
            $date= mdate($datestring, $date);
           // echo $date;
            //echo $data['upload_data']['file_name']."sadas".$data['upload_data']['file_path'].$data['upload_data']['full_path'];
           $result= array('id'=>"",'student_name'=>$this->input->post('student'),'exam_name'=>$this->input->post('exam_name'),'exam_type'=>$this->input->post('exam_type'),'rank'=>$this->input->post('rank'),'start'=>$this->input->post('start'),'end'=>$this->input->post('end'),'photo_name' => $data['upload_data']['file_name'],'path'=>$data['upload_data']['file_path'],'fullpath'=>$data['upload_data']['full_path']);
                
                //var_dump($result);
                if($this->modifyresultmodel->save($result))
                {
                  $this->session->set_flashdata('sucess', 'your record is sucessfull saved');
                 redirect('modifyresult');
                }
                $this->load->view('modifyresult',$data);
            }
            else
            {
          

            $data = array('error' => $this->upload->display_errors(),'view'=>'Upadtion \ Our Result');
            $this->load->view('modifyresult', $data);
            }
    }
  else
    {
        $data['view']='Upadtion \ Our Result';
        $data['error']='';
        $this->load->view('modifyresult',$data);
    }
	
	}
  public function deleteretrieve()
  {
    session_start();    
    if(!isset($_SESSION['username']))
    {
        redirect('home');
    }
    $data['session_user']=$_SESSION['username'];
    $data['view']='Delete / Our result';
    $data['result']=$this->modifyresultmodel->deleteretrive();
    $this->load->view('deleteourresult',$data);
    }
    public function delete_ourresult($id)
    {
    session_start();    
    if(!isset($_SESSION['username']))
    {
      redirect('home');
    }
     $data['session_user']=$_SESSION['username'];
      $this->modifyresultmodel->delete($id);
      redirect('deleteourresult');

  }

}
?>