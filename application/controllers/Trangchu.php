<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trangchu extends CI_Controller {
	private  $checkform = FALSE;

	public function index()
	{
		$this->load->view('Trangchu');		
	}
	public function form_post()
	{
		$this->form_validation->set_rules('posts', 'posts');
		if($this->form_validation->run() == TRUE) {
			$this->checkform = TRUE;
		}
		$data['checkform'] = $this->checkform;
		$this->load->view('Trangchu', $data);
			
		
	}
}

/* End of file Trangchu.php */
/* Location: ./application/controllers/Trangchu.php */