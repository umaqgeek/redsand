<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Child_controller extends CI_Controller {
    function __construct(){
        parent::__construct();
    }
    public function index(){
        echo "<h1>Welcome to child controller in subdir2 directory<h1>";
    }
}