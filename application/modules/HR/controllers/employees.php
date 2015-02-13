<?php
if(!defined("BASEPATH")) exit();

/**
* 
*/
class employees extends MY_Controller
{
	var $job_combo;
	var $employee_tbl;
	var $employee_combo;
	function __construct()
	{
		parent:: __construct();
		$this->load->model('hr_model');
	}

	public function index()
	{
		$data['content_page'] = 'hr/employees';
		$data['sidebar'] = 'hr_side_bar';
		$data['active_jobs'] = $this->job_groups();
		$data['employee_combo'] = $this->employee_combo();
		$data['employee_details'] = $this->load_employees_table();
		// echo "<pre>";print_r($data);die();
		$this->template->call_template($data);
	}

	function registration()
	{
		$insert = $this->hr_model->register_employee();

		if ($insert) {
			
		} else {
			
		}
		
	}

	function load_employees_table()
	{
		$employee_details = $this->hr_model->get_all_employees();
		// echo "<pre";print_r($employee_details);die();
		$count = 0;
		$this->employee_tbl .= "<tbody>";
		if ($employee_details == NULL) {
			$this->employee_tbl .= '<tr>';
			$this->employee_tbl .= '<td colspan="10"><center>No reconrd found in the database...</center></td>';
			$this->employee_tbl .= '</tr>';
		} else {
			foreach ($employee_details as $key => $value) {
				if ($value['status'] == 1) {
					$span = '<span></span>';
				} else if ($value['status'] == 0) {
					$span = '<span></span>';
				}
				$count++;
				$this->employee_tbl .= '<tr>';
				$this->employee_tbl .= '<td>'.$count.'</td>';
				$this->employee_tbl .= '<td>'.$value['f_name'].'</td>';
				$this->employee_tbl .= '<td>'.$value['m_name'].'</td>';
				$this->employee_tbl .= '<td>'.$value['l_name'].'</td>';
				$this->employee_tbl .= '<td>'.$value['national_id'].'</td>';
				$this->employee_tbl .= '<td>'.$value['date_employed'].'</td>';
				$this->employee_tbl .= '<td>'.$value['gender'].'</td>';
				$this->employee_tbl .= '<td>'.$value['job_group'].'</td>';
				$this->employee_tbl .= '<td>'.$value['marital_status'].'</td>';
				$this->employee_tbl .= '<td>'.$span.'</td>';
				$this->employee_tbl .= '</tr>';
			}
		}
		
		$this->employee_tbl .= "</tbody>";

		return $this->employee_tbl;
	}

	function job_groups()
	{
		$job_groups = $this->hr_model->get_active_job_groups();
		// echo "<pre>";print_r($job_groups);die();
		$this->job_combo .= '<select class="form-control selectpicker" name="job_group_id" id="job_group_id" data-size="2" data-live-search="true">';
		$this->job_combo .= '<option value="0">Select a Category</option>';
		foreach ($job_groups as $key => $value) {
			$this->job_combo .= '<option value="'.$value['jg_id'].'">'.$value['job_group'].'</option>';
		}
		$this->job_combo .= '</select>';

		return $this->job_combo;
	}

	function employee_combo()
	{
		$employees = $this->hr_model->get_all_employees();
		// echo "<pre>";print_r($employees);die();
		$this->employee_combo .= '<select class="form-control selectpicker" name="job_group_id" id="job_group_id" data-size="2" data-live-search="true">';
		$this->employee_combo .= '<option value="0" selected="true">**Select an Employee**</option>';
		foreach ($employees as $key => $value) {
			$this->employee_combo .= '<option value="'.$value['employee_id'].'">'.$value['f_name'].' '.$value['m_name'].' '.$value['l_name'].'</option>';
		}
		$this->employee_combo .= '</select>';

		return $this->employee_combo;
	}

	
}
?>