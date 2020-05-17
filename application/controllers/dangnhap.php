<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dangnhap extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->library('session');
		$this->load->view('taikhoan/dangnhap');
	}
	public function login_user()
	{
		$this->load->library('session');
	    $mail_phone = $this->input->post('my_user');
		$password = $this->input->post('my_pass');

			$this->load->model('taikhoan/dangnhaptk');
			
			if($this->dangnhaptk->check_log($mail_phone, $password)){
				//Dung email/phone. check pass
				$noti = "Dang nhap thanh cong!";
	


			}else{
				$noti = "Dang nhap that bai!";
			}
			
		echo $noti;
									echo '<br/><script type="text/javascript">
							var count = 6;
							var redirect = "/";
							 
							function countDown(){
								var timer = document.getElementById("timer");
								if(count > 0){
									count--;
									timer.innerHTML = "This page will redirect in "+count+" seconds.";
									setTimeout("countDown()", 1000);
								}else{
									window.location.href = redirect;
								}
							}
							</script>
							 
							Our webpage has beed moved. Please update your bookmarks for the new site.
							<br>
							 
							<span id="timer">
							<script type="text/javascript">countDown();</script>
							</span>';							

	}
}
