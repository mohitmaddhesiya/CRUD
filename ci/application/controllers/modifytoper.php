<?php if (!defined('BASEPATH')) die('Direct access to the script is not allowed');

class modifytoper extends CI_Controller 
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
    $this->load->model('addressmodel');
     $this->load->model('modifytopermodel');
    $this->load->library('upload');
    $this->load->helper('date');
		
  }
	public function Index()
	{
			   $data['session_user']=$_SESSION['username'];
			$this->form_validation->set_rules('student','title','required');
			$this->form_validation->set_rules('year','year','required');
	if($this->form_validation->run()!=false)
		{
						$data['view']='Role \ Our Topper';
						$config = array(
						'upload_path' => "./uploads/",
						'allowed_types' => "gif|jpg|png|jpeg",
						'overwrite' => TRUE,
						'image_width'=>200,
						'image_height'=>150
						);
						$this->upload->initialize($config);
						$this->load->library('upload', $config);

						if($this->upload->do_upload())
						{
					
						$data = array('upload_data' => $this->upload->data(),'view'=>'Role \ Our Topper','error'=>'');
						$datestring= "%Y-%m-%d";
						$date = time();
						$date= mdate($datestring, $date);
						//echo $data['upload_data']['file_name']."sadas".$data['upload_data']['file_path'].$data['upload_data']['full_path'];
						$result= array('id'=>"",'photo_name' => $data['upload_data']['file_name'],'path'=>$data['upload_data']['file_path'],'fullpath'=>$data['upload_data']['full_path'],'width'=>200,'height'=>150,'date'=>$date,'name'=>$this->input->post('student'),'year'=>$this->input->post('year'));
								if($this->modifytopermodel->save($result))
								{
									$this->session->set_flashdata('sucess', 'your record is sucessfull saved');
									redirect('modifytoper');
								}
								$this->load->view('modifytoper',$data);
						}
						else
						{
					

						$data = array('error' => $this->upload->display_errors(),'view'=>'Role \ Our Topper');
						$this->load->view('modifytoper', $data);
						}
		}
	else
		{
			    $data['session_user']=$_SESSION['username'];
				$data['view']='Role \ Our Topper';
				$data['error']='';
				$this->load->view('modifytoper',$data);
		}
	}
	public function deleteourtoppers()
	{
		 $data['session_user']=$_SESSION['username'];
$data['view']='Delete / Our Topers';
$data['result']=$this->modifytopermodel->deleteretrieve();
$this->load->view('deleteourtopper',$data);
		
	}
	public function deletetopper($id)
	{
		 $data['session_user']=$_SESSION['username'];
$this->modifytopermodel->delete($id);
redirect('deleteourtopper');
	}
}
?>