<?php 

	
	class Contact extends CI_Controller
	{
	    public function index()
	    {
	    	$data['page'] = 'pages/contact';
	        $this->load->view('template', $data);
	    }
	    public function input()
	    {
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'message' => $this->input->post('message')
			);
			$this->m_clemo->insertData($data);
			redirect("contact");
		}
	}

 ?>