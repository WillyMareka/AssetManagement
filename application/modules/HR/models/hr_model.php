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

	function get_all_employees()
	{
		$sql = "SELECT 
					*
				FROM
					`employee` `emp`
				LEFT JOIN `employee_job_group` `ejp`
					ON `emp`.`employee_id` = `ejp`.`employee_id`
					LEFT JOIN `job_group` `jg`
						ON `ejp`.`job_group_id` = `jg`.`jg_id`";
		$result = $this->db->query($sql);
		return $result->result_array();
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

	function register_employee()
	{
		$fname = $this->input->post('fname');
		$mname = $this->input->post('mname');
		$lname = $this->input->post('lname');
		$natID = $this->input->post('natid');
		$NHIF = $this->input->post('nhifno');
		$KRA = $this->input->post('krapin');
		$gender = $this->input->post('gender');
		$dob = $this->input->post('dob');
		$mar_sts = $this->input->post('marStatus');
		$job_group = $this->input->post('job_group_id');

		$employee = array(
						'national_id' => $natID,
						'nhif_number' => $NHIF,
						'kra_pin' => $KRA,
						'f_name' => $fname,
						'm_name' => $mname,
						'l_name' => $lname,
						'gender' => $gender,
						'dob' => $dob,
						'marital_status' => $mar_sts,
						'status' => 1
						);

		$this->db->insert('employee', $employee);
		$id = $this->db->insert_id();

		$employee_job_group = array(
								'job_group_id' => $job_group,
								'employee_id' => $id
								);
		
		$insert = $this->db->insert('employee_job_group', $employee_job_group);
		return $insert;
	}
}

?>