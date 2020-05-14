<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Model {
	public function dangbai($u, $m)
	{
	    $data = array('id_user'=> $u,'noidung' => $m);
	    $this->db->insert('post',$data);
	    return $this->db->insert_id();
	}
	

}

/* End of file post.php */
/* Location: ./application/models/post.php */