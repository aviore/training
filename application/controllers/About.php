<?php 

	
	class About extends CI_Controller
	{
	    public function index()
	    {
	    	$data['page'] = 'pages/about';
	    	$data['input'] = 'about';
	    	$data['datateama'] = $this->m_clemo->getTeamA();
	    	$data['datateamb'] = $this->m_clemo->getTeamb();
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
			redirect("about");
		}
	}

 ?>