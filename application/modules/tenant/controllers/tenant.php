<?php
if(!defined("BASEPATH")) exit("No direct access to the script is allowed");

class Tenant extends MY_Controller
{
	var $active_groups;
	var $tenants_combo;
	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_tenant');
	}
	function index()
	{
		$data['content_page'] = 'tenant/tenants';
		$data['sidebar'] = 'hr_side_bar';
		$data['tenants_c'] = $this->all_tenant_combo();
		$data['tenants_f'] = $this->all_tenant_combo();
		$data['houses_c'] = $this->all_vhouse_combo();
		$data['all_tenants'] = $this->all_tenants();
		// echo "<pre>";print_r($data);die();
		$this->template->call_template($data);
	}

	

	function registration()
	{
		$path = base_url().'uploads/tenants/';
		       $config['upload_path'] = 'uploads/tenants';
		       $config['allowed_types'] = 'jpeg|jpg|png|gif';
		       $config['encrypt_name'] = TRUE;
		       $this->load->library('upload', $config);
		       $this->upload->initialize($config);

		      
			if ( ! $this->upload->do_upload('tenantpicture'))
		    {
			   $error = array('error' => $this->upload->display_errors());

			   print_r($error);die;
		    }
		     else
		     {
		       
                $data = array('upload_data' => $this->upload->data());
			     foreach ($data as $key => $value) {
				  //print_r($data);die;
				  $path = base_url().'uploads/tenants/'.$value['file_name'];
				
                  }

		$tenant_first_name = $this->input->post('tenantfname');
		$tenant_last_name = $this->input->post('tenantlname');
		$national_passport = $this->input->post('nationalpass');
		$phone_number = $this->input->post('phonenumber');
		$tenant_status = $this->input->post('status');

		$insert = $this->m_tenant->register_tenant($tenant_first_name, $tenant_last_name, $path, $national_passport, $phone_number, $tenant_status);

		echo json_encode($insert);
		}
	}

	function assignhouse()
	{
		

		$assignhouseid = $this->input->post('assignhouseid');
		$assignblock = $this->input->post('assignblock');
		$assigntenantid = $this->input->post('assigntenantid');
		$assignhouseno = $this->input->post('assignhouseno');
		$assignestate = $this->input->post('assignestate');
		$assignpnumber = $this->input->post('assignpnumber');
		$assignrent = $this->input->post('assignrent');
		$assignhousetype = $this->input->post('assignhousetype');
		$assignnapa = $this->input->post('assignnapa');
// print_r($_FILES);
		$insert = $this->m_tenant->assign_house($assignhouseid, $assignblock, $assigntenantid, $assignhouseno, $assignestate, $assignpnumber, $assignrent, $assignhousetype, $assignnapa);

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
		if(count($active_job_groups) > 0) {
			foreach ($active_job_groups as $key => $value) {
				if ($value['tenant_status'] == 1) {
					$span = '<span class="label label-success">Activated</span>';
				} else if ($value['tenant_status'] == 0) {
					$span = '<span class="label label-danger">Deactivated</span>';
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

	function ajax_get_tenant($id)
	{
		$tenant = $this->m_tenant->search_tenant($id);
		 //echo "<pre>";print_r($tenant[0]);die();
		$tenant = json_encode($tenant[0]);
		echo $tenant;
	}

	function ajax_get_house($id)
	{
		$house = $this->m_tenant->search_house($id);
		 //echo "<pre>";print_r($house[0]);die();
		$house = json_encode($house[0]);
		echo $house;
	}

	function ajax_get_atenant($id)
	{
		$tenant = $this->m_tenant->search_tenant($id);
		 //echo "<pre>";print_r($tenant[0]);die();
		$tenant = json_encode($tenant[0]);
		echo $tenant;
	}


	public function edittenant()
	{
		$id = $this->input->post('edittenantid');
		$tenant_first_name = $this->input->post('edittenantfname');
		$tenant_last_name = $this->input->post('edittenantlname');
		$national_passport = $this->input->post('editnationalpass');
		$phone_number = $this->input->post('editphonenumber');
		$tenant_status = $this->input->post('edittenantstatus');
		
		$result = $this->m_tenant->tenant_update($id,$tenant_first_name, $tenant_last_name, $national_passport, $phone_number, $tenant_status);
		

		$this->index();
		
	}

	function all_tenant_combo()
	{
		$tenants = $this->m_tenant->get_tenants();
		// echo "<pre>";print_r($tenants);die();
		$this->tenants_combo .= '<select name="table_search" id="table_search" onchange="get_tenant()" class="form-control input-sm pull-right" style="width: 150px;">';
		$this->tenants_combo .= '<option value="0" selected>**Select a tenant**</option>';
		foreach ($tenants as $key => $value) {
			$this->tenants_combo .= '<option value="'.$value['tenant_id'].'">'.$value['firstname'].' '.$value['lastname'].'</option>';
		}
		$this->tenants_combo .= '</select>';

		return $this->tenants_combo;
	}


    function all_vhouse_combo()
	{
		$houses = $this->m_tenant->get_all_vhouses();
		// echo "<pre>";print_r($houses);die();
		$this->houses_combo .= '<select name="table_search" id="table_search" onchange="get_house()" class="form-control input-sm pull-right" style="width: 350px;">';
		$this->houses_combo .= '<option value="0" selected>**Select a house**</option>';
		foreach ($houses as $key => $value) {
			$this->houses_combo .= '<option value="'.$value['house_id'].'">'.$value['house_no'].' -- '.$value['estate_name'].'</option>';
		}
		$this->houses_combo .= '</select>';

		return $this->houses_combo;
	}

	public function searchtenant()
	{
		$search_array = array();
		if($this->input->post())
		{
			foreach ($this->input->post() as $key => $value) {
				if($value)
				{
					
					$data[$key] = $value;
				}
				else
				{
					$data = array();
				}
			}

			$query = $this->db->get_where('tenant', $data);

			$result = $query->result_array();
			$search_array = $result;
		}

		return $search_array;
	}

	public function generate_search_table()
	{
		$tenant_list = '';
		$data = $this->searchtenant();
		$tenant_list .= '<thead><tr><th>#</th><th>Tenant Number</th><th>First Name</th><th>Last Name</th><th>National ID / Passport No</th><th>Phone Number</th><th>Status</th><th>Date Registered</td></tr></thead>';
		$tenant_list .= '<tbody>';
		if($data)
		{
			$counter = 0;
			foreach ($data as $key => $value) {
				$counter++;
				$tenant_list .= '<tr>';
				$tenant_list .= '<td>' . $counter. '</td>';
				$tenant_list .= '<td>' . $value['firstname'] . '</td>';
				$tenant_list .= '<td>' . $value['lastname'] . '</td>';
				$tenant_list .= '<td>' . $value['nationalid_passport'] . '</td>';
				$tenant_list .= '<td>' . $value['phone_number'] . '</td>';
				$tenant_list .= '<td>' . $value['status'] . '</td>';
				$tenant_list .= '<td>' . $value['date_registered'] . '</td>';
				$tenant_list .= '<td><a href = "'.base_url().'tenant/search/tenantmember/' . $value['tenant_id'] . '">View More</a></td>';
				$tenant_list .= '</tr>';
			}
		}
		$tenant_list .= '</tbody>';

		return $tenant_list;
	}

	public function tenantmember($tenant_id)
	{
		$tenant_details = $this->m_tenant->get_tenant_searched($tenant_id);
		if ($tenant_details) {
			# code...
		}
	}

	public function searchresult()
	{
		$data['content_page'] = 'tenant/tenants';
		$data['sidebar'] = 'hr_side_bar';
		$data['search_result'] = $this->generate_search_table();
		
		$this->template->call_template($data);
	}

}
?>