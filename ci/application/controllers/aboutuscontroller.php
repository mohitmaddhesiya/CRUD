<?php if (!defined('BASEPATH')) die('Direct access to the script is not allowed');

class aboutusController extends CI_Controller 
{

	function __construct() {
    parent::__construct();
	$this->load->helper('form');
	$this->load->helper('url');
    $this->load->library('form_validation');
    
    }
	public function Index()
	{

	$this->load->view('aboutUs');
	}
}
?>