<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baiviet extends CI_Model {

	public function them($u, $m)
	{
	    $time = time();
	    $data = array('id_user'=> $u,'noidung' => $m, 'time' => $time);
	    $this->db->insert('post',$data);
	    return $this->db->insert_id();
	}
	

}

/* End of file baiviet.php */
/* Location: ./application/models/Baiviet/baiviet.php */