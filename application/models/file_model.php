<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class file_model extends CI_Model {
 
 
	
  function insert_file($title,$date,$filename)
  {
   $data = array( 
                  'title'  => $title,
				  'date'   => $date,
				  'source' => $filename
				);
   $this->db->insert('user_download',$data);
   return $this->db->insert_id();
  }
  
    function getalldata()
	{
	  $query = $this->db->get('file');
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