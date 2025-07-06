<?php

class Property_model extends CI_Model
{
	
	
//**************** sandeep work start ***********************************	
	function insert_registration($data)
	{
		$this->db->insert('property_user_registration', $data);
		if($this->db->affected_rows() > 0)
		{
			return true;
			// return $insert_id;
		}		
	}
	public function Login($email,$phone)
	{
		$this->db->select('*');
		$this->db->from('property_user_registration');	
		$this->db->where(array('email'=> $email,'phone'=> $phone)); 
		$login_sql= $this->db->get();
		// echo $this->db->last_query();die;
		if($login_sql -> num_rows() == 1)
		{
			$login_time=date('Y-m-d H:i:s');
			$ip = $this->get_ip_address();		
			$login_result = $login_sql->result_array();	
			foreach($login_result as $login_row)
			{
				$insert_data=array('first_name' => $login_row['first_name'],'last_name' => $login_row['last_name'],'email' => $login_row['email'],'phone' => $login_row['phone'],'login_time' => $login_time,'ip' => $ip);
				$this->db->insert('property_session_tbl', $insert_data);
			}
			return $login_result;
		}
		else
		{
			return 0;
		}
	} 
	function get_ip_address() 
	{
		foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) 
		{
			if (array_key_exists($key, $_SERVER) === true) 
			{
				foreach (explode(',', $_SERVER[$key]) as $ip) 
				{
					if (filter_var($ip, FILTER_VALIDATE_IP) !== false) 
					{
						return $ip;
					}
				}
			}
		}
	}
}
?>