<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Child_controller extends CI_Controller {
    function __construct(){
        parent::__construct();
    }
	
    public function index(){
        echo "<h1>Child<h1>";
		
    }
	
	public function methodA(){
        echo "<h1>Method A<h1>";
    }
	
	public function methodB(){
        echo "<h1>Method B<h1>";
    }
	
	
	
}


class Child extends Child_controller {
    function __construct(){
        parent::__construct();
		$this->load->controller('home');
    }
	
    public function index(){
		 $this->home->index();
    }
	
	
}