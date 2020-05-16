<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function index()
	{
			
		$this->load->model('Baiviet/baiviet');
		$data = $this->baiviet->get(10);
		$data = array('post' => $data);
		$this->load->view('Trangchu/home', $data, FALSE);

	}

	public function post_message()
	{
	    $noidung = $this->input->post('posts');
	    $this->load->model('Baiviet/baiviet');
	    
	    if($this->baiviet->them('1',$noidung)){
	    	//$noti = 'success';
	    header('Location: http://'.$_SERVER['HTTP_HOST']);
			exit;	
	    }else{
	    	$noti = 'error';
	    }
	    echo $noti;
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */