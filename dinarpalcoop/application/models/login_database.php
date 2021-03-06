<?php

Class Login_Database extends CI_Model {

function getMembers(){
  $this->db->select("id_login,status,user_level,gender,active");
  $this->db->from('user_login');
  $query = $this->db->get();
  return $query->result();
}

// check ic number
function checkICNumber($data)
{
$condition = "user_name =" . "'" . $data['icnumber'] . "'";
$this->db->select('*');
$this->db->from('user_login');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();
 if ($query->num_rows() == 1)
 {
  return $query->result();
 } 
 else 
 {
  return false;
 }
 
}

// Insert registration data in database
public function registration_insert($data) {

	// Query to check whether username already exist or not
	$condition = "user_name =" . "'" . $data['user_name'] . "' OR " . "user_email =" . "'" . $data['user_email'] . "'";
	$this->db->select('*');
	$this->db->from('user_login');
	$this->db->where($condition);
	$this->db->limit(1);
	$query = $this->db->get();
	if ($query->num_rows() == 0) 
	{
	// Query to insert data in database
		$this->db->insert('user_login', $data);
		if ($this->db->affected_rows() > 0) 
		{
			return true;
		}
	} 
	else 
	{
	  return false;
	}

}


// Read data using username and password
public function login($data) 
{
$condition = "user_name =" . "'" . $data['username'] . "' AND " . "user_password =" . "'" . $data['password'] . "'";
$this->db->select('*');
$this->db->from('user_login');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

 if ($query->num_rows() == 1)
 {
  return true;
 } 
 else 
 {
  return false;
 }
  
}


public function retrive($data) 
{
$condition = "user_name =" . "'" . $data['username'] . "'";
$this->db->select('*');
$this->db->from('user_login');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

 if ($query->num_rows() == 1)
 {
  return $query->result();
 } 
 else 
 {
  return false;
 }
  
}





// Read data from database to show data in admin page
public function read_user_information($sess_array) {

$condition = "user_name =" . "'" . $sess_array['username'] . "'";
$this->db->select('*');
$this->db->from('user_login');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

  if ($query->num_rows() == 1)
  {
   return $query->result();
  }
  else 
  {
    return false;
  }

}

public function retrive_user_information($sess_array) {

$condition = "user_name =" . "'" . $sess_array['username'] . "'";
$this->db->select('*');
$this->db->from('user_login');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

  if ($query->num_rows() == 1)
  {
   return $query->result();
  }
  else 
  {
    return false;
  }

}










}
?>