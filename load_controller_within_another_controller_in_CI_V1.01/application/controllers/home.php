<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
    function __construct(){
        parent::__construct();
        
        $this->load->controller('child_controller');
		
    }
    public function index(){
        echo "<h1>Home<h1>";
		  $this->child_controller->index();
		  

    }
	
	public function B(){
        $this->child_controller->methodB();
    }
}