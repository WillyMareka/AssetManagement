<?php
if(!defined("BASEPATH")) exit("No direct access to the script is allowed");

/**
* 
*/
class job_groups extends MY_Controller
{
	var $active_groups;
	function __construct()
	{
		parent:: __construct();
		$this->load->model('hr_model');
	}
	function index()
	{
		$data['content_page'] = 'hr/job_groups';
		$data['sidebar'] = 'hr_side_bar';
		$data[''] = $this->hr_model->get_job_groups();
		$data['all_job_groups'] = $this->all_job_groups();
		// echo "<pre>";print_r($data);die();
		$this->template->call_template($data);
	}

	function registration()
	{
		$job_group_name = $this->input->post('jobgroupname');
		$job_group_salary = $this->input->post('jobgroupsalary');
		$job_group_status = $this->input->post('status');

		$insert = $this->hr_model->register_job_group($job_group_name,$job_group_salary,$job_group_status);

		if ($insert) {
			echo "Insertion complete";
		} else {
			echo "Error occured";
		}
		
	}

	function all_job_groups()
	{
		$active_job_groups = $this->hr_model->get_job_groups();
		// echo "<pre>";print_r($active_job_groups);die();
		$count = 0;
		$this->active_groups .= "<tbody>";
		if ($active_job_groups == NULL) {
			$this->active_groups .= '<tr>';
			$this->active_groups .= '<td colspan="4"><center>No reconrd found in the database...</center></td>';
			$this->active_groups .= '</tr>';
		} else {
			foreach ($active_job_groups as $key => $value) {
				if ($value['status'] == 1) {
					$span = '<span></span>';
				} else if ($value['status'] == 0) {
					$span = '<span></span>';
				}
				$count++;
				$this->active_groups .= '<tr>';
				$this->active_groups .= '<td>'.$count.'</td>';
				$this->active_groups .= '<td>'.$value['job_group'].'</td>';
				$this->active_groups .= '<td>'.$value['salary'].'</td>';
				$this->active_groups .= '<td>'.$span.'</td>';
				$this->active_groups .= '</tr>';
			}
		}
		
		$this->active_groups .= "</tbody>";

		return $this->active_groups;
	}

}
?>