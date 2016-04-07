<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gallery_model extends CI_Model {

    function insert_file($title,$date,$status,$filename,$username="-")
    {
    	$this->db->select('*');
    	$this->db->from('user_login');
    	$this->db->where('user_name', $username);
    	$da = $this->db->get();
    	$loginid = -1;

    	foreach ($da->result() as $row)
	    {
    		$loginid = $row->id_login;
 	
        $data = array( 
                  'reference'  => $title,
                  'dates'   => $date,
                  'statuses' => $status,
                  'source' => $filename,
                  'loginID' => $loginid
                );

        $this->db->insert('payproof',$data);
        return $this->db->insert_id();
      }
      echo 'tak masuk database';
    }

    function join1($username="")
    {
        $this->db->select('*');
        $this->db->from('payproof');
        $this->db->join('user_login', 'user_login.id_login = payproof.loginID' , 'left');
        $this->db->where('user_login.user_name', $username);
        $query = $this->db->get();
        $d = array();
        
        foreach ($query->result() as $row)
      	{
      		$d[] = $row;
      	}
	      return $d;
    }

    function view_by()
    {
    $this->db->select('*');
    $this->db->from('payproof');
    $query = $this->db->get();
    return $query->row();
    }

  
    function getalldata()
    {
      $query = $this->db->get('file');
      return $query->result();    
    }


    function getMembers()
    {
      $this->db->select("reference,date,status,source");
      $this->db->from('payproof');
      $query = $this->db->get();
      return $query->result();
    }
        
    
    public function get_file($file_id)
    {
     return $this->db->select()
                     ->from('file')
                     ->where('id',$file_id)
                     ->get()
                     ->row();
    }
    
    public function delete_file($file_id)
    {
        $file = $this->get_file($file_id);
        if(!$this->db->where('id',$file_id)->delete('file'))
        {
            return false;
        }
        
        unlink('file/' .$file->product_pic);
        return true;
    }  
}

?>