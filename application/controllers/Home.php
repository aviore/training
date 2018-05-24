<?php 

	
	class Home extends CI_Controller
	{	
	    public function index()
	    {
	    	$data['dataservice'] = $this->m_clemo->getService();
	    	$data['page'] = 'pages/home';
	    	$data['input'] = 'home';
	    	$data['datawork'] = $this->m_clemo->getWork();
	    	$data['datateama'] = $this->m_clemo->getTeamA();
	    	$data['datateamb'] = $this->m_clemo->getTeamb();
	    	$status = '2'; //awal status testi: 0, status testi jelek: 1, status testi terbaik: 2
	    	$data['testi'] = $this->m_clemo->getAllTesti($status);
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
			redirect("home");
		}
	}

 ?>