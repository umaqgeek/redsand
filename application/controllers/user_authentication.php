<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start(); //we need to start session in order to access it through CI

class User_Authentication extends CI_Controller 
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
	   	// Load pagination library
	   	$this->load->library('pagination');

		// Load database
	   	$this->load->model('login_database');
	  	$this->load->library('grocery_CRUD');  
	}


	public function viewSummary() 
	{
	   	$data = $this->_checkSession();
	   	
	   	
	   	if($data != false)
	   	{  
	       		$this->data['allmembers'] = $this->login_database->getMembers();
	       		$this->load->model('search_model'); 
	       		$regUser = $this->search_model->getSummary();
	       		$activeUser = $this->search_model->getSummaryActive();
	       		$verifiedUser = $this->search_model->getSummaryVerified();
	       		$closedUser = $this->search_model->getSummaryClosed();
	       		$totalMYR=$this->search_model->getSummaryTotalMYR();
	       		$pendingUser = $this->search_model->getSummaryPending();
	       		$completeUser = $this->search_model->getSummaryComplete();
	       		$shareUnit=$this->search_model->getShareUnit();
	       		$shareTotal=$this->search_model->getShareTotalMYR();
	       		$sharePending=$this->search_model->getSharePending();
	       		$shareComplete=$this->search_model->getShareComplete();
	       		$laverageDividen=$this->search_model->getLaverageDividen();
	       		$laverageSharing=$this->search_model->getLaverageSharing();
	       		$laverageBonus=$this->search_model->getLaverageBonus();
	       		$state1 = $this->search_model->getState1();
	       		$state2 = $this->search_model->getState2();
	       		$state3 = $this->search_model->getState3();
	      		$state4 = $this->search_model->getState4();
	      		$state5 = $this->search_model->getState5();
	       		$state6 = $this->search_model->getState6();
	       		$state7 = $this->search_model->getState7();
	      		$state8 = $this->search_model->getState8();
	      		$state9 = $this->search_model->getState9();
	      		$state10 = $this->search_model->getState10();
	      		$state11 = $this->search_model->getState11();
	      		$state12 = $this->search_model->getState12();
	      		$state13 = $this->search_model->getState13();
	      		$state14 = $this->search_model->getState14();
	      		$state15 = $this->search_model->getState15();
	       		$state16 = $this->search_model->getState16();
	      		$this->data['countRegUser'] = sizeof($regUser);
	       		$this->data['countActiveUser'] = sizeof($activeUser);
	                $this->data['countVerifiedUser']= sizeof($verifiedUser);
	                $this->data['countClosedUser']=sizeof($closedUser);
	                $this->data['countTotalMYR']=$totalMYR[0]->total_fee;
	                $this->data['countPendingUser']=sizeof($pendingUser);
	                $this->data['countCompleteUser']=sizeof($completeUser);
	                $this->data['countState1']=sizeof($state1);
	                $this->data['countState2']=sizeof($state2);
	                $this->data['countState3']=sizeof($state3);
	                $this->data['countState4']=sizeof($state4);
	                $this->data['countState5']=sizeof($state5);
	                $this->data['countState6']=sizeof($state6);
	                $this->data['countState7']=sizeof($state7);
	                $this->data['countState8']=sizeof($state8);
	                $this->data['countState9']=sizeof($state9);
	                $this->data['countState10']=sizeof($state10);
	                $this->data['countState11']=sizeof($state11);
	                $this->data['countState12']=sizeof($state12);
	                $this->data['countState13']=sizeof($state13);
	                $this->data['countState14']=sizeof($state14);
	                $this->data['countState15']=sizeof($state15);
	                $this->data['countState16']=sizeof($state16);
	                $this->data['countShareUnit']=sizeof($shareUnit);
	                $this->data['countShareTotalMYR']=$shareTotal[0]->total_share;
	                $this->data['countSharePending']=sizeof($sharePending);
	                $this->data['countShareComplete']=sizeof($shareComplete);
	                $this->data['countLaverageDividen']=$laverageDividen[0]->total_dividen;
	                $this->data['countLaverageSharing']=$laverageSharing[0]->total_sharing;
	                $this->data['countLaverageBonus']=$laverageBonus[0]->total_bonus;
	           
	  		$this->load->view('v_summary',$this->data); 
	       	     
	   	}
		else
	    {
			$this->_redirectPage();	
	    }
	}


	public function viewTable()
	{
	   	$data = $this->_checkSession();
	   	
	   	if($data != false)
	   	{   	
	       	$result = $this->login_database->retrive($data);
		 
		        if($result != false)
		        {
	              	$data = array
			      		(
			       			'username' =>$result[0]->user_name,
			       			'icnumber' =>$result[0]->icnumber
	              		);

	              	
	              		$this->db->where('user_name', $this->input->post('user_name'));
		        		$query = $this->db->get('user_login');
		        		$data['individual'] = $query->result();
		        		$this->load->view('v_table',$data);
	            
				}
					//if($data['username'] == $data['username'])
					//{
					//	$data['individual'] = $this->login_database->getTables();
					//	$this->load->view('v_table',$data);
					//}
	   	}
		else
	    {
			$this->_redirectPage();	
	    }
	}

	public function viewPic() 
	{  	
	   		$this->load->model('gallery_model');

			$logged_in = $this->session->userdata('logged_in');
			$username = $logged_in['username'];
			//print_r($this->session->all_userdata());
	   		$data['pic'] = $this->gallery_model->join1($username);

	   		$this->load->view('menus');
	   		$this->load->view('v_pic',$data);
	   		//print_r($data);
	   		$this->load->view('footer');
	}


	function edit()
	{
		
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
				'js_files' 	=> $js_files,
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
					$crud->required_fields('user_name','user_email','user_level','user_password');
				
	            	$crud->columns('status','active','firstname','middlename','lastname','gender','icnumber','user_email','state');
				//	$crud->unset_columns('user_name','user_email','user_password','user_level');
				//  $crud->add_fields('firstname','middlename','lastname','gender','icnumber','phone');
					$crud->edit_fields('user_name','user_password','user_email','user_level','firstname','middlename','lastname','gender','icnumber','street1','street2','district','postcode','state','country','firstnamew','middlenamew','lastnamew','icnumberw','emailw','street1w','street2w','districtw','postcodew','statew','countryw','any','statename','status','active');
					$crud->display_as('id_login','ID')
				    	 ->display_as('user_name','IC Number')
				    	 ->display_as('user_email','Email')
				    	 ->display_as('user_level','User level')
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
						 
				//	$crud->field_type('user_password', 'password' );
	   				$crud->callback_edit_field('password',array($this,'field_callback_1'));
	   				$crud->callback_add_field('password',array($this,'field_callback_1'));
	  			//  $crud->callback_before_update(array($this,'encrypt_password_callback'));
	 

					function field_callback_1($value, $primary_key)
					{
	    				return '+30 <input type="text" maxlength="3" value="'.$value.'" name="password" style="width:462px">';
					}
	 

					$crud->field_type('active','dropdown',array('Active' => 'Active', 'Not Active' => 'Not Active' ));			 
					$crud->field_type('status','dropdown',array('Not' => 'Not', 'Verified' => 'Verified'));			 
	    			$crud->field_type('user_level','dropdown',array('0' => 'Administration', '1' => 'General Manager','2' => 'DinarPal Member'));		 
					$crud->field_type('gender','dropdown',array('Male' => 'Male', 'Female' => 'Female'));
	    			$crud->field_type('genderw','dropdown',array('Male' => 'Male', 'Female' => 'Female'));
					$crud->field_type('any','dropdown',array('Yes' => 'Yes', 'No' => 'No'));
					
					$crud->order_by('id_login','desc');
					$crud->set_subject(' KODINAR Member');
	            
	  				$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/viewDetail")));
	  
					$output = $crud->render();

					if($crud->getState() != 'list') 
					{
						$this->_example1234_output1234($output);
					} 
					else 
					{
						return $output;
		    		}
			    }
			    catch(Exception $e)
			    {
				   	show_error($e->getMessage().' --- '.$e->getTraceAsString());
			 	}	
		}
		else
	    {
			$this->_redirectPage();	
	    } 
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
					//$crud->unset_add();  
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
			
				}
				catch(Exception $e)
				{
					show_error($e->getMessage().' --- '.$e->getTraceAsString());
			 	}	
		}
		else
	    {
			$this->_redirectPage();	
	    }		
	}


	public function downloadFile()
	{
		$data = $this->_checkSession();
		
		if($data != false)
	    {    
			try{
					$crud = new grocery_CRUD();

					$crud->set_table("payproof"); 	
					$crud->set_relation('loginID','user_login','firstname');
					$crud->set_theme('flexigrid');
					$crud->set_field_upload('source','file');
					$crud->unset_add(); 
					$crud->columns('loginID','reference','dates','statuses','fee','available','source');
					$crud->edit_fields('statuses');
					$crud->display_as('reference','Reference')
						 ->display_as('dates','Date')
						 ->display_as('statuses','Status')
						 ->display_as('fee', 'Fee')
						 ->display_as('available','Share')
						 ->display_as('source','Source');
				        $crud->set_relation('loginID','user_login','fee');
					$crud->order_by('id','desc');
					//$crud->edit_fields('fee','bonus')
					


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

					$crud->field_type('statuses','dropdown',array('Completed' => 'Completed', 'Progress' => 'Progress'));
					
					$output = $crud->render();
					$this->load->view('file_review',$output);	
				}
				catch(Exception $e)
				{
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
			    		 ->display_as('available','Available Share (MYR)')
			    		 ->display_as('history','Available Share (Gram)');
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


		   			if($crud->getState() != 'list') 
		   			{
						$this->_example5678_output5678($output);
		   			} 
		   			else 
		   			{
			 			return $output;
	       			}

				}catch(Exception $e)
				 {
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
				'output'	=> $output ));
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

			   		if($crud->getState() != 'list') 
			   		{
						$this->_example5678_output5678($output);
			   		} 
			   		else 
			   		{
				 		return $output;
		       		}

				}
				catch(Exception $e)
				{
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
				'output'	=> $output ));
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
	               'id' 		=>$result[0]->id_login,
	               'user_image' 		=>$result[0]->user_image,
	               'username' 	=>$result[0]->user_name,
	               'email' 		=>$result[0]->user_email,
	               'password' 	=>$result[0]->user_password,
				   
				   'firstname'     =>$result[0]->firstname,
			       'middlename'    =>$result[0]->middlename,
			       'lastname'      =>$result[0]->lastname,
			       'gender'        =>$result[0]->gender,
			       'icnumber'      =>$result[0]->user_name,
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
                    $data = $this->login_database->trimData($data);
				 
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
                
                $arr = $this->input->post();
//                print_r($arr); die();
		
		$data = array
		   (
	            'user_name' 	=> $this->input->post('username'),
	            'user_email' 	=> $this->input->post('email'),
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
                
                $data_upload = $this->my_func->do_upload('tr_file', './assets/uploads/profile/');
//                print_r($data_upload); die();
                
                if (isset($data_upload['error']) && !empty($data_upload['error'])) {
                    $data['user_image'] = $arr['tr_file1'];
                } else {
                    $user_image = $data_upload['upload_data']['file_name'];
                    $data['user_image'] = $user_image;
                }
		                
		$username = $this->input->post('username');
	    $password = $this->input->post('pwd1');
	    $email = $this->input->post('email'); 

		$this->load->library('email');
	  
	    $config['mailtype'] = "html";
		 
		$this->email->initialize($config);
		$this->email->from('admin@dinarpal.coop','Dinarpal Coop');
	    $this->email->to($this->input->post('email'));
	    $this->email->subject('Reset Password from Dinarpal Coop : Continuous Imapression');
	    $this->email->message('<BR><BR> Your password has been updated, you can login with the latest account <BR><BR>  Your IC Number : <B>'.$username.'</B> <BR><BR> Your Password : <B>'.$password.' </B> ');
	            
	    $this->email->send();

		$this->db->where('id_login', $id);
	    $this->db->update('user_login', $data); 
			 
	    $this->session->set_flashdata('updatepassword','Now you can login with new password and Please check in your <B>'.$email.'</B> email account');
	                    
		redirect('main/loginPage');

	    $this->session->unset_userdata('username');
		$this->session->sess_destroy();            
	}


	// Validate and store registration data in database

	private function _prep3781_password2024($password) 
	{
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
			   'status' => 'Not', 
			   'any' =>$this->input->post('any') , 
			   'statename' =>$this->input->post('statename'),
	      	);
	       
		$result = $this->login_database->registration_insert($data) ;
	     
		
		require('main.php');
		
		if ($result == TRUE )
		{    

	        $email = $this->input->post('email');
	        $username = $this->input->post('username');
	        $password = $this->input->post('pwd1');
	        $rand= random_string('unique');

	        $this->load->library('email');
	  
	        $config['mailtype'] = "html";
		 
		    $this->email->initialize($config);
		    $this->email->from('admin@dinarpal.coop','KODINAR');
	        $this->email->to($this->input->post('email'));
	        $this->email->subject('Account Activation from Dinarpal Coop : Continuous Imapression');
	        $this->email->message('<BR><BR> Thanks for signing up! <BR><BR> Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below. <BR><BR> Please click this link to activate your account: <a href='.site_url('user_authentication/verify').'?email='.$email.'&> Click Here to activate your account </a><BR> <BR><BR> Your IC Number : <B>'.$username.'</B> <BR><BR> Your Password : <B>'.$password.' </B> <BR><BR> Best of luck for You ');
	            
	        $this->email->send();

	           
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


	public function verify()
	{
		$data = $this->_checkSession();
		
		if($data != false)
	    {  
	        $this->login_database->update_status();
	        redirect('main/user/9');
	    }
		else
		{
		   $this->_redirectPage();   
		}
	}


	// Check for user login process
	public function user_login_process() 
	{
		//return false;
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
			$this->session->set_flashdata('errorlogin','Your <B> IC Number</B> or <B> Password </B>is wrong, Please try again');
	        redirect("/main/loginPage/0/1");
	    }   
	}


	public function reset_password() 
	{
	    $this->load->helper('string');

	    $id = $_POST['idlogin'];  
	    $ic = $_POST['icnumber'];            
	    $email = $_POST['email'];
	    $pass = random_string('alnum',20);
	         
		$data = array
			(
	        	'user_email' => $email,
	        	'user_password' => $this->_prep3781_password2024($pass),
	    	);
	          
	    $this->db->where('id_login', $id);
		$this->db->update('user_login', $data);
	  
	    $this->load->library('email');
	  
	    $config['mailtype'] = "html";
		 
		$this->email->initialize($config);
		$this->email->from('admin@dinarpal.coop','KODINAR');
	    $this->email->to($email);
	    $this->email->subject('Reset Password');
	    $this->email->message(' Your IC Number : <B>'.$ic.'</B> <BR><BR> Your Password : <B>'.$pass.' </B> <BR><BR> Best of luck for You ');
	            
	   	$this->email->send();

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
	            	'id'         =>$result[0]->id_login,
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
	public function logout() 
	{
		// Removing session data
		$sess_array = array('username' => '');

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
//                            print_r($result); die();
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