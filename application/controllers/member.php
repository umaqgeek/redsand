<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}
	
	public function manageMember()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_table("user_login"); 	
			//$crud->set_theme('datatables');
			//$crud->set_field_upload('id','user_name','user_email','user_password','name','user_level');
			$crud->columns('id','user_name','user_email','user_password','name','phone','user_level');
			$crud->display_as('id','Number')
				 ->display_as('username','Username')
				 ->display_as('user_email','Email')
				 ->display_as('user_password','Password')
				 ->display_as('name','Full Name')
                                ->display_as('phone','phone')
				 ->display_as('user_level','Level');
			$crud->set_subject('Manage Member');
			//$crud->set_relation('id','username','user_email','user_password','name','user_level');

			$output = $crud->render();
            $this->load->view('v_member.php',$output);
			
			//$this->_viewMember($output); 

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
	
/*	public function _viewMember($output = null)
	{
		
		
		
		$this->load->view('menus');
		$this->load->view('v_member.php',$output);
		$this->load->view('footers');
	}*/
	
	
}
?>