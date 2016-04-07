<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Search_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function search($keyword)
    {
        $this->db->like('title',$keyword);
		$this->db->or_like('id',$keyword);
        $query  =   $this->db->get('file');
        return $query->result();
    }
}   

?>