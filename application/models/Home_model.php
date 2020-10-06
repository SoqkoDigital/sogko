<?php
class Home_model extends CI_Model 
{
	/*Insert new user*/
	function register_user($data)
	{
          $this->db->insert('tbl_user',$data);
          return $this->db->insert_id();
	}
	
	
	/*select  user details*/
	function select_userdetails($email)
	{
	  	$this->db->where('email_address',$email);
	    $userdetails=$this->db->get('tbl_user');
	 	if($userdetails->num_rows()>0)
        {
            $result=$userdetails->result_array();
            return $result;
        }
	}

}