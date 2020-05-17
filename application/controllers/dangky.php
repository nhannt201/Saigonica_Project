<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dangky extends CI_Controller {

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
		$this->load->view('taikhoan/dangky');
	}
	public function new_user()
	{
	    $mail = $this->input->post('my_email');
		$phone = $this->input->post('my_phone');
		$fullname = $this->input->post('my_fullname');
		$password = $this->input->post('my_pass');
		$repassword = $this->input->post('my_repass');
		if ($password == $repassword) {
			$this->load->model('taikhoan/dangkymoi');
			
			if($this->dangkymoi->checkmail($mail)){
				$noti = 'E-mail nay da duoc dang ky voi tai khoan khac!';

			}else{
				 if($this->dangkymoi->checkphone($phone))
				 { 
					$noti = 'So dien thoai nay da duoc lien ket voi tai khoan khac!';
				 } else
				 {
					 $this->load->model('Caidat/st_profile');
						  if($this->st_profile->dangky($fullname,$mail,$phone, $password))
							{
							//header('Location: http://'.$_SERVER['HTTP_HOST'].'/profile');
							//exit;	 
							$noti = 'Dang ky thanh cong!';								} else
							{
							 $noti = 'Khong the dang ky vao luc nay!';
							}
				 }
			}
			
		} else {
			$noti = 'Mat khau ban nhap khong giong nhau!';
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
