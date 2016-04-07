<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pag extends CI_Controller {
    /**
     * Index Page for this controller.
     */
    public function __construct() {
        parent:: __construct();
        $this->load->helper("url");
        $this->load->model('PagModel', 'pag');
        $this->load->library("pagination");

    }

    public function index( $offset = 0 ) 
    {
    	require('main.php');
		$temp = new Main;
		$temp->showMenu();
		unset($temp);

	    $offset = ($this->uri->segment(3) != '' ? $this->uri->segment(3): 0);
	    $config['total_rows'] = $this->pag->total_count();;
	    $config['per_page']= 10;
	    $config['first_link'] = 'First';
	    $config['last_link'] = 'Last';
	    $config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
	    $config['uri_segment'] = 3;
	    $config['base_url']= base_url().'/pag/index'; 
	    $config['suffix'] = '?'.http_build_query($_GET, '', "&"); 
	    $this->pagination->initialize($config);
	    $this->data['paginglinks'] = $this->pagination->create_links();
	        // Showing total rows count 
	    if($this->data['paginglinks']!= '') {
	      $this->data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->pagination->total_rows;
	    }   
	    $this->data['result'] = $this->pag->get_users($config["per_page"], $offset);  
	    $this->load->view('menus');
	    $this->load->view('page_view', $this->data);
	    $this->load->view('footer');
    }

   	function view($id)
   	{
	   	$this->load->model('login_database');
   		$data['person'] = $this->login_database->view_by($id);

   		require('main.php');
		$temp = new Main;
		$temp->showMenu();
		unset($temp);

   		$this->load->view('v_table',$data);
   		$this->load->view('footer');
   	}

   	function edit($id)
   	{
   		$this->load->model('login_database');
		$data['single'] = $this->login_database->view_by($id);

		require('main.php');
		$temp = new Main;
		$temp->showMenu();
		unset($temp);

		$this->load->view('detailmember', $data);
		$this->load->view('footer');
	}

   	function update($id) 
   	{
   		$this->load->model('login_database');

   		$data['id'] = $id;

		$data = array(

				'firstname'     =>$this->input->post('firstname'),
			    'middlename'    =>$this->input->post('middlename'),
				'lastname'      =>$this->input->post('lastname'),
				'gender'        =>$this->input->post('sex'),
				'icnumber'      =>$this->input->post('icnumber'),
				'phone'         =>$this->input->post('phone'),
				'facebookurlid' =>$this->input->post('facebookurlid'),
				'date'          =>$this->input->post('date'),
				'street1'       =>$this->input->post('street1'),
				'street2'       =>$this->input->post('street2'),
			    'district'      =>$this->input->post('district'),
			    'postcode'      =>$this->input->post('postcode'),
				'state'         =>$this->input->post('state'),
				'country'       =>$this->input->post('country'),

				'firstnamew'     =>$this->input->post('firstnamew'),
				'middlenamew'    =>$this->input->post('middlenamew'),
			    'lastnamew'      =>$this->input->post('lastnamew'),
				'icnumberw'      =>$this->input->post('icnumberw'),
				'genderw'        =>$this->input->post('sexw'),
				'phonew'         =>$this->input->post('phonew'),
				'emailw'         =>$this->input->post('emailw'),
				'facebookurlidw' =>$this->input->post('facebookurlidw'),
				'datew'          =>$this->input->post('datew'),
			    'street1w'       =>$this->input->post('street1w'),
				'street2w'       =>$this->input->post('street2w'),
				'districtw'      =>$this->input->post('districtw'),
				'postcodew'      =>$this->input->post('postcodew'),
				'statew'         =>$this->input->post('statew'),
				'countryw'       =>$this->input->post('countryw') 
	           
	        );

		$this->db->where('id_login', $id);
	    $this->db->update('user_login', $data);

	    redirect('pag/edit/'.$id);


		//$this->show_id($id);*/
	}
	


	function delete($id = "")
	{
		$this->db->delete('user_login', array('id_login'=> $id));
		redirect('pag/index/');
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