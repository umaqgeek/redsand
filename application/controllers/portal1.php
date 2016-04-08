<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_post');
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
	
	

 
	
	public function test1()
	{
		
	  $this->load->view('test');
	 
	}
	public function index()
	{
       /* echo '
        <a href="'.site_url().'portal/post/add">Add Post</a><br>
        <a href="'.site_url().'portal/post">Post List</a><br>';*/
		$datas['nav'] = $this->displayNav();
        $datas['postList'] = $this->displayPost();
		
		 if($this->session->userdata('logged_in'))
            { 
		     $data = $this->session->userdata('logged_in');	   	 
	        }
            
			$result = $this->login_database->retrive($data);
	 
	        if($result != false)
	        {
              $data = array
		      (
               'id' =>$result[0]->id_login,
               'username' =>$result[0]->user_name,
               'email' =>$result[0]->user_email,
               'password' =>$result[0]->user_password,
		       'userlevel' =>$result[0]->user_level,
			   'idprofile' =>$result[0]->id_profile,
		       'idbeneficiary' =>$result[0]->id_beneficiary
              );
			}
		  
		
        $this->load->view('test', $datas);
	
				
	}
	function postPage()
	{
		$this->load->view('postPage');
	}
	function insertPost($post_array)
	{
		//title,content
		//$data = $this->input->post();
		$this->load->helper("date");
		$time = now();
		$year = date("Y", $time);
		$month = date('F', $time);
		$time = date('Y-m-d H:i:s', $time);		
		
		$post_array['year'] = $year;
		$post_array['date'] = $time;
        $post_array['author'] = "Farid";// sini masukkan session user name;
		$post_array['month'] = $month;
        
		return $post_array;
		
		$data = array(
			'title' => $data["title"] ,
			"year" => $year , 
			"date" => $time, 
			'author' => $author , 
			'content' => $data["content"],
			'month' => $month
			);
			
		echo $data["date"];
		$this->model_post->createPost($data);
		echo "Insert Success";
        $this->index();
	}
	function getAllPost()
	{
		$data = $this->model_post->getAllPost();	
		$this->load->view('viewAllPost', $data);	
	}
	function getPost()
	{
		$data = $this->model_post->getPost();
		$this->load->view('viewPost', $data);
	}
	
	
	function _example_output($output = null) 
    {		
		require('main.php');
		$temp = new Main;
		$temp->showMenu();
		unset($temp);
        $this->load->view('crude.php',$output);  
		$this->load->view('footer');  
    }
	
    public function post()
    {
        //'id', 'year', 'date', 'title', 'author', 'content', 'month'
		$crud = new grocery_CRUD();		
		//$crud->theme('datatables');
		/*$crud->set_lang_string('insert_success_message',
		 '<script type="text/javascript">
		  window.location = "'.site_url('portal').'";
		 </script>
		 '
   		);*/		
        $crud->set_table('posttable');
		
		$crud->columns('title', 'content', "date", 'month');
		$crud->fields('title','content','year', 'date', 'author', 'month');
        $arr[0] = 'year';
        $arr[1] = 'date';
        $arr[2] = 'author';
        $arr[3] = 'month';
        $this->hideFormField($crud,$arr);
		
		//$crud->unset_add();
		
		$crud->callback_before_insert(array($this,'insertPost'));
		$crud->callback_after_insert(array($this,'index'));
        $crud->callback_after_update(array($this,'index'));
       
        $output = $crud->render();
	
        $this->_example_output($output); 
		
    }	
    
    public function displayNav()
    {
    	$code = '
    	';
    	$data = $this->model_post->getNav();
    	if (count($data) != 0) {
            $y = 0;     
            for ($i = count($data); $i > 0; $i--) { 
                $arr = $data[$i-1];
                if ($y == 0 || $y != $arr['year']) {
                    if($y != 0){
                        $code = $code . $this->endYearLine();
                    }
                    $y = $arr['year'];
                    $code = $code . $this->lineYear($y);                
                }
                $m = $arr['month'];
                $code = $code . $this->lineMonth($m,$y);
            }
            $code = $code . $this->endYearLine();
        }else{
            $code = "No Post";
        }        
    	return $code;
    }   
    public function displayPost()//Kene edit lg bab looping
    {
        $this->load->helper('date');
        //'id', 'year', 'date', 'title', 'author', 'content', 'month'
        $code = '
        ';
        $data = $this->model_post->getAllPost();
        if (count($data) != 0) {
            $m = 0;
            for ($i=count($data); $i > 0 ; $i--) { 
                $arr = $data[$i-1];
                $tarikh = new DateTime($arr->date);
                $bulan = $tarikh->format("m");        
                $tahun = $arr->year;
                $hari = $tarikh->format("d");
                if ($m == 1) {
                    if($monthBox != $bulan || $yearBox != $tahun){
                        $m = 2;
                    }
                }
                if ($m == 2) {
                     $code = $code . $this->postBottomLineMonth();            
                     $m = 0;
                }
                if ($m == 0) {
                    $monthBox = $bulan;
                    $yearBox = $tahun;
                    $code = $code . $this->postTopLineMonth($tahun , $bulan);
                    $m = 1;
                }
                if ($m = 1) {
                    $code = $code . $this->articleTopLine($arr->id,$arr->year,$bulan,$hari,$arr->title) . $arr->content. $this->articleBottomLine($arr->id);  
                }
            }

        }else{
            $code = "No Post";
        }        
        return $code;
    }
    public function postTopLineMonth($y = null, $m = null)
    {
        $code = '
        <div id="timeline-set-'.$y.'-'.$m.'" class="timeline-set-month expanded">
            <h3 id="set-'.$y.'-'.$m.'" class="timeline-month">
                <a name="jump-'.$y.'-'.$m.'" id="jump-'.$y.'-'.$m.'" class="timeline-jump"></a><span>'. $this->month($m) . $y . '</span>
            </h3>
            <div id="group-set-'.$y.'-'.$m.'" class="set-month isotope" style="position: relative; overflow: hidden; height: 1868px;">
            ';
        return $code;
    }
    public function articleTopLine($id = null, $y = null, $m = null, $d = null, $t= null)
    {
        $code = '
        <article itemscope="" itemtype="http://schema.org/Article" id="post-'.$id.'" class="post-'.$id.' post type-post status-publish format-aside hentry category-general set-'.$y.'-'.$m.' clearfix has-post-title has-post-date has-post-category has-post-tag has-post-comment has-post-author isotope-item alt" style="position: absolute; left: 381px; top: 998px;">
            <div class="post-inner clearfix">
            <!-- Title, post icon, post date -->
            <span class="post-icon"></span>
                <time datetime="'.$y.'-'.$m.'-'.$d.'" class="post-date entry-date updated" itemprop="datePublished">
                    <span>'. $this->month($m) .' '.$d.', '.$y.'</span>
                </time>
                <h1 class="post-title entry-title" itemprop="name"><a href="'. site_url().'portal/postContent/'.$y.'/'.$m.'/'.$d.'/'.$id.'/" title="'.$t.' " >'.$t.'</a></h1>
            <!-- / Title, post icon, post date -->
            <div class="post-content">  
            <div class="entry-content" itemprop="articleBody">  
            <p>';
        return $code;
    }
    public function articleBottomLine($id = null)
    {
        $code = '</p>
                <div id="themify_builder_content-'.$id.'" data-postid="'.$id.'" class="themify_builder_content themify_builder_content-'.$id.' themify_builder themify_builder_front">
                </div>
                <!-- /themify_builder_content -->   
            </div><!-- /.entry-content -->
            <!--<p class="post-meta entry-meta">                
                <span class="post-author"><span class="author vcard" itemprop="author" itemscope="" itemtype="http://schema.org/Person"><a class="url fn n" href="http://themify.me/demo/themes/postline/author/jauhmerah/" rel="author" itemprop="url"><span itemprop="name">jauhmerah</span></a></span> <em>·</em></span>
                <span class="post-category"><a href="http://themify.me/demo/themes/postline/category/general/" rel="category tag">General</a> <em>·</em></span>
                <span class="post-comment"><a href="http://themify.me/demo/themes/postline/2012/08/18/happy-birthday-jen/#respond" title="Comment on Happy Birthday Jen">No comments</a></span>
            </p>-->            
            </div>
            <!-- /.post-content -->
            <div class="post-dot" style="display: block;"></div><!-- /post-dot -->
            <div class="post-arrow" style="display: block;"></div><!-- /post-arrow -->
            </div>
            <!-- /.post-inner -->
            </article>
            <!-- /.post -->
        ';
        return $code;
    }
    public function postBottomLineMonth()
    {
        $code = '</div>
                <!-- /set-month -->
                <!-- /#scroll-set -->
                </div>
                <!-- /timeline-set-month -->

        ';
        return $code;
    }
    public function lineYear($year = null)
    {
        $line = '
                <li>
                    <a class="timeline-nav-year" href="#">' . $year . '</a>
                    <ul class="timeline-nav-months">
                ';
        return $line;
    }    
    public function lineMonth($month = null , $year = null)
    {
        $line = '<li>
                    <a class="jump-month" data-jump="jump-'.$year.'-'.$month.'" data-year="'.$year.'"" data-month="'.$month.'" href="'.site_url().'postline/'.$year.'/'.$month.'">
                    '.$this->month($month).'</a>
                </li>
                ';
        return $line;
    }
    public function endYearLine()
    {
        return '</ul>
                <!-- /timeline-nav-months -->
            </li>';
    }
    function hideFormField($crud,$arrList)
    {
        for ($i = 0 ; $i < count($arrList); $i++) { 
            $crud->field_type($arrList[$i], 'hidden', null);
        }
        return $crud;
    }
    public function month($num = null)
    {
        switch ($num) {
            case 1:
                return 'January';
                break;
            case 2:
                return 'February';
                break;
            case 3:
                return 'March';
                break;
            case 4:
                return 'April';
                break;
            case 5:
                return 'May';
                break;
            case 6:
                return 'June';
                break;
            case 7:
                return 'July';
                break;
            case 8:
                return 'August';
                break;
            case 9:
                return 'September';
                break;
            case 10:
                return 'October';
                break;
            case 11:
                return 'November';
                break;
            case 12:
                return 'December';
                break;
            
            default:
                return "Error Month ".$num;
                break;
        }
    }
}
/* End of file portal.php */
/* Location: ./application/controllers/portal.php */
?>