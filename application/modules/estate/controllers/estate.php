<?php
if(!defined("BASEPATH")) exit("No direct access to the script is allowed");

class Estate extends MY_Controller
{
	var $active_groups;
	var $estates_combo;
	function __construct()
	{
		parent:: __construct();
		$this->load->model('estate_model');

		$this->load->library('upload');
        
        $this->pic_path = realpath(APPPATH . '../uploads/');
	}
	function index()
	{
		$data['content_page'] = 'estate/estates';
		$data['sidebar'] = 'hr_side_bar';
		$data['estates_c'] = $this->all_estate_combo();
		$data['all_estates'] = $this->all_estates();
		
		$this->template->call_template($data);
	}


	function estateregistration()
	{
		// $path = base_url().'uploads/estates/';
		//        $config['upload_path'] = 'uploads/estates';
		//        $config['allowed_types'] = 'jpeg|jpg|png|gif';
		//        $config['encrypt_name'] = TRUE;
		//        $this->load->library('upload', $config);
		//        $this->upload->initialize($config);

		      
		// 	if ( ! $this->upload->do_upload('estatepicture'))
		//     {
		// 	   $error = array('error' => $this->upload->display_errors());

		// 	   print_r($error);die;
		//     }
		//      else
		//      {
		       
  //               $data = array('upload_data' => $this->upload->data());
		// 	     foreach ($data as $key => $value) {
		// 		  //print_r($data);die;
		// 		  $path = base_url().'uploads/estates/'.$value['file_name'];
				
  //                 }

		
		$estatename = $this->input->post('estatename');
		
		$estatelocation = $this->input->post('estatelocation');

		$insert = $this->estate_model->register_estate($estatename, $estatelocation);

		return $insert;
		   // }
		
	}

	function all_estates()
	{
		$active_job_groups = $this->estate_model->get_all_estates();
		// echo "<pre>";print_r($active_job_groups);die();
		$count = 0;
		$this->active_groups .= "<tbody>";
		
			foreach ($active_job_groups as $key => $value) {
				if ($value['estate_status'] == 1) {
					$state = '<span class="label label-success">Activated</span>';
				} else if ($value['estate_status'] == 0) {
					$state = '<span class="label label-danger">Deactivated</span>';
				}
				
				$count++;
				$this->active_groups .= '<tr>';
				$this->active_groups .= '<td>'.$count.'</td>';
				$this->active_groups .= '<td>'.$value['estate_name'].'</td>';
				$this->active_groups .= '<td>'.$value['estate_location'].'</td>';
				$this->active_groups .= '<td>'.$state.'</td>';
				$this->active_groups .= '<td>'.$value['date_registered'].'</td>';
				
				$this->active_groups .= '</tr>';
			}
		
		
		$this->active_groups .= "</tbody>";

		return $this->active_groups;
	}

	function ajax_get_estate($id)
	{
		$estate = $this->estate_model->search_estate($id);
		 //echo "<pre>";print_r($estate[0]);die();
		$estate = json_encode($estate[0]);
		echo $estate;
	}


	public function editestate()
	{
		$id = $this->input->post('editestateid');
		$estate_name = $this->input->post('editestatename');
		$estate_location = $this->input->post('editestatelocation');
		$estate_status = $this->input->post('editestatestatus');

		$result = $this->estate_model->estate_update($id,$estate_name,$estate_location,$estate_status);
		

		$this->index();
		
	}

	function all_estate_combo()
	{
		$estates = $this->estate_model->get_av_estates();
		// echo "<pre>";print_r($estates);die();
		$this->estates_combo .= '<select name="table_search_estate" id="table_search_estate" onchange="get_estate()" class="form-control input-sm js-example-placeholder-single pull-right" style="width: 350px;">';
		$this->estates_combo .= '<option value="0" selected>Select: Estate Name</option>';
		foreach ($estates as $key => $value) {
			$this->estates_combo .= '<option value="'.$value['estate_id'].'">'.$value['estate_name'].'</option>';
		}
		$this->estates_combo .= '</select>';

		return $this->estates_combo;
	}


	public function searchestate()
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

			$query = $this->db->get_where('estate', $data);

			$result = $query->result_array();
			$search_array = $result;
		}

		return $search_array;
	}

	public function generate_search_table()
	{
		$estate_list = '';
		$data = $this->searchestate();
		$estate_list .= '<thead><tr><th>#</th><th>estate Number</th><th>First Name</th><th>Last Name</th><th>National ID / Passport No</th><th>Phone Number</th><th>Status</th><th>Date Registered</td></tr></thead>';
		$estate_list .= '<tbody>';
		if($data)
		{
			$counter = 0;
			foreach ($data as $key => $value) {
				$counter++;
				$estate_list .= '<tr>';
				$estate_list .= '<td>' . $counter. '</td>';
				$estate_list .= '<td>' . $value['firstname'] . '</td>';
				$estate_list .= '<td>' . $value['lastname'] . '</td>';
				$estate_list .= '<td>' . $value['nationalid_passport'] . '</td>';
				$estate_list .= '<td>' . $value['phone_number'] . '</td>';
				$estate_list .= '<td>' . $value['status'] . '</td>';
				$estate_list .= '<td>' . $value['date_registered'] . '</td>';
				$estate_list .= '<td><a href = "'.base_url().'estate/search/estatemember/' . $value['estate_id'] . '">View More</a></td>';
				$estate_list .= '</tr>';
			}
		}
		else
		{
			$estate_list .= '<tr><td colspan = "7"><center>No data found</center></td></tr>';
		}
		$estate_list .= '</tbody>';

		return $estate_list;
	}

	public function estatemember($estate_id)
	{
		$estate_details = $this->estate_model->get_estate_searched($estate_id);
		if ($estate_details) {
			# code...
		}
	}

	public function searchresult()
	{
		$data['content_page'] = 'estate/estates';
		$data['sidebar'] = 'hr_side_bar';
		$data['search_result'] = $this->generate_search_table();
		
		$this->template->call_template($data);
	}

}
?>