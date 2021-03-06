<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller
{

	public function __construct() 
	{
		parent::__construct();

		    $this->load->database();
		    $this->load->helper('url');

		    $this->load->library('grocery_CRUD');

		    $this->load->library('upload');

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
                        
//                        echo $result[0]->user_level; die();

			if($result[0]->user_level == '0')
			{
				unset($result);
                                require('main.php');
                                $temp = new Main;
                                $temp->showMenu();
                                unset($temp);
                                $this->load->view('payment');
			   	$this->load->view('footer');
			
			}
			elseif($result[0]->user_level == '1')
			{	
			 	unset($result);
                                require('main.php');
				$temp = new Main;
				$temp->showMenu();
				unset($temp);
				$this->load->view('payments');
				$this->load->view('footer');
			}
			else
			{	
			 	unset($result);
                                require('main.php');
				$temp = new Main;
				$temp->showMenu();
				unset($temp);
                                $sess = $this->session->all_userdata();
                                $user_name = $sess['logged_in']['username'];
                                $data['isPayFee'] = $this->gallery_model->isPayFee($user_name);
				$this->load->view('payments', $data);
				$this->load->view('footer');
			}	
		}
		else
		{
			$this->_redirectPage();   
		}      
			
	}

	function view()
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


	function files()
	{
	 $this->load->model('gallery_model','b');
	 $this->load->view('file_upload');
	 
	}
	
	
	public function do_upload()
	{
		$status = "";
		$msg = "";
	  	$filename = 'source';
	  	
	  	//print_r($_POST); die();
	  	//print_r($this->session->all_userdata()); die();
	  
	  	if(empty($_POST['reference']) || empty($_POST['dates']))
	  	{
			$status="error";
		 	$data['message_display'] = "<script>alert('Plese enter title or date')</script>";
	     	$this->load->view('payment',$data);
	  	}
	  
	  	if($status != "error")
	  	{
			$config['upload_path']   = 'file/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png|jpe|bmp|tif|tiff|JPG|JPEG|JPE|PNG|BMP|GIF|TIF|TIFF';
	        $config['max_size']      = '120';
	        $config['encrypt_name']  = true; 
			
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
		
			if(!$this->upload->do_upload($filename))
			{
			 	$error = array('error' => $this->upload->display_errors());
				$this->load->view('upload_forms', $error);
			}
			else
			{
				//$config['image_library']  = 'ImageMagick';
				$config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
				$config['maintain_ratio'] = TRUE;
				$config['quality'] = '30';
				$config['width']   = 600;
  				$config['height']  = 600;

				$this->load->library('image_lib', $config);

				if ( ! $this->image_lib->resize())
				{
					$this->session->set_flashdata('message', $this->image_lib->display_errors('', ''));
				}

		      	$this->load->model('gallery_model');
			  	
			  	$logged_in = $this->session->userdata('logged_in');
				$username = $logged_in['username'];

				$data = $this->upload->data($username);
				$file_id = $this->gallery_model->insert_file($_POST['reference'],$_POST['dates'],$_POST['statuses'],$data['file_name'],$username);
				
			
			  	if($file_id)
			  	{
			     	redirect('main/user/13');
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

		public function upload_pic()
		{
			$status = "";
			$msg = "";
		  	$filename = 'source';
		  	
//		  	print_r($_POST); die();
		  	$sess = $this->session->all_userdata();
		  	//print_r($sess['logged_in']); die();
		  	
		  	$username = $sess['logged_in']['username'];
		  	$fee = (isset($_POST['fee']) && !empty($_POST['fee'])) ? (100) : (0);
                        
//                        if ($fee == -1)
//                        {
//                            $status="error";
//                            $data['message_display'] = "<script>alert('Plese tick the entering fee!')</script>";
//                            $this->load->view('payments',$data);
//                        }
                        
		  	$available = (isset($_POST['Entering_Share']) && !empty($_POST['Entering_Share'])) ? ($_POST['Entering_Share']) : (0);
                        $available = $available * 1000;
                        
                        if ($available == 0 && $fee == 0)
                        {
                            $status="error";
                            $data['message_display'] = "<script>alert('Please enter a valid entering share!')</script>";
                            $this->load->view('payments',$data);
                        }
		  
		  	if(empty($_POST['reference']) || empty($_POST['dates']))
		  	{
				$status="error";
			 	$data['message_display'] = "<script>alert('Plese enter title or date')</script>";
                                $this->load->view('payments',$data);
		  	}
                        
//                        die();
		  
		  	if($status != "error")
		  	{
                            
                            $users_x = $this->login_database->view_by_username($username);
//                            print_r($users_x); die();
                            
                            $fee_curr = $fee;
                            $available_curr = $available;
                            $fee = (isset($users_x) && !empty($users_x)) ? ($users_x[0]->fee + $fee) : ($fee);
                            $available = (isset($users_x) && !empty($users_x)) ? ($users_x[0]->available + $available) : ($available);
                            
				$config['upload_path']   = './file/';
				$config['allowed_types'] = 'gif|jpg|jpeg|png|jpe|bmp|tif|tiff|JPG|JPEG|JPE|PNG|BMP|GIF|TIF|TIFF';
                                $config['max_size']      = '120000';
                                $config['encrypt_name']  = true; 
				
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
			
				if(!$this->upload->do_upload($filename))
				{
				 	$error = array('error' => $this->upload->display_errors());
					$this->load->view('upload_forms2', $error);
				}
				else
				{
				    $this->load->model('gallery_model');

				    $logged_in = $this->session->userdata('logged_in');
					$username = $logged_in['username'];

					$data = $this->upload->data($username);
					$file_id = $this->gallery_model->insert_file($_POST['reference'],$_POST['dates'],$_POST['statuses'],$data['file_name'],$username, $fee_curr, $available_curr);
					$data_ld = array(
						'fee' => $fee,
						'available' => $available
					);
					$this->load->model('login_database');
					$this->login_database->update1_username($username, $data_ld);
					
					if($file_id)
					{
						//require('main.php');
						//$temp = new Main;
						//$temp->showMenu();
						//unset($temp);
					    //$data['message_display'] = "<script>alert('Your File is Successful Uploaded')</script>";
					    //$this->load->view('payments',$data);
					    //$this->load->view('footer');
					    redirect('main/user/14');
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