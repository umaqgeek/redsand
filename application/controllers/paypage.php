<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paypage extends CI_Controller
{

	public function __construct() 
	{
		parent::__construct();

		    $this->load->database();
		    $this->load->helper('url');

		    $this->load->library('grocery_CRUD');


		// Load form helper library
		  	$this->load->helper('form');

		// Load form validation library
		  	$this->load->library('form_validation');

		// Load session library
		   	$this->load->library('session');

		// Load database
		   	$this->load->model('gallery_model');
	}

	
	public function index()
	{
		$data = $this->_checkSession();

		if($data != false)
	    { 
			$this->load->library('pagination');
			$this->load->library('table');

			$config['base_url'] = 'http://www.dinarpal.coop/paypage/index';
			$config['total_rows'] =	$this->db->get('payproof')->num_rows();
			$config['per_page'] = 4;
			$config['num_links'] = 2;
			$config['full_tag_open'] = '<div id="pagination">';
			$config['full_tag_close'] = '</div>';

			$this->pagination->initialize($config);

			$data['nadia'] = $this->db->select('reference, date, source')->get('payproof', $config['per_page'], $this->uri->segment(3));
			$this->load->view('menus');
			$this->load->view('file_review',$data);
			$this->load->view('footer');
		}
		else
		{
			$this->_redirectPage();   
		}      		
	}

	
	
	function _checkSession($menu = false)
    {
	 	if($this->session->userdata('logged_in'))     
	 	{ 
			$data = $this->session->userdata('logged_in');
			return $data;
	 	}
	 	else
	 	{
		 	if($menu)
		 	{
				return false; 
		 	}
		 	else
		 	{
		 		return $this->_redirectPage();
		 	}
	 	}
		 
    }
 

    function _redirectPage()
    {
	 	redirect("/main/loginPage/1");
	 	return false;
    }
}

?>