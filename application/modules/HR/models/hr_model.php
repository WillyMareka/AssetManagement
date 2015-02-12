<?php

/**
* 
*/
class hr_model extends MY_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	function register_job_group($job_group_name,$job_group_salary,$job_group_status)
	{
		$job_group = array(
						'job_group' => $job_group_name,
						'status' 	=> $job_group_status,
						'salary' 	=> $job_group_salary
						);

		$insert = $this->db->insert('job_group', $job_group);
		return $insert;

	}

	function get_job_groups()
	{
		$sql = "SELECT 
					*
				FROM
					`job_group`";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	function get_active_job_groups()
	{
		$sql = "SELECT 
					*
				FROM
					`job_group`
				WHERE 
					`status` = 1";
		$result = $this->db->query($sql);
		return $result->result_array();
	}
}

?>