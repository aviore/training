<?php 

    
    class Work extends CI_Controller
    {
        public function index()
        {
        	$config['base_url'] = site_url('work/index');
			$config['total_rows'] = $this->m_clemo->getTotalRowsWork();
			$config['per_page'] = 12;

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
			$offset = ! $this->uri->segment(3) ? 0 : $this->uri->segment(3);

            $data['page'] = 'pages/work';
            $data['alldatawork'] = $this->m_clemo->getAllWork($limit, $offset);
            $this->load->view('template', $data);

        }
    }

 ?>