<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gallery_model extends CI_Model {

    function isPayFee($user_name)
    {
        $this->db->select('*');
    	$this->db->from('user_login');
    	$this->db->where('user_name', $user_name);
    	$this->db->where('fee > 0');
    	$da = $this->db->get();
        if ($da->num_rows() > 0)
        {
            return true;
        } 
        else
        {
            return false;
        }
    }
    
    function insert_file($title,$date,$status,$filename,$username="-", $fee=0, $available=0)
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
                  'loginID' => $loginid,
                  'fee' => $fee,
                  'available' => $available
                );

        $this->db->insert('payproof',$data);
        return $this->db->insert_id();
      }
      echo 'tak masuk database';
    }

    function join1($username="")
    {
        $this->db->select('payproof.*');
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
    
    function deletePayproofID($id) {
        $this->db->select('pp.fee AS fee1, pp.available AS available1, '
                . 'ul.fee AS fee2, ul.available AS available2, '
                . 'ul.id_login');
        $this->db->from('payproof pp, user_login ul');
        $this->db->where('pp.loginID = ul.id_login');
        $this->db->where('id', $id);
        $q = $this->db->get();
        if ($q->num_rows()) {
            $r = $q->result();
            
            $fee_p = $r[0]->fee1;
            $ava_p = $r[0]->available1;
            $fee_o = $r[0]->fee2;
            $ava_o = $r[0]->available2;
            $id_lo = $r[0]->id_login;
            
            $fee_n = $fee_o - $fee_p;
            $ava_n = $ava_o - $ava_p;
            
            $data_ul = array(
                'fee' => $fee_n,
                'available' => $ava_n
            );
            $this->db->where('id_login', $id_lo);
            $this->db->update('user_login', $data_ul);
            
            $return = $this->db->where('id', $id)->delete('payproof');
        }
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