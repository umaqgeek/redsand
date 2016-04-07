<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PagModel extends CI_Model
{
    public function __construct() {
       parent::__construct();
    }

    public function total_count() {
       return $this->db->count_all("user_login");
    }

    public function get_users($limit, $start) {
      $this->db->limit($limit, $start);
      $this->db->select('*');
      $this->db->from('user_login');
      $this->db->where('status','not');
      $query = $this->db->get();
      if ($query->num_rows() > 0) {
        return $query->result_array();
      }
      return false;
    }

    public function save()
    {
      $this->firstname = $_POST['firstname'];
      $this->middlename = $_POST['middlename'];
      $this->lastname = $_POST['lastname'];
      $this->phone = $_POST['phone'];
      $this->street1 = $_POST['street1'];
      $this->street2 = $_POST['street2'];
      $this->district = $_POST['district'];
      $this->postcode = $_POST['postcode'];
      $this->state = $_POST['state'];
      $this->country = $_POST['country'];

      $this->db->insert('user_login', $this);
    }
}
?>