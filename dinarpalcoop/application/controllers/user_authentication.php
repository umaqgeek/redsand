<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start(); //we need to start session in order to access it through CI

class User_Authentication extends CI_Controller {

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
  $this->load->library('grocery_CRUD'); 
  
   $this->load->library('email'); 
}

public function viewSummary() 
{
   $data = $this->_checkSession();
   if($data != false)
   {  
       $this->data['allmembers'] = $this->login_database->getMembers(); 
	   $this->load->view('v_summary',$this->data);      
   }
	else
    {
			$this->_redirectPage();	
    }
}
    function viewDetail()
	{
		$this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		$this->config->set_item('grocery_crud_default_per_page',10);
		
		$output1 = $this->viewMember();
		
		$js_files = $output1->js_files;
		$css_files = $output1->css_files;
		$output = $output1->output;

		$this->_example1234_output1234((object)array(
				'js_files' => $js_files,
				'css_files' => $css_files,
				'output'	=> $output
		));
	}
    public function _example1234_output1234($output = null)
	{
		$this->load->view('v_viewMember.php',$output);
	}
public function viewMember() 
{
	
   $data = $this->_checkSession();
   if($data != false)
   {  
   try{
			$crud = new grocery_CRUD();

			$crud->set_table("user_login"); 	
			$crud->set_theme('flexigrid');
			//$crud->set_primary_key('id_profile','user_login');
            $crud->columns('status','active','firstname','middlename','lastname','icnumber','user_email','street1','street2','district','postcode','state','country','firstnamew','middlenamew','lastnamew','icnumberw','emailw','street1w','street2w','districtw','postcodew','statew','countryw','any','statename');
		 //	$crud->unset_columns('user_name','user_email','user_password','user_level');
	//    $crud->add_fields('firstname','middlename','lastname','gender','icnumber','phone');
			$crud->edit_fields('user_name','user_email','user_password','user_level','firstname','middlename','lastname','gender','icnumber','user_email','street1','street2','district','postcode','state','country','firstnamew','middlenamew','lastnamew','icnumberw','emailw','street1w','street2w','districtw','postcodew','statew','countryw','any','statename','status','active');
			$crud->display_as('id_login','ID')
			     ->display_as('user_name','IC Number')
			     ->display_as('user_email','Email')
				 ->display_as('user_level','User level')
			     ->display_as('user_email','Email')
			     ->display_as('firstname','First Name')
			     ->display_as('middlename','Middle Name')
			     ->display_as('lastname','Last Name')
				 ->display_as('icnumber','IC Number')
			     ->display_as('gender','Gender')
			     ->display_as('phone','Phone')
			     ->display_as('date','Date')
			     ->display_as('street1','Street 1')
			     ->display_as('street2','Street 2')
			     ->display_as('destrict','District')
		         ->display_as('postcode','Postcode')
				 ->display_as('state','State')
				 ->display_as('country','Country')
				 ->display_as('firstnamew','First Name (B)')
			     ->display_as('middlenamew','Middle Name (B)')
			     ->display_as('lastnamew','Last Name (B)')
				 ->display_as('emailw','Email (B)')
				 ->display_as('icnumberw','IC Number (B)')
			     ->display_as('genderw','Gender (B)')
			     ->display_as('phonew','Phone (B)')
			     ->display_as('facebookurlidw','Facebook URL ID (B)')
			     ->display_as('datew','Date (B)')
			     ->display_as('street1w','Street 1 (B)')
			     ->display_as('street2w','Street 2 (B)')
			     ->display_as('districtw','District (B)')
		         ->display_as('postcodew','Postcode (B)')
				 ->display_as('statew','State (B)')
				 ->display_as('countryw','Country (B)')
				 ->display_as('any','Have any co-operative')
				 ->display_as('statename','Name co-operative')
				 ->display_as('active','Active status')
				 ->display_as('status','Account status');
				 $crud->field_type('user_password', 'password');
    $crud->callback_before_insert(array($this,'encrypt_password_callback'));
    $crud->callback_before_update(array($this,'encrypt_password_callback'));
    $crud->callback_edit_field('password',array($this,'decrypt_password_callback'));
 
				 
		 $crud->field_type('status','dropdown',array('Not' => 'Not', 'Verified' => 'Verified'));			 
      $crud->field_type('user_level','dropdown',array('0' => 'Administrator', '1' => 'General Manager','2' => 'DinarPal Member'));		 
	  $crud->field_type('gender','dropdown',array('Male' => 'Male', 'Female' => 'Female'));
      $crud->field_type('genderw','dropdown',array('Male' => 'Male', 'Female' => 'Female'));
	  $crud->field_type('any','dropdown',array('Yes' => 'Yes', 'No' => 'No'));
	  $crud->field_type('active','dropdown',array('Not Active' => 'Not Active', 'In Progress' => 'In Progress', 'Active' => 'Active'));		
	      
		   	$crud->order_by('id_login','desc');
		   	$crud->set_subject('Dinarpal Member');
            
  $crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/viewDetail")));
  
			$output = $crud->render();


		   if($crud->getState() != 'list') {
			$this->_example1234_output1234($output);
		   } else {
			 return $output;
	       	}
		  
		     
			 
			 

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
		
	}
	else
    {
			$this->_redirectPage();	
    }
 
}

function encrypt_password_callback($post_array, $primary_key = null)
{
    $this->load->library('encrypt');
 
    $key = 'super-secret-key';
    $post_array['password'] = $this->encrypt->encode(sha1($post_array['password']), $key);
    return $post_array;
}
 
function decrypt_password_callback($value)
{
    $this->load->library('encrypt');
 
    $key = 'super-secret-key';
    $decrypted_password = $this->encrypt->decode($value,$key);
    return "<input type='password' name='password' value='sha1($decrypted_password)' />";
}



public function downloadSource()
	{
		$data = $this->_checkSession();
	   	if($data != false)
       	{    
		try{
			$crud = new grocery_CRUD();

			$crud->set_table("user_download"); 	
			$crud->set_theme('flexigrid');
			$crud->set_field_upload('source','file');
			$crud->unset_add();  
			$result = $this->login_database->retrive($data);
	 
	        if($result != false)
	        {
              $data = array
		      (
		       'userlevel' =>$result[0]->user_level
              );
			}
			
			if($data['userlevel']=='2')
			{
			 $crud->unset_delete();	
			 $crud->unset_edit();	
			}

             $output = $crud->render();

		     $crud->order_by('id_download','desc');
		$this->load->view('v_download',$output);
		

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
		
	}
	else
    {
			$this->_redirectPage();	
    }
		
}
	

public function manageShare()
	{
		
		
		$data = $this->_checkSession();
	   	if($data != false)
       	{    
           
		try{
			$crud = new grocery_CRUD();

			$crud->set_table("user_login"); 	
			$crud->set_theme('flexigrid');
	     	$crud->columns('firstname','middlename','lastname','icnumber','fee','available','history');
			$crud->display_as('id_login','ID')
			     ->display_as('firstname','Fisrt name')
			     ->display_as('middlename','Middle name')
			     ->display_as('lastname','Last name')
				 ->display_as('icnumber','IC Number')
			     ->display_as('fee','Entering Fee')
			     ->display_as('available','Available Share')
			     ->display_as('history','Share History');
			$crud->order_by('id_login','desc'); 
            $crud->edit_fields('fee','available','history');
			
			$result = $this->login_database->retrive($data);
	 
	        if($result != false)
	        {
              $data = array
		      (
		       'userlevel' =>$result[0]->user_level
              );
			}
		
		$crud->unset_add();
		$crud->unset_print(); 
		$crud->unset_export();
		$crud->unset_delete();
		
          $crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/viewShare")));
  
			$output = $crud->render();


		   if($crud->getState() != 'list') {
			$this->_example5678_output5678($output);
		   } else {
			 return $output;
	       	}

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
		
	}
	else
    {
			$this->_redirectPage();	
    }
		
}	
	

   function viewShare()
	{
		$this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		$this->config->set_item('grocery_crud_default_per_page',10);
		
		$output1 = $this->manageShare();
		
		
		$js_files = $output1->js_files;
		$css_files = $output1->css_files;
		$output = $output1->output;

		$this->_example5678_output5678((object)array(
				'js_files' => $js_files,
				'css_files' => $css_files,
				'output'	=> $output
		));
	}


    public function _example5678_output5678($output = null)
	{
		$this->load->view('v_manageShare.php',$output);
	}
	
	
public function share()
{

		$data = $this->_checkSession();
	   	if($data != false)
       	{    
            
			$result = $this->login_database->retrive($data);
	 
	        if($result != false)
	        {
              $data = array
		      (
		     
			   'fee'          =>$result[0]->fee,
			   'available'    =>$result[0]->available,
			   'history'     => $result[0]->history
              );	
			 $this->load->view('v_share',$data);
             
          }
		}
		else
		{
			$this->_redirectPage();	
		}
			
}


public function manageLeverage()
	{
		
		
		$data = $this->_checkSession();
	   	if($data != false)
       	{    
           
		try{
			$crud = new grocery_CRUD();

			$crud->set_table("user_login"); 	
			$crud->set_theme('flexigrid');
		    $crud->columns('firstname','middlename','lastname','icnumber','dividen','bonus','profit');
			$crud->display_as('id_login','Id')
			     ->display_as('firstname','Fisrt name')
			     ->display_as('middlename','Middle name')
			     ->display_as('lastname','Last name')
				 ->display_as('icnumber','IC Number')
			     ->display_as('dividen','Dividen')
			     ->display_as('bonus','Share Bonus')
			     ->display_as('profit','Profit Sharing');
				 
			$crud->order_by('id_login','desc');
			$crud->edit_fields('dividen','bonus','profit');
			
			
		
			$crud->unset_add();
		$crud->unset_print(); 
		$crud->unset_export();
		$crud->unset_delete();

 $crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/viewLeverage")));
  
			$output = $crud->render();


		   if($crud->getState() != 'list') {
			$this->_example5678_output5678($output);
		   } else {
			 return $output;
	       	}
		

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}		
	}
	else
    {
			$this->_redirectPage();	
    }
		
}

function viewLeverage()
	{
		$this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		$this->config->set_item('grocery_crud_default_per_page',10);
		
		$output1 = $this->manageLeverage();
		
		
		$js_files = $output1->js_files;
		$css_files = $output1->css_files;
		$output = $output1->output;

		$this->_example9101_output9101((object)array(
				'js_files' => $js_files,
				'css_files' => $css_files,
				'output'	=> $output
		));
	}


    public function _example9101_output9101($output = null)
	{
		$this->load->view('v_manageLaverage.php',$output);
	}
	
	

public function laverage()
{
        $data = $this->_checkSession();
	   	if($data != false)
       	{   
            
			$result = $this->login_database->retrive($data);
	 
	        if($result != false)
	        {
              $data = array
		      (
					 'dividen'     =>$result[0]->dividen,
					 'bonus'       =>$result[0]->bonus,
					 'profit'      => $result[0]->profit
			  );
					
					
			
			 $this->load->view('v_laverage',$data);
             
           }
		}
		else
		{
			$this->_redirectPage();	
		}
			
}




public function manageAccount()
{

		$data = $this->_checkSession();
	   	if($data != false)
       	{             
			$result = $this->login_database->retrive($data);       
			 
	        if($result != false)
	        {
              $data = array
		      (
               'id' =>$result[0]->id_login,
               'username' =>$result[0]->user_name,
               'email' =>$result[0]->user_email,
               'password' =>$result[0]->user_password,
			   
			   'firstname'     =>$result[0]->firstname,
		       'middlename'    =>$result[0]->middlename,
		       'lastname'      =>$result[0]->lastname,
		       'gender'        =>$result[0]->gender,
		       'icnumber'      =>$result[0]->icnumber,
		       'phone'         =>$result[0]->phone,
		       'facebookurlid' =>$result[0]->facebookurlid,
		       'date'          =>$result[0]->date,
		       'street1'       =>$result[0]->street1,
		       'street2'       =>$result[0]->street2,
		       'district'      =>$result[0]->district,
		       'postcode'      =>$result[0]->postcode,
		       'state'         =>$result[0]->state,
		       'country'       =>$result[0]->country,
		   
		       'firstnamew'     =>$result[0]->firstnamew,
		       'middlenamew'    =>$result[0]->middlenamew,
		       'lastnamew'      =>$result[0]->lastnamew,
		       'icnumberw'      =>$result[0]->icnumberw,
		       'genderw'        =>$result[0]->genderw,
		       'phonew'         =>$result[0]->phonew,
		       'emailw'         =>$result[0]->emailw,
		       'facebookurlidw' =>$result[0]->facebookurlidw,
		       'datew'          =>$result[0]->datew,
		       'street1w'       =>$result[0]->street1w,
		       'street2w'       =>$result[0]->street2w,
		       'districtw'      =>$result[0]->districtw,
		       'postcodew'      =>$result[0]->postcodew,
		       'statew'         =>$result[0]->statew,
		       'countryw'       =>$result[0]->countryw,
			   'status'         =>$result[0]->status
		   
              ); 
			 
			 $this->load->view('v_manageAccount',$data); 
            
           }
		}
		else
		{
			$this->_redirectPage();	
		}
			
}	

	
public function updateAccountProcess($id)
{
	$data['id'] = $id;
	
	$data = array
	  (
            'user_name' => $this->input->post('username'),
            'user_email' => $this->input->post('email'),
		    'user_password' => $this->_prep3781_password2024($this->input->post('pwd1')),
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
		 
            $this->session->unset_userdata('username');
	        $this->session->sess_destroy();
			redirect(site_url('main/loginPage'));
            //redirect(site_url('user_authentication/updateAccountProcess'));
}




// Validate and store registration data in database



 private function _prep3781_password2024($password) {
    return sha1($password . $this->config->item('encryption_key'));
 }
  
public function new_user_registration() 
{
	
      $data = array
	  (
           'user_name' => $this->input->post('username'),
           'user_email' => $this->input->post('email'),
           'user_password' => $this->_prep3781_password2024($this->input->post('pwd1')),
		   'user_level' =>$this->input->post('userlevel'),
		   
		   'firstname' => $this->input->post('firstname'),
		   'middlename' => $this->input->post('middlename'),
           'lastname' => $this->input->post('lastname'),
		   'icnumber' => $this->input->post('icnumber'),
           'gender' => $this->input->post('sex'),
		   'phone' =>$this->input->post('phone'),
		   'facebookurlid' =>$this->input->post('facebookurlid'),
		   'date' =>$this->input->post('date'),
		   'street1' =>$this->input->post('street1'), 
		   'street2' =>$this->input->post('street2'),
		   'district' =>$this->input->post('district'),
		   'postcode' =>$this->input->post('postcode'),
		   'state' =>$this->input->post('state'),
		   'country' =>$this->input->post('country'),
		   
		   'firstnamew' => $this->input->post('firstnamew'),
		   'middlenamew' => $this->input->post('middlenamew'),
           'lastnamew' => $this->input->post('lastnamew'),
		   'icnumberw' => $this->input->post('icnumberw'),
           'genderw' => $this->input->post('sexw'),
		   'phonew' =>$this->input->post('phonew'),
		   'emailw' =>$this->input->post('emailw'),
		   'facebookurlidw' =>$this->input->post('facebookurlidw'),
		   'datew' =>$this->input->post('datew'),
		   'street1w' =>$this->input->post('street1w'), 
		   'street2w' =>$this->input->post('street2w'),
		   'districtw' =>$this->input->post('districtw'),
		   'postcodew' =>$this->input->post('postcodew'),
		   'statew' =>$this->input->post('statew'),
		   'countryw' =>$this->input->post('countryw'),
		    
		   'any' =>$this->input->post('any') , 
		   'statename' =>$this->input->post('statename'),
		   
		
     
      );
       
	  $result = $this->login_database->registration_insert($data) ;
     
	
	   require('main.php');
	   if ($result == TRUE )
	   {    
	     
		 
		 
		  $email = $this->input->post('email');
          $rand= random_string('unique');

         // $this->user_model->save_user($rand);
		 
		  $this->load->library('email');
		 
		   $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';
          $this->email->initialize($config);
          $this->email->from('dinarpal.coop','DinarPal Co-Operative');
          $this->email->to($this->input->post('email'));
          $this->email->subject('Registration Verification: Continuous Imapression');
          $this->email->message('     Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
Please click this link to activate your account:<a href='.site_url('user/verify').'?email='.$email.'&rand='.$rand.'>Click Here</a>');
         $this->email->send();
		 
		 print_r($this->email->print_debugger());
		 echo $this->email->print_debugger();
		 
		 $this->session->set_flashdata('registered','Now you can login and Please check in your <B>'.$email.'</B> email account');
	     redirect('main/loginPage/0/0/1');
				  
       } 
	   else 
	   {
		   $this->session->set_flashdata('errorregistered','Sorry, maybe you have been registered already before this!');
           $data['message_display'] = "<script>alert('Your IC Number or Email already exist!')</script>";
		   
		   $temp = new Main;
		   $temp->showMenu();
		   unset($temp);
           $this->load->view('registration_form', $data);
		   $this->load->view("footer");	
       }
    
}


// Check for user login process
public function user_login_process() 
{
  
       $data = array
	   (
       'username' => $this->input->post('username'),
       'password' => $this->_prep3781_password2024($this->input->post('password'))
       );
      $result = $this->login_database->login($data);
      
	  
	  if($result == TRUE)
	  {
         $sess_array = array
		 (
          'username' => $this->input->post('username')
         );
    
		 
      // Add user data in session
         $this->session->set_userdata('logged_in', $sess_array);
         $result = $this->login_database->read_user_information($sess_array);
	     if($result != false)
	     {
           $data = array
		    (
		      'userlevel'  =>$result[0]->user_level
			  
            );      
		  }
	          
		
		
	    redirect('/main/user/9');
		    
      }
	  else
	  {
		$this->session->set_flashdata('errorlogin','Your <B> IC Number</B> and <B> Password </B>is wrong, Please try again');
        redirect("/main/loginPage/0/1");
      }
	 
	
   
}


public function reset_password() 
{

	  $data = array
	  (
	    'user_email' => $this->input->post('email'),
            'user_password' => $this->_prep3781_password2024($this->input->post('pwd1'))
           );
	  
	  
	   
	  $this->db->update('user_login', $data);
	  
	  $email = $this->input->post('email');
	  
	  $this->session->set_flashdata('resetpassword','Now you can login with new password and Please check in your <B>'.$email.'</B> email account');
	  redirect("/main/loginPage");  
}



public function forgot_password() 
{
	$ic = $_POST['icnumber'];
	
	$data = array
	(
      'icnumber' => $ic
     );
	
	$result = $this->login_database->checkICNumber($data);
	
	if($result != false)
    {
        $data = array
		(
		  'icnumber'   =>$result[0]->user_name,	
		  'firstname'  =>$result[0]->firstname,	  
		  'middlename' =>$result[0]->middlename,	  
		  'lastname'   =>$result[0]->lastname,
		  'email'      =>$result[0]->user_email  
        );      
	}
		  
	
	
    echo $this->load->view('forgotpass',$data);
   
}

public function update_forgot_password()
{
 if(isset($_POST['icnumber']))
 {
	$icnumber = $this->db->get_where("user_login",array("user_name ="=>$_POST['icnumber']))->result(); 
	if(!empty($icnumber))
	{
	  echo "Yes";
	}
	else
	{
	  echo "No";
	
	}
 }
 
}

// Logout from admin page
public function logout() {

// Removing session data
$sess_array = array(
'username' => ''
);
$this->session->unset_userdata('logged_in', $sess_array);
$this->session->sess_destroy();
$data['message_display'] = "<script>alert('Successfully Logout!')</script>";

   
   redirect('/main');
 
 }

public function homes() 
{
		$data = $this->_checkSession();
	   	if($data != false)
       	{ 
			$result = $this->login_database->retrive($data);
		   if($result != false)
		   {
			 $data = array
			 (
			   'userlevel'     =>$result[0]->user_level,
			   'firstname'     =>$result[0]->firstname,
			   'middlename'    =>$result[0]->middlename,
			   'lastname'      =>$result[0]->lastname,
			   'active'        =>$result[0]->active,
			  );
			
			$this->load->view('homes',$data);
							   
			}	   	 
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