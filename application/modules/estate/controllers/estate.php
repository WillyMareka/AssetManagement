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
		$data['estatetypes'] = $this->getestatetypes();
		// echo "<pre>";print_r($data);die();
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

		$estateno = $this->input->post('estateno');
		$estatetype = $this->input->post('estatetype');
		$estateblock = $this->input->post('estateblock');
		$estateestate = $this->input->post('estateestate');
		$estaterent = $this->input->post('estaterent');
		$estatebedrooms = $this->input->post('estatebedrooms');
		$estatebathrooms = $this->input->post('estatebathrooms');
		$estatekitchen = $this->input->post('estatekitchen');
		$estatedescription = $this->input->post('estatedescription');
// print_r($_FILES);
		$insert = $this->estate_model->register_estate($estateno, $estatetype, $estateblock, $estateestate, $estaterent, $path, $estatebedrooms, $estatebathrooms, $estatekitchen, $estatedescription);

		return $insert;
		   // }
		
	}

	

	function getestatetypes()
	{
        $results = $this->estate_model->get_estate_types();
        
        //echo '<pre>';print_r($results);echo '</pre>';die;
            $houtyp ='<option selected="selected" value="">Select the estate Type</option>';
        foreach ($results as $value) {
            $houtyp .= '<option value="' . $value['type'] . '">' . $value['type'] . '</option>';  
        }
        return $houtyp;
	}



	function all_estates()
	{
		$active_job_groups = $this->estate_model->get_all_estates();
		// echo "<pre>";print_r($active_job_groups);die();
		$count = 0;
		$this->active_groups .= "<tbody>";
		
			foreach ($active_job_groups as $key => $value) {
				if ($value['estate_status'] == 1) {
					$span = '<span class="label label-success">Activated</span>';
				} else if ($value['estate_status'] == 0) {
					$span = '<span class="label label-danger">Deactivated</span>';
				}
				if ($value['is_assigned'] == 0) {
					$sign = '<span class="label label-warning">Vacant</span>';
				} else if ($value['is_assigned'] == 1) {
					$sign = '<span class="label label-danger">Occupied</span>';
				}
				$count++;
				$this->active_groups .= '<tr>';
				$this->active_groups .= '<td>'.$count.'</td>';
				$this->active_groups .= '<td>'.$value['estate_no'].'</td>';
				$this->active_groups .= '<td>'.$value['estate_type'].'</td>';
				$this->active_groups .= '<td>'.$value['block'].'</td>';
				$this->active_groups .= '<td>'.$value['estate_name'].'</td>';
				$this->active_groups .= '<td>'.$value['rent'].'</td>';
				$this->active_groups .= '<td>'.$value['bedrooms'].'</td>';
				$this->active_groups .= '<td>'.$value['bathrooms'].'</td>';
				$this->active_groups .= '<td>'.$value['kitchen'].'</td>';
				
                $this->active_groups .= '<td>'.$sign.'</td>';
				$this->active_groups .= '<td>'.$span.'</td>';
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
		$estate_estateno = $this->input->post('editestateno');
		$estate_estatetype = $this->input->post('editestatetype');
		$estate_block = $this->input->post('editestateblock');
		$estate_estate = $this->input->post('editestateestate');
		$estate_rent = $this->input->post('editestaterent');
		$estate_bedrooms = $this->input->post('editestatebedrooms');
		$estate_bathrooms = $this->input->post('editestatebathrooms');
		$estate_kitchen = $this->input->post('editestatekitchen');
		$estate_description = $this->input->post('editestatedescription');
		$estate_status = $this->input->post('editestatestatus');

		$result = $this->estate_model->estate_update($id,$estate_estateno,$estate_estatetype,$estate_block,$estate_estate,$estate_rent,$estate_bedrooms,$estate_bathrooms,$estate_kitchen,$estate_description,$estate_status);
		

		$this->index();
		
	}

	function all_estate_combo()
	{
		$estates = $this->estate_model->get_all_estates();
		// echo "<pre>";print_r($estates);die();
		$this->estates_combo .= '<select name="table_search_estate" id="table_search_estate" onchange="get_estate()" class="form-control input-sm js-example-placeholder-single pull-right" style="width: 350px;">';
		$this->estates_combo .= '<option value="0" selected>Select: estate no -- Estate Name</option>';
		foreach ($estates as $key => $value) {
			$this->estates_combo .= '<option value="'.$value['estate_id'].'">'.$value['estate_no'].' -- '.$value['estate_name'].'</option>';
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