<?php

Class Login_Database extends CI_Model {
    
    function trimData($arr) {
        $ii = 0;
        foreach ($arr as $t=>$a) {
            if ($a == '0') {
                $arr_out[$t] = "";
            } else {
                $arr_out[$t] = $a;
            }
            $ii++;
        }
//        echo "<pre>"; print_r($arr); 
//        print_r($arr_out); echo "</pre>";
//        die();
        return $arr_out;
    }

    function getMembers() {
        $this->db->select("id_login,status,user_level,gender,active,state");
        $this->db->from('user_login');
        $query = $this->db->get();
        return $query->result();
    }

    function getTables() {
        $this->db->select("status,firstname,middlename,lastname,gender,state");
        $this->db->from('user_login');
        $this->db->where('status', 'not');
        $query = $this->db->get();
        return $query->result();
    }

    function view_by($id) {
        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->where('id_login', $id);
        $query = $this->db->get();
        return $query->row();
    }

    function update1($id, $data) {
        $this->db->where('id_login', $id);
        $this->db->update('user_login', $data);
    }

    function update1_username($username, $data) {
        $this->db->where('user_name', $username);
        $this->db->update('user_login', $data);
    }

    function delete($id) {
        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->where('id_login', $id);
        $this->db->delete();
        return $this->db->affected_rows();
    }

// check ic number
    function checkICNumber($data) {
        $condition = "user_name =" . "'" . $data['icnumber'] . "'";

        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->where($condition);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
    
    public function view_by_username($user_name) {
        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->where('user_name', $user_name);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $r) {
                $d[] = $r;
            }
            return $d;
        }
    }

    public function update_status() {
        $email = $this->input->get('email');

        $this->db->where('user_email', $email);

        $data = array('active' => 'Active');

        return $this->db->update('user_login', $data);
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

        if ($query->num_rows() == 0) {
            // Query to insert data in database
            $this->db->insert('user_login', $data);

            if ($this->db->affected_rows() > 0) {
                return true;
            }
        } else {
            return false;
        }
    }

// Read data using username and password
    public function login($data) {
        $condition = "user_name =" . "'" . $data['username'] . "' AND " . "user_password =" . "'" . $data['password'] . "'";

        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->where($condition);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function retrive($data) {
        $condition = "user_name =" . "'" . $data['username'] . "'";

        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->where($condition);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
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

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
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

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

}

?>