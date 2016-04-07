<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loginsss extends CI_Controller
{

    function __construct() {
        parent::__construct();
		$this->load->controller('child_controller');
    }

    
    public function index(){
        echo "<h1>Login<h1>";
		 $this->child_controller->index();
    }
	
	public function A(){
        $this->child_controller->methodA();
		
    }

   
	
	
}

