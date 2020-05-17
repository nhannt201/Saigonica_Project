<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dangkymoi extends CI_Model {
	public function checkmail($mail) //kiem tra tai khoan nay ton tai chua
	{
		  $this->db->where('my_email',$mail);
			$query = $this->db->get('profile');
			if ($query->num_rows() > 0){
				return true;
			}
			else{
				return false;
			}
	}
	public function checkphone($phone) //kiem tra tai khoan nay ton tai chua
	{
		  $this->db->where('my_phone',$phone);
			$query = $this->db->get('profile');
			if ($query->num_rows() > 0){
				return true;
			}
			else{
				return false;
			}
	}
	

}

/* End of file profile.php */
/* Location: ./application/models/profile.php */