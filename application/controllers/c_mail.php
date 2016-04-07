<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);

class C_mail extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->library("grocery_CRUD");
		$this->load->model('m_mail');
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
		$this->load->helper('url');
	}
	// List all your items
	public function index()
	{		
		$this->inbox();		
	}
	/*`id_login`, `user_name`, `user_email`, `user_password`, `user_level`,
	`firstname`, `middlename`, `lastname`, `icnumber`, `gender`, `phone`, 
	`facebookurlid`, `date`, `street1`, `street2`, `district`, `postcode`, 
	`state`, `country`, `firstnamew`, `middlenamew`, `lastnamew`, `icnumberw`, 
	`genderw`, `phonew`, `emailw`, `facebookurlidw`, `datew`, `street1w`, 
	`street2w`, `districtw`, `postcodew`, `statew`, `countryw`, `any`, 
	`statename`, `fee`, `available`, `history`, `dividen`, `bonus`, `profit`, `status`, active*/
	public function inbox($error = "")// kat sini just ubah recever kepada session
	{		
		$this->load->model('login_database');
		$session = $this->_checkSession();
		if($session != false){
			require("main.php");
			$temp = new Main;
			$temp->showMenu();
			unset($temp);
			$result = $this->login_database->retrive($session);
			$data = array_shift($result);
			unset($result);
			$this->load->view('undermaintain');
			$this->load->view('footer');
			/*if($data->user_level == 0){
				$this->_get("admin",true);
			}else{
				$this->_get($data->user_name,false);
			}*/			
		}else{
			$this->_redirectPage1();
		}
		$arr = array(
			"error" => $error
		);
		$this->load->model('login_database');
		$result = $this->login_database->retrive($session);
		$data1 = array_shift($result);
		if($data1->active == "Not Active" && $data1->user_level != 0){
			$this->load->view('upload_form' , $arr);
		}		
		$this->load->view('footer');
	}
	public function _get($recever = 'admin', $bool = false)// recever get from session
	{
		$code = '
		';
		$temp = array(
			'recever' => $recever
		);
		$data = $this->m_mail->get($temp);
		if ($data != false) {
			foreach ($data as $row) {
				$code = $this->_inboxList($row,$bool) . $code;
			}
			//echo $code;
			$arr = array(
				"inboxList" => $code,
				"msgNum" => count($data),
				"last" => $data[count($data)-1]->dateTime
			);
			$arr["arr"] = $this->_viewCompose($bool);			
			$this->load->view("mail",$arr);
		}else{
			$arr = array(
				"inboxList" => "",
				"msgNum" => 0,
				"last" => "Null"
			);
			$arr["arr"] = $this->_viewCompose($bool);
			$this->load->view("mail",$arr);
		}		
	}
	public function insertMail($temp = null , $member = false)
	{
		$this->load->model('login_database');
		die("haha");
		$session = $this->_checkSession();
		if($session != false){
			$result = $this->login_database->retrive($session);
			$data = array_shift($result);
			unset($result);
			if($data->user_level == 0 || $member){
				//`dateTime`, `sender`, `recever`, `title`, `content`, `checkMail`
				if ($temp == null) {
					unset($temp);
					$temp = $this->input->post();
					unset($temp["submit"]);
				}	
				//print_r($temp);		
				$result = $this->m_mail->insert($temp);
				//print_r($temp);
				unset($temp);
				if ($result != false) {
					$this->_showError("Berjaya Send");
				       
                                        //redirect(base_url()."/c_mail");
                                            
                                        if($member)
                                        {
					  return false;
					}
				}
				else{
					$this->_showError("Tidak berjaya Send");
					redirect(base_url()."c_mail");					
				}
			}else{
				$this->_showError("Staff Access Only");
			}
		}else{
			$this->_redirectPage1();
		}	
	}
	public function _upload()
	{
		$data = array(
			'error' => ''
		);
		$this->load->view('upload_form', $data);// upload file
	}
	function do_upload()
	{
		$this->load->model('login_database');
		$session = $this->_checkSession();	
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '100';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			$config["encrypt_name"] = true;
		if($session != false){
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());
				$this->_showError($error);				
				redirect(base_url().'c_mail');
				return false;
			}
			else
			{
				//$data = array('upload_data' => $this->upload->data());
				$data = $this->upload->data();
				//print_r($data);			
				//`dateTime`, `sender`, `recever`, `title`, `content`, `checkMail`
				$temp = array(
					'sender' => $session["username"],// session member semasa upload
					'content' => $data["file_name"],
					'recever' => "admin",
				);
				$this->insertMail($temp,true);
				$arr = array(
				"active" => "In Progress"
				);
				$arr2 = array(
				"user_name" =>  $session["username"]
				);
				$this->m_mail->updateTableHatta($arr , $arr2);
				$this->_showError("Send Done");
				redirect(base_url().'c_mail');
				return false;
			}
		}else{
			$this->_redirectPage1();
		}
	}
	public function _deleteProcess($primary_key)
	{
		$temp = array(
			'id' => $primary_key,
			'recever' => "admin"
		);
	    //$this->load->view('form_sendMail', $temp);
		$data = $this->m_mail->get($temp);
		if(!is_array($data)){
			return true;
		}
		if(count($data) == 1){
			unset($temp);
			$temp = $this->_returnWord($data[0]->content);
			if($this->_deleteFile($temp)){
				return true;
			}else{
				return false;
			}
		}
	}
	public function _deleteFile( $fileName = NULL )
	{
		if (!empty($fileName)){
			if(unlink("uploads/".$fileName)){
				//echo "jadi";
				return true;
			}
			else{
				//echo "xjd";
				return false;
			}
		}
		else{
			$this->_showError("Null Path");
			return false;
		}
	}
	public function del($id = null)// kat sini kene check session
	{
		$this->load->model('login_database');
		$session = $this->_checkSession();
		if($session != false){
			$result = $this->login_database->retrive($session);
			$data1 = array_shift($result);
			unset($result);			
			//`dateTime`, `sender`, `recever`, `title`, `content`, `checkMail`
			if ($id != null){
				$temp = $this->m_mail->get($id);
				if ($temp != false) {
					$data = array_shift($temp);
					unset($temp);
					if (is_object($data)) {
						//kat sini kene letak session hanya pemilik saja boleh delete
						if($data->recever == $data1->user_name || $data1->user_level == 0){
							$temp = true;
							if ($data->recever == "admin") {
								$temp = $this->_deleteFile($this->_returnWord($data->content));
								if (!$temp) {
									$this->_showError("File Not Found");
									return false;
								}
							}
							if ($temp) {
								if ($this->m_mail->delete($id)) {
									redirect(base_url()."c_mail");
									return true;
								}else{
									$this->_showError("Massage Not Found");
									redirect(base_url()."c_mail");
									return false;
								}
							}
						}else{
							$this->_showError("Can't delete Someone's Massage");
							return false;
						}						
					}else{
						echo "salah array type";
						return false;
					}
				}else{
					$this->_showError("Massage Not Found");
					redirect(base_url()."c_mail");
					return false;
				}			
			}else{
				$this->_showError("Empty Massage Id");
				return false;
			}
		}			
	}
	public function adminMailPanel()
	{
		//`dateTime`, `sender`, `recever`, `title`, `content`, `checkMail`
		$crud = new grocery_CRUD();
		$crud->order_by("dateTime");
		$crud->set_table("mailtable");
		$crud->columns("dateTime","sender" , "recever" , "title" , "content");
		$crud
			->field_type("dateTime", 'hidden')
			->field_type("sender", 'hidden')
			->field_type("checkMail", "hidden")
			->required_fields("recever","title")
		;
		$crud->set_subject("Mail Controll Panel");
		//$crud->display_as()
		$crud->callback_before_insert(array($this,'_setDefaultValue'));
		$crud->callback_before_delete(array($this,'_deleteProcess'));
		$output = $crud->render();
		$this->_example_output($output);
	}
	function _example_output($output = null) 
    {
        $this->load->view('crude.php',$output);    
    }
    function _setDefaultValue($post_array)
    {
    	$this->load->helper("date");
    	$time = now();
    	$time = date('Y-m-d H:i:s', $time);	
    	$post_array['dateTime'] = $time;
    	$post_array["sender"] = "admin";// kat sini session
    	$post_array["checkMail"] = false;
    	return $post_array;
    }	
    public function _viewRecever($var = null)
    {    	
		if($var!=null){
			$temp = array(
				'recever' => $var
			);
			$data = $this->m_mail->get($temp);
			if ($data != false) {
				return $data;
			}else{
				return false;
			}			
		}
		$this->_showError("Nama Penerima Tiada");
		//<------ kat sini redirect("page")
		return false;
    }
    public function _showError($value='null')
    {
    	echo '<script type="text/javascript">
			alert("'.$value.'");
			</script>';
    }
    public function _returnWord($word = null)
    {
    	$word = str_replace('<p>', '', $word);
		$word = str_replace('</p>', '', $word);
		$word = str_replace(' ', '', $word);
		return $word;
    }
    //vvvvvvvvvvvvvvvvvvvvvvv Line Of code vvvvvvvvvvvvvvvvvvvvvvv
    public function _inboxList($data,$admin = false)
    {
    	//`dateTime`, `sender`, `recever`, `title`, `content`, `checkMail`
    	if (is_array($data)) {
    		$id = $data['id'];
    		$dateTime = $data['dateTime'];
    		$sender = $data['sender'];
    		$title= $data['title'];
			$content = $data['content'];
			if($admin){
				$content = $this->_returnWord($content);
			}    		
    	}elseif (is_object($data)){
    		$id = $data->id;
    		$dateTime = $data->dateTime;
    		$sender = $data->sender;
    		$title= $data->title;
    		$content = $data->content;
			if($admin){
				$content = $this->_returnWord($data->content);
			}
    	}else{
    		return "Has error on paramiter Inbox List";
    	}
    	if ($admin) {
    		$content = '<a href="'.base_url().'uploads/'.$content.'"><img src="'.base_url().'uploads/'.$content.'" alt="File Not Found" width = "90% * 150px"></a>
    		<p><hr><a href = "'.base_url()."c_mail/verifyUser/".$sender.'"><button>Verify</button></a></p>
    		';
    	}
    	$code = '
    	<tr class="ng-scope">                           
            <td class="col-sm-3 col-xs-4" ><span  class="ng-binding strong" onClick = "viewMessage('.$id.');">'.$dateTime.'</span></td>
            <input type = "hidden" id ="dateTime_'.$id.'" value = "'.$dateTime.'">
            <td class="col-sm-2 col-xs-4" ><span  class="ng-binding strong" onClick = "viewMessage('.$id.');">'.$sender.'</span></td>
            <input type = "hidden" id ="sender_'.$id.'" value = "'.$sender.'">
            <td class="col-sm-4 col-xs-6" ><span  class="ng-binding strong" onClick = "viewMessage('.$id.');">'.$title.'</span></td>
            <input type = "hidden" id ="title_'.$id.'" value = "'.$title.'">
            <textarea id ="content_'.$id.'" style = "display : none;">'.$content.'</textarea>
            <td class="col-sm-1 col-sm-2" ><span ng-show="item.attachment" class="glyphicon glyphicon-paperclip pull-right ng-hide"></span> <span ng-show="item.priority==1" class="pull-right glyphicon glyphicon-warning-sign text-danger ng-hide"></span></td>
        </tr><!-- end ngRepeat: item in pagedItems[currentPage] | orderBy:sortingOrder:reverse -->
    	';
    	return $code;
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
 function _viewCompose($bool = false , $active = false)
 {
	if($bool){
	$code = '
	<button class="btn btn-default btn-lg" title="Compose New" data-toggle="modal" data-target="#modalCompose">
                      <span class="fa fa-edit fa-lg"></span></button>
	';
	$code2 = '
	<div class="modal fade" id="modalCompose">
          <div class="modal-dialog">
            <div class="modal-content" style="border-top-width: 20px;">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Compose Message</h4>
              </div>
              <div class="modal-body">
                <form role="form" class="form-horizontal" action = "'.base_url().'c_mail/insertMail" id = "myForm" method = "post">
                    <div class="form-group">
                      <label class="col-sm-2" for="inputTo">To</label>
                      <div class="col-sm-10"><input type="email" class="form-control" name="recever" id="inputTo" placeholder="Ic Number"></div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2" for="inputSubject">Title</label>
                      <div class="col-sm-10"><input type="text" class="form-control" id="inputSubject" placeholder="subject" name="title"></div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12" for="inputBody">Message</label>
                      <div class="col-sm-12"><textarea class="form-control" id="inputBody" rows="12" name="content"></textarea></div>
                    </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button> 
                <!--<button type="button" class="btn btn-warning pull-left">Save Draft</button>-->
                <button type="submit" class="btn btn-primary " onClick = "if(checkForm()){formSubmit();}">Send <i class=fa fa-arrow-circle-right fa-lg"></i></button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal compose message -->
	';
	$code3 = '';
	}else{
		$code = "";
		$code2 = "";
		$code3 = "";
		if(!$active){
			$code3 = '
			';
		}		
	}
	$arr = array(
		"button" => $code,
		"form" => $code2,
		"upload" => $code3
	);
	return $arr;
 }
 function verifyUser($user_name = null)
 {
	 if(!empty($user_name)){
		 $session = $this->_checkSession();
		 if($session != false){
			$this->load->model('login_database');
			$result = $this->login_database->retrive($session);
			$data = array_shift($result);
			unset($result);
			if($data->user_level == 0){
				$arr = array(
				"active" => "Active"
				);
				$arr2 = array(
				"user_name" =>  $user_name
				);
				$this->m_mail->updateTableHatta($arr , $arr2);	
				$this->_showError("Done Active");
				redirect(base_url().'c_mail');
				return false;				
			}				
		 }else{
			 $this->_showError("Staff Access Only");
			 redirect(base_url().'c_mail');
		 }
	 }
 }
}
?>
<!--/* End of file c_mail.php */
/* Location: ./application/controllers/c_mail.php */-->