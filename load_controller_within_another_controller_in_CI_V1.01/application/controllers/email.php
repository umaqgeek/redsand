<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Email extends CI_Controller 
{
 
  public function __construct() 
  {
   parent::__construct();
    $this->load->database();
   $this->load->helper('url');
  }
 
  function index()
  {
	  
	 $this->load->library('email');
  
      $config['mailtype'] = "html";
	 
	 $this->email->initialize($config);
	 $this->email->from('admin@dinarpal.com','DinarPal Co-Operative');
         $this->email->to('mohdhatta91@outlook.com');
         $this->email->subject('Registration Verification from DinarPal Co-Operative: Continuous Imapression');
         $this->email->message('<BR><BR> Thanks for signing up! <BR><BR> Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below. <BR><BR> Please click this link to activate your account:<a href="http://dinarpal.coop/">Click Here</a> ');


  if($this->email->send())
  {
      echo "Email send Yaaaaa";
  }
  else
  {
	  show_error($this->email->print_debugger()); 
  }
  
 }
 
 
}