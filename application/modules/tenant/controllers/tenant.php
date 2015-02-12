<?php
if(!defined("BASEPATH")) exit("No direct access to the script is allowed");

class Tenant extends MY_Controller
{
	var $active_groups;
	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_tenant');
	}
	function view()
	{
		$data['content_page'] = 'tenant/tenants';
		$data['sidebar'] = 'hr_side_bar';
		$data[''] = $this->m_tenant->get_tenants();
		$data['all_tenants'] = $this->all_tenants();
		// echo "<pre>";print_r($data);die();
		$this->template->call_template($data);
	}

	function registration()
	{
		$tenant_first_name = $this->input->post('tenantfname');
		$tenant_last_salary = $this->input->post('tenantlname');
		$national_passport = $this->input->post('nationalpass');
		$phone_number = $this->input->post('phonenumber');
		$tenant_status = $this->input->post('status');

		$insert = $this->m_tenant->register_tenant($tenant_first_name, $tenant_last_salary, $national_passport, $phone_number, $tenant_status);

		if ($insert) {
			echo "Insertion complete";
		} else {
			echo "Error occured";
		}
		
	}

	function all_tenants()
	{
		$active_job_groups = $this->m_tenant->get_tenants();
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
				$this->active_groups .= '<td>'.$value['firstname'].'</td>';
				$this->active_groups .= '<td>'.$value['lastname'].'</td>';
				$this->active_groups .= '<td>'.$value['nationalid_passport'].'</td>';
				$this->active_groups .= '<td>'.$value['phone_number'].'</td>';
				$this->active_groups .= '<td>'.$span.'</td>';
				$this->active_groups .= '<td>'.$value['date_registered'].'</td>';
				
				$this->active_groups .= '</tr>';
			}
		}
		
		$this->active_groups .= "</tbody>";

		return $this->active_groups;
	}

}
?>