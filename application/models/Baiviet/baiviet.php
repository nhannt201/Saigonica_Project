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
	public function sua($id, $m)
	{
		$time = time();
	    $data = array('noidung' => $m, 'time' => $time);
	    $this->db->where('id', $id);
	    $this->db->update('post', $data);
	}
	public function get($l)
	{
	    $this->db->select('*');
		$this->db->order_by('time', 'DESC'); //sap xep giam dan theo cot TIME
	    $kq = $this->db->get('post', $l);
	    $kq = $kq->result_array();
	    return $kq;
	}
	

}

/* End of file baiviet.php */
/* Location: ./application/models/Baiviet/baiviet.php */