<?php 
	
	class Category extends CI_Controller
	{
	    public function index()
	    {
	    	$id = $this->uri->segment(3);
	    	$id2 = $this->uri->segment(4);

	    	$config['base_url'] = site_url('category/index/'.$id);
			$config['total_rows'] = $this->m_clemo->getTotalRowsCategory($id);
			$config['per_page'] = 4;

			$config['full_tag_open'] = '<nav aria-label="..."><ul class="pager">';
			$config['full_tag_close'] = '</ul></nav>';

			$config['prev_link'] = 'Previous';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';

			$config['next_link'] = 'Next';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';

			// tidak aktif
			$config['display_pages'] = FALSE;

			$this->pagination->initialize($config);

			$data['pagination_link'] = $this->pagination->create_links();
			$limit = $config['per_page'];
			$offset = ! $id2 ? 0 : $id2;

	    	$data['page'] = 'pages/category';
	    	$data['blogs'] = $this->m_clemo->getBlogByCategory($id, $limit, $offset);

	    	$data['category'] = $this->m_clemo->getAllCategory();	    

	    	


	        $this->load->view('template', $data);
	    }
	}

 ?>