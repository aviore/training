<?php 

	
	class Detailblog extends CI_Controller
	{
	    public function index()
	    {
	    	$id = $this->uri->segment(3);
	    	$data['page'] = 'pages/detailblog';
	    	$data['detailblog'] = $this->m_clemo->getBlogById($id);
	        $this->load->view('template', $data);
	    }
	}

 ?>