<?php 

	
	class Detailservice extends CI_Controller
	{
	    public function index()
	    {
	    	$id = $this->uri->segment(3);
	    	$data['page'] = 'pages/detailservice';
	    	$data['detailservice'] = $this->m_clemo->getServiceById($id);
	        $this->load->view('template', $data);
	    }
	}

 ?>