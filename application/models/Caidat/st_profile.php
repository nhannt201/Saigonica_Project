<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class st_profile extends CI_Model {
	public function dangky($name, $mail, $phone, $pass)
	{
	    $data = array('my_fullname'=> $name,'my_email' => $mail, 'my_phone' => $phone,'my_password' => md5($pass));
	    $this->db->insert('profile',$data);
	    return $this->db->insert_id();
	}
	public function capnhat($name, $mail, $phone, $pass)
	{
	    $data = array('my_fullname'=> $name,'my_email' => $mail, 'my_phone' => $phone,'my_password' => md5($pass));
	    $this->db->insert('profile',$data);
	    return $this->db->insert_id();
	}
	

}

/* End of file profile.php */
/* Location: ./application/models/profile.php */