<?php 

	
	class M_clemo extends CI_Model
	{
	    public function getAllService($limit, $offset)
	    {
	    	$this->db->limit($limit, $offset);
	    	$this->db->order_by('id', 'DESC');
	    	return $this->db->get('marcel_service')->result();
	    }
	    public function getService()
	    {
	    	$this->db->limit(4);
	    	$this->db->order_by('id', 'DESC');
	    	return $this->db->get('marcel_service')->result();
	    }
	    public function getWork()
	    {
	    	$this->db->limit(6);
	    	$this->db->order_by('id', 'DESC');
	    	return $this->db->get('marcel_works')->result();
	    }
	    public function getAllWork($limit, $offset)
	    {
	    	$this->db->limit($limit, $offset);
	    	$this->db->order_by('id', 'ASC');
	    	return $this->db->get('marcel_works')->result();
	    }
	    public function getTeamA()
	    {
	    	$this->db->limit(3);
	    	$this->db->order_by('id', 'ASC');
	    	return $this->db->get('marcel_team')->result();
	    }
	    public function getTeamB()
	    {
	    	$this->db->limit(3);
	    	$this->db->order_by('id', 'DESC');
	    	return $this->db->get('marcel_team')->result();
	    }
	    public function getAllBlog($limit, $offset)
	    {
			$this->db->limit($limit, $offset);
			$this->db->order_by('date', 'DESC');
			return $this->db->get('marcel_blog')->result();
		}
	    public function getBlogById($id)
	    {	
	  //   	$this->db->select('marcel_blog.id as id_blog, marcel_blog.id_category, marcel_blog.title, marcel_blog.description, 		marcel_blog.date, marcel_blog.image, marcel_category.id as category_id, marcel_category.category');
			// $this->db->join('marcel_category', 'marcel_blog.id_category = marcel_category.id');
	    	$this->db->where('marcel_blog.id', $id);
	    	return $this->db->get('marcel_blog')->row();
	    }
	    public function getServiceById($id)
	    {	
	    	$this->db->where('id', $id);
	    	return $this->db->get('marcel_service')->row();
	    }
	    public function getAllCategory()
	    {	
	    	return $this->db->get('marcel_category')->result();
	    }
	    public function getAllTesti($status)
	    {	
	    	$this->db->where('status', $status);
	    	return $this->db->get('marcel_testi')->result();
	    }
	    public function getBlogByCategory($id, $limit, $offset)
	    {
	    	
	    	$this->db->limit($limit, $offset);
	    	$this->db->where('id_category', $id);
	    	$this->db->order_by('date', 'DESC');
	    	return $this->db->get('marcel_blog')->result();
	    }
	    public function insertData($data)
		{
			$this->db->insert('marcel_message', $data);
		}
		public function getTotalRowsService()
		{
			return $this->db->get('marcel_service')->num_rows();
		}
		public function getTotalRowsWork()
		{
			return $this->db->get('marcel_works')->num_rows();
		}
		public function getTotalRowsBlog()
		{
			return $this->db->get('marcel_blog')->num_rows();
		}
		public function getTotalRowsCategory($id)
	    {
	    	$this->db->where('id_category', $id);
	    	return $this->db->get('marcel_blog')->num_rows();
	    }
	}



 