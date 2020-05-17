<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller {


	public function index()
	{
		$this->load->view('Trangcanhan/profile');		
	}
	
	public function update_profile()
	{
		//Lay ket qua post
		$us_fullname = $this->input->post('my_fullname');
		$us_email = $this->input->post('my_email');
		$us_password = "123456";
		//Load Model
		$this->load->model('Caidat/st_profile');
		//$this->model_name->method();
		//Call method model
		// if($this->st_profile->capnhat($us_fullname,$us_email, $us_password)){
	   // 	header('Location: http://'.$_SERVER['HTTP_HOST'].'/profile');
		//	exit;	    
	 //   }else{
	  //  	$noti = 'error';
	  //  }
	   // echo $noti;

	}
}
/* End of file profile.php */
/* Location: ./application/controllers/profile.php */