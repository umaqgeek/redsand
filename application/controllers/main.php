<?php

class Main extends CI_Controller {

    public function index() {
        $this->home();
    }

    public function home() {
        $this->_redirectPage("test", true);
    }

//kalu nak active post page just tukar $this->_redirectPage("home", true);

    public function overview() {
        $this->_redirectPage("overview");
    }

    public function map() {
        $this->_redirectPage("map");
    }

    public function history() {
        $this->_redirectPage("history");
    }

    public function keperluan() {
        $this->_redirectPage("keperluan");
    }

    public function future() {
        $this->_redirectPage("future");
    }

    public function portfolio() {
        $this->_redirectPage("portfolio");
    }

    public function klien() {
        $this->_redirectPage("klien");
    }

    public function joins() {
        $this->_redirectPage("joins");
    }

    public function share() {
        $this->_redirectPage("membershare");
    }

    public function audit() {
        $this->_redirectPage("intrnalaudit");
    }

    public function syariah() {
        $this->_redirectPage("syariah");
    }

    public function faq() {
        $this->_redirectPage("faq");
    }

    public function compliances() {
        $this->_redirectPage("compliances");
    }

    function _callPostWall() {
        $bool = false;
        require('portal.php');
        $farid = new Portal();
        $data['nav'] = $farid->displayNav();
        if ($this->_checkSession(true) != false) {
            $bool = true;
        }
        $data['postList'] = $farid->_displayPost(null, $bool);
        return $data;
    }

    function _redirectPage($page, $bool = false) {
        $data['menuCode'] = $this->menuLevel();
        $this->load->view("menu", $data);
        if ($bool) {
            $this->load->view($page, $this->_callPostWall());
            //echo "kat sini ha";
        } else {
            $this->load->view($page);
        }
        $this->load->view("footer");
    }

    function _checkSession($menu = false) {
        if ($this->session->userdata('logged_in')) {
            $data = $this->session->userdata('logged_in');
            return $data;
        } else {
            if ($menu) {
                return false;
            } else {
                return $this->_redirectPage1();
            }
        }
    }

    function _redirectPage1() {
        require('user_authentication.php');
        $hatta = new User_Authentication;
        $hatta->user_login_show(true);
        return false;
    }

    function menuLevel() {
        $this->load->model('login_database');
        $code = "
	 ";
        $data = $this->_checkSession(true);
        if ($data != false) {
            $code = $code . '
		 <header id="header" class="pagewidth">
        	        
			<hgroup>
<div id="site-logo"><a href="' . site_url() . 'main" title="">
<span><img src="' . site_url() . 'assets/images/kodinar.png" width="85" height="12" alt="logo" style="margin-top: -26px;"/></span></a></div>			
                
              </hgroup>
			  <nav id="main-nav-wrap">
				<div id="menu-icon" class="mobile-button"></div>
				<ul style="margin-top: 15px;" id="main-nav" class="main-nav clearfix"><li class="page_item page-item-899 page_item_has_children">
                
                
     <li class="page_item page-item-171"> <a href="' . site_url() . 'main/user/9"><B>HOME</B></a></li>
      
        
    ';
            $result = $this->login_database->retrive($data);
            $lvl = $result[0]->user_level;
            unset($result);
            switch ($lvl) {
                case '0' :
                case '1' : $code = $code . '
			  <li class="page_item page-item-171"> <a href="' . site_url() . 'main/user/2"><B>OVERVIEW</B></a></li> 
			 <li class="page_item page-item-409 page_item_has_children"><a href="' . site_url() . 'main/user/9"><B>PROFILE</B></a>
     <ul class="children">
     <li class="page_item page-item-1096"><a href="' . site_url() . 'main/user/6">View Account</a></li>
       
     </ul>
     </li> 
     
     
     <li class="page_item page-item-409 page_item_has_children"><a href="' . site_url() . 'main/user/9"><B>FILE</B></a>
     <ul class="children">
		 
						<!--<li class="page_item page-item-1096"><a href="' . site_url() . 'upload/index">Upload File</a></li>-->
						<li class="page_item page-item-1096"><a href="' . site_url() . 'main/user/3">View File</a></li>
     </ul>
     </li> 

     
     <li class="page_item page-item-409 page_item_has_children"><a href="' . site_url() . 'main/user/9"><B>INBOX</B></a>
     <ul class="children">
     <li class="page_item page-item-1096"><a href="' . site_url() . 'c_mail">
     
     
     </a></li>
     </ul>
     </li>

	 <li class="page_item page-item-409 page_item_has_children"><a href="' . site_url() . 'main/user/9"><B>POST</B></a>
     <ul class="children">
       <li class="page_item page-item-1096"><a href="' . site_url() . 'portal/post/add">Add Post</a></li>
       <li class="page_item page-item-1096"><a href="' . site_url() . 'portal/post">Manage Post</a></li>
     </ul>
     </li> 
                
     <li class="page_item page-item-409 page_item_has_children"><a href="' . site_url() . 'main/user/9"><B>PAYMENT</B></a>
     <ul class="children">
     <li class="page_item page-item-1096"><a href="' . site_url() . 'gallery/index">Upload File</a></li>
     <li class="page_item page-item-1096"><a href="' . site_url() . 'main/user/13">View File</a></li>
     </ul>
     </li>     
			 
     <li class="page_item page-item-409 page_item_has_children"><a href="' . site_url() . 'main/user/9"><B>MEMBER</B></a>
     <ul class="children">
     <li class="page_item page-item-1096"><a href="' . site_url() . 'main/user/1">View DinarPal Member</a></li>
    <!-- <li class="page_item page-item-1096"><a href="' . site_url() . 'main/user/2">Summary All Member</a></li> -->
     </ul>
     </li>

	 <li class="page_item page-item-409 page_item_has_children"><a href="' . site_url() . 'main/user/9"><B>SHARE</B></a>
     <ul class="children">
	 <li class="page_item page-item-1096"><a href="' . site_url() . 'main/user/11">View Share</a></li>
	 </ul>
     </li> 
      
     
     <li class="page_item page-item-409 page_item_has_children"><a href="' . site_url() . 'main/user/9"><B>LEVERAGE</B></a>
     <ul class="children">
	 <li class="page_item page-item-1096"><a href="' . site_url() . 'main/user/10">View Leverage</a></li>
						';
                    break;
                case '2' : $code = $code . '
			 <li class="page_item page-item-409 page_item_has_children"><a href="' . site_url() . 'main/user/9"><B>PROFILE</B></a>
     <ul class="children">
     <li class="page_item page-item-1096"><a href="' . site_url() . 'main/user/6">View Account</a></li>
       
     </ul>
     </li> 
     
     
     <li class="page_item page-item-409 page_item_has_children"><a href="' . site_url() . 'main/user/9"><B>FILE</B></a>
     <ul class="children">
		 
							<li class="page_item page-item-1096"><a href="' . site_url() . 'main/user/3">View File</a></li>
     </ul>
     </li> 

     <li class="page_item page-item-409 page_item_has_children"><a href="' . site_url() . 'main/user/9"><B>INBOX</B></a>
     <ul class="children">
     <li class="page_item page-item-1096"><a href="' . site_url() . 'c_mail">
     </a></li>
     </ul>
     </li>

	 <li class="page_item page-item-409 page_item_has_children"><a href="' . site_url() . 'main/user/9"><B>PAYMENT</B></a>
     <ul class="children">
     <li class="page_item page-item-1096"><a href="' . site_url() . 'gallery/index">Upload File</a></li>
     <li class="page_item page-item-1096"><a href="' . site_url() . 'main/user/14">View File</a></li>
     </ul>
     </li>     

	 <li class="page_item page-item-409 page_item_has_children"><a href="' . site_url() . 'main/user/9"><B>SHARE</B></a>
     <ul class="children">
	 <li class="page_item page-item-1096"><a href="' . site_url() . 'main/user/4">View Share</a></li>
	 </ul>
     </li>     
     <li class="page_item page-item-409 page_item_has_children"><a href="' . site_url() . 'main/user/9"><B>LEVERAGE</B></a>
     <ul class="children">
	 <li class="page_item page-item-1096"><a href="' . site_url() . 'main/user/5">View Laverage</a></li>
			';
                    break;
                default : echo " Db salah nie";
            }
            $code = $code . '
		 </ul>
     </li>      
  
</ul>
</li>
</ul>			</nav>
			<!-- /#main-nav -->
			
				<div id="social-wrap">
                    <div id="searchform-wrap">
						<!--<div id="search-icon" class="mobile-button"></div>
							<form method="get" id="searchform" action="http://themify.me/demo/themes/postline/">
	<input type="text" name="s" id="s"  placeholder="Search">
</form>-->
					</div>
					<!-- /searchform-wrap -->
						
				<div class="social-widget">
					<div id="themify-links-2" class="widget links">
                    <ul class="links-list">
                   

<li><a href="' . site_url() . 'user_authentication/logout" onclick="return confirm(' . "'" . 'Are you sure want to logout?' . "'" . ')">
<link href="' . site_url() . 'assets/css/button.css" rel="stylesheet" width="80px" /><button type="submit" style="margin-top: -3px;" class="button" data-toggle="modal">Log Out</button></a></li>

                    </ul>
                    </div>		
										
				<!-- /.social-widget -->
			        </div>
            
                   </header>
		 ';
        } else {
            $code = '<header id="header" class="pagewidth">
        	        
			<hgroup>
				<div id="site-logo"><a href="' . site_url() . 'main"><span><img src="' . site_url() . 'assets/images/kodinar.png" width="84" height="12" alt="logo" style="margin-top: -26px;"/></span></a></div>			</hgroup>
	
			<nav id="main-nav-wrap">
				<div id="menu-icon" class="mobile-button"></div>
				<ul style="margin-top: 15px;" id="main-nav" class="main-nav clearfix"><li class="page_item page-item-899 page_item_has_children">
                <a href="' . site_url() . 'main"><B>ABOUT US</B></a>
                <ul class="children">
                 <li class="page_item page-item-1099"><a href="' . site_url() . 'main/overview">Corporate Overview</a></li>
                 <li class="page_item page-item-1099"><a href="' . site_url() . 'main/keperluan">Board Of Co-Operative</a></li>
                 <li class="page_item page-item-1099"><a href="' . site_url() . 'main/audit">Internal Audit Team</a></li>
                 <li class="page_item page-item-1099"><a href="' . site_url() . 'main/syariah">Shariah Council Member</a></li>
                 <li class="page_item page-item-1099"><a href="' . site_url() . 'main/future">The Management</a></li>
                 <li class="page_item page-item-1099"><a href="' . site_url() . 'main/share">Member Share</a></li>
                 <li class="page_item page-item-1099"><a href="' . site_url() . 'main/compliances">Compliances</a></li>
                 <li class="page_item page-item-1099"><a href="' . site_url() . 'main/faq">FAQs</a></li>
                </ul>
                </li>
            <!--<li class="page_item page-item-171"><a href="' . site_url() . 'main/portfolio"><B>PORTFOLIO</B></a></li>-->
                <li class="page_item page-item-171"><a href="' . site_url() . 'main/history"><B>SERVICES</B></a></li>
                <li class="page_item page-item-408"><a href="' . site_url() . 'main"><B>NEWS</B></a></li>
                <li class="page_item page-item-409 page_item_has_children"><a href="' . site_url() . 'main/joins"><B>CONTACT US</B></a>
	<ul class="children">
	<li class="page_item page-item-1096"><a href="' . site_url() . 'main/map">Map Location</a></li>
                 </ul>
                </li>
</li>
</ul>			</nav>
			<!-- /#main-nav -->
			
			<div id="social-wrap">
                    <div id="searchform-wrap">
						<!--<div id="search-icon" class="mobile-button"></div>
							<form method="get" id="searchform" action="http://themify.me/demo/themes/postline/">
	<input type="text" name="s" id="s"  placeholder="Search">
</form>-->
					</div>
					<!-- /searchform-wrap -->
						
				<div class="social-widget">
					<div id="themify-links-2" class="widget links">
                    <ul class="links-list">
                   
<li><a href="' . site_url() . 'main/loginPage"><link href="' . site_url() . 'assets/css/button.css" rel="stylesheet" /><button type="submit" style="margin-top: -3px;" class="button" data-toggle="modal">Log In</button></a></li>
<li><a href="' . site_url() . 'main/registerPage"><link href="' . site_url() . 'assets/css/button.css" rel="stylesheet"  /><button type="submit" class="blue-button" data-toggle="modal">Create Account</button></a></li>

                    </ul>
                    </div>		
										
				<!-- /.social-widget -->
			        </div>
            
                   </header>
		<!-- /#header -->';
        }
        return $code;
    }

    function user($num) {
        $this->load->model('login_database');
        require('user_authentication.php');
        $hatta = new User_Authentication;

        $data['menuCode'] = $this->menuLevel();
        $this->load->view("menu", $data);

        switch ($num) {

            case '1' : $hatta->viewDetail();
                break;
            case '2' : $hatta->viewSummary();
                break;
            case '3' : $hatta->downloadSource();
                break;
            case '4' : $hatta->share();
                break;
            case '5' : $hatta->laverage();
                break;
            case '6' : $hatta->manageAccount();
                break;
            case '7' : $hatta->manageProfile();
                break;
            case '8' : $hatta->forgot_password();
                break;
            case '9' : $hatta->homes();
                break;
            case '10' : $hatta->viewLeverage();
                break;
            case '11' : $hatta->viewShare();
                break;
            case '12' : $hatta->viewTable();
                break;
            case '13' : $hatta->downloadFile();
                break;
            case '14' : $hatta->viewPic();
                break;
            case '15' : $hatta->edit();
                break;
        }


        $this->load->view("footer", $data);
    }

// Show login page
    public function loginPage($msg = false, $error = false, $reg = false) {
        $data['menuCode'] = $this->menuLevel();
        $this->load->view("menu", $data);
        unset($data);
        $data['msg'] = $msg;
        if ($error) {
            $data["error_message"] = "<script>alert('Invalid Username or Password')</script>";
        }
        if ($reg) {
            $data['message_display'] = "<script>alert('Registration Successfully !')</script>";
        }
        $this->load->view('login_form', $data);
        $this->load->view("footer");
    }

// Show registration page 
    public function registerPage() {
        $data['menuCode'] = $this->menuLevel();
        $this->load->view("menu", $data);
        $this->load->view('registration_form');
        $this->load->view("footer");
    }

// Forget password
    public function forgotPassword() {
        $data['menuCode'] = $this->menuLevel();
        $this->load->view("menu", $data);
        $this->load->view('resetpass_form');
        $this->load->view("footer");
    }

    public function showMenu() {
        $data['menuCode'] = $this->menuLevel();
        $this->load->view("menu", $data);
    }

    public function test1() {
        //require('portal.php');
        // $a = new Portal();
        //$a->test1();

        echo 'hai ';
        echo $this->load->view('ajax/page1.php', '', true);
        echo ' holo';
    }

    public function test2() {
        //echo "hhasda";
        $this->load->model('model_post');
        $data['post'] = $this->model_post->getAllPost();
        echo $this->load->view('ajax/page2.php', $data, true);
    }

}

?>