<?php

class M_hasildatapasien extends CI_Model{
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	public function getpasien()
	{
	  $query=$this->db->get('instanthire');
		$this->db->where('status','pending');
	  $result=$query->result();
	  $num_rows=$query->num_rows();
	  $last_three_record=array_slice($result,-3,3,true);
	  return array("all_data"=>$result,"num_rows"=>$num_rows,"last_three"=>$last_three_record);
	}
}
