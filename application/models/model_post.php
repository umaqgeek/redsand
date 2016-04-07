<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_post extends CI_Model {

	function createPost($data)
	{		
		$this->db->insert('posttable', $data);
	}
	function getAllPost()
	{
		//$this->db->order_by("date", "asc");
		$q = $this->db->get("posttable");
		if($q->num_rows() > 0)
		{
			foreach($q->result() as $row)
			{
				$data[] = $row;
			}
			return $data;
		}
	}
	function getPost($d)
	{
		$this->db->where('id' , $d);
		$q = $this->db->get("posttable");
		if($q->num_rows() > 0)
		{
			foreach($q->result() as $row)
			{
				$data[] = $row;
			}
			return $data;
		}
	}
	function getLastPost()
	{
		$this->db->limit(1);
		$this->db->order_by('id', 'desc');
		$q = $this->db->get("posttable");
		$data = $q->result();
		return $data;
	}

	function getPostLimit($limit = null , $lastPost = null)
	{
		if($lastPost != null || $limit = null){
			$this->db->limit($limit);
			$q = $this->db->get("posttable");
			if($q->num_rows() > 0){
				$i = 0;
				foreach($q->result() as $row)
				{
					if($i > $lastPost){
						$data[] = $row;
					}
					$i++;
				}
				return $data;
			}
			else{
				echo "DB error";
			}
		}
		else{
			echo "Limit Problem Bro";
		}
	}
	function updatePost($data , $id)
	{
		$this->db->where("id" , $id);
		$this->db->update('posttable', $data);
	}
	function deletePost($data)
	{
		$this->db->where($data);
		$this->db->delete('posttable', $data);
	}
	function deleteAllPost()
	{
		$this->db->empty_table('posttable');
	}

	function editPost($data)
	{
		$this->db->where('id', $data->id);
	}
	function getNav()
	{
		$this->db->select("year , date");
		$q = $this->db->get("posttable");
		$this->load->helper("date");
		if($q->num_rows() > 0)
		{
			$count = 0;
			foreach($q->result() as $row)
			{
				$temp = new DateTime($row->date);
				$temp = $temp->format("m");
				$tempY = $row->year;
				if($count == 0)
				{
					$count++;
					$data[] = array(
						"year" => $tempY,
						"month" => $temp
						);
				}else
				{
					$tempArr = $data[$count-1];
					if ($tempArr["year"] != $tempY || $tempArr["month"] != $temp) 
					{	
						$count++;					
						$data[] = array(
							"year" => $tempY,
							"month" => $temp
							);
					}					
				}				
			}
			return $data;
		}
	}
}

/* End of file lib_post.php */
/* Location: ./application/libraries/lib_post.php */