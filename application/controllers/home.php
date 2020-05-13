<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function index()
	{
		$this->load->view('home');		
	}

	public function post_message()
	{
	    $this->input->post('posts');
	    echo $this->input->post('posts');
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */