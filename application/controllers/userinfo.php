<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Userinfo extends CI_Controller
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
		   	$this->load->model('login_database');
	}

	private $limit = 4;

	public function index( $offset = 0, $order_column = 'id_login', $order_type = 'asc') 
    {
    	// check
    	if (empty($offset)) $offset = 0;
    	if (empty($order_column)) $order_column = 'id_login';
    	if (empty($order_type)) $order_type = 'asc';
    	//TODO: check for valid column

    	//load data
    	$person = $this->login_database->list($this->limit, $offset, $order_column, $order_type)->result();
	    
	    //generate pagination
	    $this->load->library('pagination');

	    $config['base_url']= base_url().'/userinfo/index';
	    $config['total_rows'] = $this->login_database->count_all();
	    $config['per_page']= $this->limit;
	    $config['uri_segment'] = 3;
	    $config['first_link'] = 'First';
	    $config['last_link'] = 'Last';
	  	$config['num_link'] = 5; 
	    
	    $this->pagination->initialize($config);
	    
	    //generate table data
	    $this->load->library('table');

	    $this->table->set_empty("&nbsp;");
	    $new_order = ($order_type == 'asc' ? 'desc' : 'asc');
	    $this->table->set_heading(
	    	anchor('userinfo/index/'.$offset.'/id_login/'.$new_order, 'ID'),
	    	anchor('userinfo/index/'.$offset.'/status/'.$new_order, 'Status'),
	    	anchor('userinfo/index/'.$offset.'/firstname/'.$new_order, 'First Name'),
                'Action'
	    	
	    	);
		$i = 0 + $offset;
		foreach($persona as $person)
		{
			$this->table->add_row(++$i, $person->id_login, $data->status, $data->firstname,
				anchor('userinfo/view/'.$person->id_login,'View)').' '.
				anchor('userinfo/edit/'.$person->id_login,'Edit').' '.
				anchor('userinfo/delete/'.$person->id_login,'Delete', array('onclick'=>"return confirm('Delete file!!')"))
				);
	
			$this->load->view('persona');
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