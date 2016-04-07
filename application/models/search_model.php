<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Search_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function getSummary()
	{
		$this->db->select('*');
		$this->db->from('user_login');
		$result = $this->db->get();
		if ($result->num_rows() > 0)
		{
			foreach ($result->result() as $r)
			{
				$d[] = $r;
			}
			return $d;
		}
	}
	
	function getSummaryActive()
	{
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where('active', 'Active');
		$result = $this->db->get();
		if ($result->num_rows() > 0 )
		{
			foreach ($result->result() as $r)
			{
				$d[] = $r;
			}
			return $d;
		}
		
	}
	
	function getSummaryVerified()
	{
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where('status', 'Verified');
		$result = $this->db->get();
		if ($result->num_rows() > 0 )
		{
			foreach ($result->result() as $r)
			{
				$d[] = $r;
			}
			return $d;
		}
	}
	
	
	function getSummaryClosed()
	{
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where('status', 'suspend');
		$result = $this->db->get();
		if ($result->num_rows() > 0 )
		{
			foreach ($result->result() as $r)
			{
				$d[] = $r;
			}
			return $d;
		}
	}
	
	function getSummaryTotalMYR()
	{
	
		$query = $this->db->select('SUM(fee) AS total_fee');
                $query = $this->db->get('user_login');
                return $query->result();
		
	}
	
	
	function getSummaryPending()
	{
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where('status', 'not');
		$result = $this->db->get();
		if ($result->num_rows() > 0 )
		{
			foreach ($result->result() as $r)
			{
				$d[] = $r;
			}
			return $d;
		}
	}
	
	function getSummaryComplete()
	{
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where('fee', '100');
		$result = $this->db->get();
		if ($result->num_rows() > 0 )
		{
			foreach ($result->result() as $r)
			{
				$d[] = $r;
			}
			return $d;
		}
	}
	
	
	
	
	
	
	function getState1()
	{
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where('state', 'johor');
		$result = $this->db->get();
		if ($result->num_rows() > 0 )
		{
			foreach ($result->result() as $r)
			{
				$d[] = $r;
			}
			return $d;
		}
	}
	
	function getState2()
	{
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where('state', 'melaka');
		$result = $this->db->get();
		if ($result->num_rows() > 0 )
		{
			foreach ($result->result() as $r)
			{
				$d[] = $r;
			}
			return $d;
		}
	}
	
	function getState3()
	{
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where('state', 'negeri sembilan');
		$result = $this->db->get();
		if ($result->num_rows() > 0 )
		{
			foreach ($result->result() as $r)
			{
				$d[] = $r;
			}
			return $d;
		}
	}
	
	function getState4()
	{
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where('state', 'kuala lumpur');
		$result = $this->db->get();
		if ($result->num_rows() > 0 )
		{
			foreach ($result->result() as $r)
			{
				$d[] = $r;
			}
			return $d;
		}
	}
	
	function getState5()
	{
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where('state', 'selangor');
		$result = $this->db->get();
		if ($result->num_rows() > 0 )
		{
			foreach ($result->result() as $r)
			{
				$d[] = $r;
			}
			return $d;
		}
	}
	
	function getState6()
	{
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where('state', 'putrajaya');
		$result = $this->db->get();
		if ($result->num_rows() > 0 )
		{
			foreach ($result->result() as $r)
			{
				$d[] = $r;
			}
			return $d;
		}
	}
	
	function getState7()
	{
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where('state', 'kedah');
		$result = $this->db->get();
		if ($result->num_rows() > 0 )
		{
			foreach ($result->result() as $r)
			{
				$d[] = $r;
			}
			return $d;
		}
	}
	
	function getState8()
	{
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where('state', 'perlis');
		$result = $this->db->get();
		if ($result->num_rows() > 0 )
		{
			foreach ($result->result() as $r)
			{
				$d[] = $r;
			}
			return $d;
		}
	}
	
	function getState9()
	{
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where('state', 'perak');
		$result = $this->db->get();
		if ($result->num_rows() > 0 )
		{
			foreach ($result->result() as $r)
			{
				$d[] = $r;
			}
			return $d;
		}
	}
	
	function getState10()
	{
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where('state', 'pulau pinang');
		$result = $this->db->get();
		if ($result->num_rows() > 0 )
		{
			foreach ($result->result() as $r)
			{
				$d[] = $r;
			}
			return $d;
		}
	}

	function getState11()
	{
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where('state', 'pahang');
		$result = $this->db->get();
		if ($result->num_rows() > 0 )
		{
			foreach ($result->result() as $r)
			{
				$d[] = $r;
			}
			return $d;
		}
	}
	
	function getState12()
	{
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where('state', 'terengganu');
		$result = $this->db->get();
		if ($result->num_rows() > 0 )
		{
			foreach ($result->result() as $r)
			{
				$d[] = $r;
			}
			return $d;
		}
	}
	
	function getState13()
	{
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where('state', 'kelantan');
		$result = $this->db->get();
		if ($result->num_rows() > 0 )
		{
			foreach ($result->result() as $r)
			{
				$d[] = $r;
			}
			return $d;
		}
	}
	
	function getState14()
	{
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where('state', 'labuan');
		$result = $this->db->get();
		if ($result->num_rows() > 0 )
		{
			foreach ($result->result() as $r)
			{
				$d[] = $r;
			}
			return $d;
		}
	}
	
	function getState15()
	{
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where('state', 'sabah');
		$result = $this->db->get();
		if ($result->num_rows() > 0 )
		{
		
			foreach ($result->result() as $r)
			{
				$d[] = $r;
			}
			return $d;
		}
	}
	
	function getState16()
	{
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where('state', 'sarawak');
		$result = $this->db->get();
		if ($result->num_rows() > 0 )
		{
			foreach ($result->result() as $r)
			{
				$d[] = $r;
			}
			return $d;
		}
	}
	
	
	
	function getShareUnit()
	{
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where('available', '1000');
		$result = $this->db->get();
		if ($result->num_rows() > 0 )
		{
			foreach ($result->result() as $r)
			{
				$d[] = $r;
			}
			return $d;
		}
	}
	
	function getShareTotalMYR()
	{
	
		$query = $this->db->select('SUM(available) AS total_share');
                $query = $this->db->get('user_login');
                return $query->result();
		
	}
	
	function getSharePending()
	{
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where('status', 'not');
		$result = $this->db->get();
		if ($result->num_rows() > 0 )
		{
			foreach ($result->result() as $r)
			{
				$d[] = $r;
			}
			return $d;
		}
	}
	
	function getShareComplete()
	{
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where('fee', '100');
		$result = $this->db->get();
		if ($result->num_rows() > 0 )
		{
			foreach ($result->result() as $r)
			{
				$d[] = $r;
			}
			return $d;
		
	       }
	}
	
	function getLaverageDividen()
	{
		$query = $this->db->select('SUM(dividen) AS total_dividen');
                $query = $this->db->get('user_login');
                return $query->result();
		
	}
	
	function getLaverageSharing()
	{
		$query = $this->db->select('SUM(profit) AS total_sharing');
                $query = $this->db->get('user_login');
                return $query->result();
		
	}
	
	function getLaverageBonus()
	{
		$query = $this->db->select('SUM(bonus) AS total_bonus');
                $query = $this->db->get('user_login');
                return $query->result();
		
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