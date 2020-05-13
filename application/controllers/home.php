<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function index()
	{
		$this->load->view('home');		
	}

	public function post_message()
	{
	    $noidung = $this->input->post('posts');
	    $this->load->model('post');
	    
	    if($this->post->dangbai('1',$noidung)){
	    	$noti = 'success';
	    
	    }else{
	    	$noti = 'error';
	    }
	    echo $noti;
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */