<?php
if(!defined("BASEPATH")) exit();

/**
* 
*/
class employees extends MY_Controller
{
	var $job_combo;
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
		// echo "<pre>";print_r($data);die();
		$this->template->call_template($data);
	}

	function registration()
	{

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

	
}
?>