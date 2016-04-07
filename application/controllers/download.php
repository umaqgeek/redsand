<?php

class Download extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index() {
        $file_path = './file/';
        $files = scandir($file_path);        

        $files_array = array();        

        foreach($files as $key=>$file_name) {

            $file_name = trim($file_name);

            if($file_name != '.' || $file_name != '..') {
                if((is_file($file_path.$file_name))) {
                    array_push($files_array,$file_name);
                }
            }
        }

        $data['files'] = $files_array;

        $this->load->view('view_files', $data);
    }

    function recursive_browse($files,&$files_array)
    {

        $file_path = './file/';
        
        foreach($files as $key=>$file_name) {

            $file_name = trim($file_name);

            if($file_name != '.' || $file_name != '..') {
                if((is_file($file_path.$file_name))) {
                    array_push($files_array,$file_name);
                }
                else if(is_dir($file_path.$file_name)){
                    $recursive_files = scandir($file_path.$file_name);
                    print_r($file_name);exit;
                    $this->recursive_browse($recursive_files,$files_array);
                }
            }
        }
    }

    function download_zip() {

        $this->load->library('zip');
        $file_path = './file/';
        $zip_file_name = $_POST['file_name'];

        $selected_files = $_POST['files'];

        foreach($selected_files as $key=>$file){
            $this->zip->read_file($file_path.$file);
        }

        $this->zip->download($zip_file_name);

    }

}
?>
