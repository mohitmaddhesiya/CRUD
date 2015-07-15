<?php if (!defined('BASEPATH')) die('Direct access to the script is not allowed');

class contactusController extends CI_Controller 
{

	function __construct() {
    parent::__construct();
     parent::__construct();
        session_start();    
	$this->load->helper('form');
	$this->load->helper('url');
    $this->load->library('form_validation');
     $this->load->model('addressmodel');

  }
	public function Index()
	{

	$data['result']=$this->addressmodel->retrieve();
	$this->load->view('contactUs',$data);
	}
	  public function modifycontactus()
    {   
        $data['session_user']=$_SESSION['username'];
        $data['view'] = 'Updation / Contact-Us';
        $data['result']=$this->addressmodel->retrieve();
        $this->form_validation->set_rules('adr1line1','adr1line1','required');
        $this->form_validation->set_rules('adr1_line2','line2','required');
        $this->form_validation->set_rules('adr1_city','city','required');
        if($this->form_validation->run()!=false)
        {
        	$result= array('id'=>'','contactus1_line1'=>$this->input->post('adr1line1'),'contactus1_line2'=>$this->input->post('adr1_line2'),'contactus1_city'=>$this->input->post('adr1_city'),'contactus1_zip'=>$this->input->post('adr1_zip'),'contactus2_line1'=>$this->input->post('adr2_line1'),'contactus2_line2'=>$this->input->post('adr2_line2'),'contactus2_city'=>$this->input->post('adr2_city'),'contactus2_zip'=>$this->input->post('adr2_zip'),'mobile1'=>$this->input->post('mobile1'),'mobile2'=>$this->input->post('mobile2'),'phone'=>$this->input->post('phone'),'email'=>$this->input->post('email'));
        	//var_dump($result);
        	$this->addressmodel->modify($result);
        }
        $this->load->view('adminmodifycontactus',$data);
    }
}
?>