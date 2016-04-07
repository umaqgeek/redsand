<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {

public function __construct() {
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
	
public function index()
{
		
	$data = $this->_checkSession();
	if($data != false)
    { 
	     $this->load->model('login_database');
		 $result = $this->login_database->retrive($data);
		 if($result[0]->user_level == '0')
		 {
			unset($result);
            require('main.php');
		    $temp = new Main;
		    $temp->showMenu();
		    unset($temp);
		    $this->load->view('index');
		   	$this->load->view('footer');
		
		 }
		 else
		 {
				echo "Awak Bkan Admin";	
		 }
	  }
	  else
	  {
			$this->_redirectPage();   
	  }      
		
}
	
	
	
	function files()
	{
	 $this->load->model('file_model','b');
	 $this->load->view('files');
	 
	}
	
	
	
	public function upload_file()
	{
      $status = "";
	  $msg = "";
	  $filename = 'source';
	  
	  if(empty($_POST['title']) || empty($_POST['date']))
	  {
		$status="error";
		 $data['message_display'] = "<script>alert('Plese enter title or date')</script>";
	     $this->load->view('index',$data);
		
	  }
	  
	  if($status != "error")
	  {
		$config['upload_path'] = 'file/';
		$config['allowed_types'] = 'pdf|doc|docx';
        $config['max_size']    = 1024*8;
        $config['encrypt_name'] = true; 
		
		$this->load->library('upload',$config);
		
		if(!$this->upload->do_upload($filename))
		{
		 $status = 'error';
		 $msg = $this->upload->display_errors('','');
		}
		else
		{
	      $this->load->model('file_model');
		  $data = $this->upload->data();
		  $file_id = $this->file_model->insert_file($_POST['title'],$_POST['date'],$data['file_name']);
		
		  if($file_id)
		  {
		     redirect('main/user/3');
		  }
		  else
		  {
			  unlink($data['full_path']);
			  $status = "error";
			  $msg = "Please try again";
			  
		  }
		  
		}
		@unlink($_FILES[$filename]);
	  }
	 // echo json_encode(array('status'=>$status, 'msg'=>$msg));
	}
	
	
	function _checkSession($menu = false)
    {
	 if($this->session->userdata('logged_in'))     
	 { 
		$data = $this->session->userdata('logged_in');
		return $data;
	 }else
	 {
		 if($menu)
		 {
			return false; 
		 }else
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