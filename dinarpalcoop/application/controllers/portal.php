<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_post');
		$this->load->library('grocery_CRUD');
	}
	
	public function index($private = false)//!!!!!!!!!!!!!!!!!!!!!
	{
        /*
        *$data = $this->_checkSession();
        if($data != false)
        {
            $private = true;
        }
        */
        echo '
        <a href="'.base_url().'index.php/portal/post/add">Add Post</a><br>
        <a href="'.base_url().'index.php/portal/post">Post List</a><br>
        <a href="'.base_url().'index.php/portal/index/true">Post Member Only</a><br>';
		$data['nav'] = $this->displayNav($private);
        $data['postList'] = $this->_displayPost(null,$private);//null utk display all
		
        $this->load->view('test', $data);		
	}
	function postContent($id)// !!!!!!!!!!!!
	{
        $this->load->helper('date');
        //echo $id;
		$post = $this->model_post->getPost($id);
        //print_r($post);
        $date = new DateTime($post[0]->date);
        $data['t'] = $post[0]->title;
        $data['d'] = $date->format("d");
        $data['month'] = $date->format("F");
        $data['y'] = $date->format("Y");
        $data['m'] = $date->format("m");
        $data['id'] = $post[0]->id;
        $data['content'] = $post[0]->content;
        $data['author'] = $post[0]->author;
        //$data['postList'] = $this->_displayPost($post);
        //print_r($data);
		require('main.php');
		$temp = new Main;
		$temp->showMenu();
		unset($temp);
        $this->load->view('test2', $data);
		$this->load->view('footer');
	}
	function _insertPost($post_array)
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
        $post_array['author'] = "The Management";// sini masukkan session user name;
		$post_array['month'] = $month; 
        //$post_array['content'] = $this->_replaceCode($post_array['content'],$post_array['id'] , false);
		
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
		//echo "Insert Success";
        //$this->index();
	}
    function _afterInsert($post_array)
    {
        //'id', 'year', 'date', 'title', 'author', 'content', 'month'
        $row = $this->model_post->getLastPost();
        $temp = $row['0']->content;
        $row['0']->content = $this->_replaceCode($row['0']->content,$row['0']->id , false);
        if($row['0']->content != $temp)
        {            
            $data = array(
                "content" => $row['0']->content
            );
            $this->model_post->updatePost($data ,$row['0']->id);
        }
        return true;
    }
    function _beforeUpdate($post_array)
    {
        echo "<script>alert('huhu');</script>";
        $post_array["content"] = $this->_replaceCode($post_array["content"],$post_array["id"], true);
        return $post_array;
    }
	function _getAllPost()
	{
		$data = $this->model_post->getAllPost();	
		$this->load->view('viewAllPost', $data);	
	}
	function getPost()
	{
		$data = $this->model_post->getPost();
		$this->load->view('viewPost', $data);
	}
    function getPostLimit($limit, $lastPost)
    {
        $huhu = $this->model_post->getPostLimit($limit, $lastPost);
        echo '
        <a href="'.base_url().'index.php/portal/post/add">Add Post</a><br>
        <a href="'.base_url().'index.php/portal/post">Post List</a><br>';
        $data['nav'] = $this->displayNav();
        $data['postList'] = $this->_displayPost($huhu);//null utk display all
        
        $this->load->view('test', $data);   

    }
	function _example_output($output = null) //!!!!!!!!!!!!!!!!!
    {
		require('main.php');
		$temp = new Main;
		$temp->showMenu();
		unset($temp);
        $this->load->view('crude.php',$output);
		$this->load->view('footer');    
    }	
    public function post()//!!!!!!!!!!!!!!!
    {  
		$data = $this->_checkSession();
	   	if($data != false)
       	{ 
			$this->load->model('login_database');
			$result = $this->login_database->retrive($data);
			if($result[0]->user_level == '0')
			{
				unset($result);
				//'id', 'year', 'date', 'title', 'author', 'content', 'month'
				$crud = new grocery_CRUD();		
				$crud->set_theme('flexigrid');
				$crud->set_lang_string('insert_success_message',
				 '<script type="text/javascript">
				  window.location = "'.site_url('main').'";
				 </script>
				 '
				);
				$crud->order_by('id','desc');		
				$crud->set_table('posttable');
				
				$crud->columns('title', 'content', "date", 'private');
				$crud->fields('private','title','content','year', 'date', 'author', 'month' , 'id');
				$arr[0] = 'year';
				$arr[1] = 'date';
				$arr[2] = 'author';
				$arr[3] = 'month';
				$arr[4] = 'id';
				$this->hideFormField($crud,$arr);
				$crud->set_subject("Post");
				
				$crud->callback_before_insert(array($this,'_insertPost'));
				$crud->callback_after_insert(array($this,'_afterInsert'));
				$crud->callback_before_update(array($this,'_beforeUpdate'));        
				$output = $crud->render(); 
				$this->_example_output($output);
			}else
			{
				echo "Awak Bkan Admin";	
			}
		}
	   else
	   {
			$this->_redirectPage();   
	   }    
    }	
    
    public function displayNav($private = false)
    {
    	$code = '
    	';
    	$data = $this->model_post->getNav($private);
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
    public function _displayPost($data = null, $private = false)
    {
        $this->load->helper('date');
        //'id', 'year', 'date', 'title', 'author', 'content', 'month'
        $code = '
        ';
        if($data == null){
            $data = $this->model_post->getAllPost($private);
        }
        
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
        <article id="post-'.$id.'" class="post-'.$id.' post type-post status-publish format-aside hentry category-general set-'.$y.'-'.$m.' clearfix has-post-title has-post-date has-post-category has-post-tag has-post-comment has-post-author isotope-item alt" style="position: absolute; left: 381px; top: 998px;">
            <div class="post-inner clearfix">
            <!-- Title, post icon, post date -->
            <span class="post-icon"></span>
                <time datetime="'.$y.'-'.$m.'-'.$d.'" class="post-date entry-date updated" itemprop="datePublished">
                    <span>'. $this->month($m) .' '.$d.', '.$y.'</span>
                </time>
                <h1 class="post-title entry-title" itemprop="name"><a href="'. base_url().'index.php/portal/postContent/'.$id.'/" title="'.$t.' " >'.$t.'</a></h1>
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
                    <a class="jump-month" data-jump="jump-'.$year.'-'.$month.'" data-year="'.$year.'"" data-month="'.$month.'" href="'.base_url().'postline/'.$year.'/'.$month.'">
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
    function deleteAll()
    {
		$data = $this->_checkSession();
	   	if($data != false)
       	{ 
        	$this->model_post->deleteAllPost();
       		$this->post();
		}
	   else
	   {
			$this->_redirectPage();   
	   }
    }

    function _replaceCode($data , $id , $bool)
    {
        $word = explode('[hide]', $data);
        unset($data);
        $data = implode(" [hide] ", $word);
        unset($word);
        $word = explode('[/hide]', $data);
        unset($data);
        $data = implode(" [/hide] ", $word);
        unset($word);
        $word = explode('&nbsp;', $data);
        unset($data);
        $data = implode(" ", $word);
        unset($word);       
        $m = 0;
        while ($bool) {
            $string = $id."_".$m;
            $word = explode($string,$data);
            if(count($word) > 1)
            { 
                unset($data);
                $data = implode($string, $word);
                $m++;                
            }
            else{
                unset($word);
                $bool = false;
            }
            unset($word);            
        }
        $word = explode(" ", $data);
        unset($data);
        for ($i = 0; $i < count($word); $i++) { 
            if($word[$i] == "[hide]")
            {
                $word[$i] = $this->atasHide($id,$m);
                $m++;
            }            
            if($word[$i] == "[/hide]") 
            {                
                $word[$i] = $this->bawahHide();               
            }            
            //echo gettype($word[$i]) . $i . "<br>" ;
        }
        return implode(" ", $word);	
    }
    function atasHide($id = null , $child = null)
    {
        $string = $id."_".$child;
        $code = "<a class = 'link' onclick = 'hideOrNot(".'"'.$string.'"'.");'>Read More ...</a>
        <div class = 'readMore post-inner clearfix' id = '".$string."' style='display: none; z-index: 200; position: absolute; left: 0px; background: white;'>
        ";
        return $code;
    }
    function bawahHide()
    {
        $code = '</div>';
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
    
}
/* End of file portal.php */
/* Location: ./application/controllers/portal.php */
?>