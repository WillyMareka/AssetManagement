<?php


class M_tenant extends MY_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	function register_tenant($tenant_first_name, $tenant_last_salary, $national_passport, $phone_number, $tenant_status)
	{
		$tenant = array(
						'firstname' => $tenant_first_name,
						'lastname' 	=> $tenant_last_name,
						'nationalid_passport' 	=> $national_passport,
						'phone_number' 	=> $phone_number,
						'status' 	=> $tenant_status
						);

		$insert = $this->db->insert('tenant', $tenant);
		return $insert;

	}

	function get_tenants()
	{
		$sql = "SELECT 
					*
				FROM
					`tenant`";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	function get_active_tenants()
	{
		$sql = "SELECT 
					*
				FROM
					`tenant`
				WHERE 
					`status` = 1";
		$result = $this->db->query($sql);
		return $result->result_array();
	}
}

?>