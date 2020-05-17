<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dangnhaptk extends CI_Model {

		public function check_log($user_log, $pass) //kiem tra tai khoan nay ton tai chua
		{
			  $this->db->where('my_email',$user_log);
				$query = $this->db->get('profile');
				if ($query->num_rows() > 0){
					return true; //Dung email
					//check pass
					$this->check_pass_mail($user_log, $pass);
				}
				else{
					//return false; //Sai email
					//check SDT
						$this->db->where('my_phone',$user_log);
						$query = $this->db->get('profile');
						if ($query->num_rows() > 0){
							return true;
							//check pass
							$this->check_pass_phone($user_log, $pass);

						}
						else{
							return false;
						}
				}
		}
		public function check_pass_mail($user_log, $pass) //kiem tra tai khoan nay ton tai chua
		{
								$this->db->select("*");
							  $query = $this->db->get_where('profile', array('my_email' => $user_log));
							  $result = $query->result_array();
							  $count = count($result); 
								if(empty($count)){
									return false;
								}
								else{
									if( $result[0]['my_password'] == md5($pass)) {
										return true;
										$this->session->set_userdata('my_us', $mail_phone);

									}
									else {
										return false;
									}
								}
		}
		
		public function check_pass_phone($user_log, $pass) //kiem tra tai khoan nay ton tai chua
		{
								$this->db->select("*");
							  $query = $this->db->get_where('profile', array('my_phone' => $user_log));
							  $result = $query->result_array();
							  $count = count($result); 
								if(empty($count)){
									return false;
								}
								else{
									if( $result[0]['my_password'] == md5($pass)) {
										return true;
										$this->session->set_userdata('my_us', $mail_phone);

									}
									else {
										return false;
									}
								}
		}
								
	

}

/* End of file profile.php */
/* Location: ./application/models/profile.php */