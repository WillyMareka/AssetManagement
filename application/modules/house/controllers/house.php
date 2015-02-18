<?php
if(!defined("BASEPATH")) exit("No direct access to the script is allowed");

class House extends MY_Controller
{
	var $active_groups;
	var $houses_combo;
	function __construct()
	{
		parent:: __construct();
		$this->load->model('house_model');

		$this->load->library('upload');
        
        $this->pic_path = realpath(APPPATH . '../uploads/');
	}
	function index()
	{
		$data['content_page'] = 'house/houses';
		$data['sidebar'] = 'hr_side_bar';
		$data['houses_c'] = $this->all_house_combo();
		$data['all_houses'] = $this->all_houses();
		$data['housetypes'] = $this->gethousetypes();
		// echo "<pre>";print_r($data);die();
		$this->template->call_template($data);
	}

	function registration()
	{
		$path = base_url().'uploads/houses/';
		       $config['upload_path'] = 'uploads/houses';
		       $config['allowed_types'] = 'jpeg|jpg|png|gif';
		       $config['encrypt_name'] = TRUE;
		       $this->load->library('upload', $config);
		       $this->upload->initialize($config);

		      
			if ( ! $this->upload->do_upload('housepicture'))
		    {
			   $error = array('error' => $this->upload->display_errors());

			   print_r($error);die;
		    }
		     else
		     {
		       
                $data = array('upload_data' => $this->upload->data());
			     foreach ($data as $key => $value) {
				  //print_r($data);die;
				  $path = base_url().'uploads/houses/'.$value['file_name'];
				
                  }

		$houseno = $this->input->post('houseno');
		$housetype = $this->input->post('housetype');
		$houseblock = $this->input->post('houseblock');
		$houseestate = $this->input->post('houseestate');
		$houserent = $this->input->post('houserent');
		$housebedrooms = $this->input->post('housebedrooms');
		$housebathrooms = $this->input->post('housebathrooms');
		$housekitchen = $this->input->post('housekitchen');
		$housedescription = $this->input->post('housedescription');
// print_r($_FILES);
		$insert = $this->house_model->register_house($houseno, $housetype, $houseblock, $houseestate, $houserent, $path, $housebedrooms, $housebathrooms, $housekitchen, $housedescription);

		if ($insert) {
			echo "Insertion complete";
		} else {
			echo "Error occured";
		}
		    }


		$houseno = $this->input->post('houseno');
		$housetype = $this->input->post('housetype');
		$houseblock = $this->input->post('houseblock');
		$houseestate = $this->input->post('houseestate');
		$houserent = $this->input->post('houserent');
		$housebedrooms = $this->input->post('housebedrooms');
		$housebathrooms = $this->input->post('housebathrooms');
		$housekitchen = $this->input->post('housekitchen');
		$housedescription = $this->input->post('housedescription');

		$insert = $this->house_model->register_house($houseno, $housetype, $houseblock, $houseestate, $houserent, $housebedrooms, $housebathrooms, $housekitchen, $housedescription);

		if ($insert) {
			echo "Insertion complete";
		} else {
			echo "Error occured";
		}
		
	}

	function gethousetypes()
	{
        $results = $this->house_model->get_house_types();
        
        //echo '<pre>';print_r($results);echo '</pre>';die;
            $prodcat ='<option selected="selected" value="">Select the House Type</option>';
        foreach ($results as $value) {
            $prodcat .= '<option value="' . $value['housetype_id'] . '">' . $value['type'] . '</option>';  
        }
        return $prodcat;
	}



	function all_houses()
	{
		$active_job_groups = $this->house_model->get_houses();
		// echo "<pre>";print_r($active_job_groups);die();
		$count = 0;
		$this->active_groups .= "<tbody>";
		if ($active_job_groups == NULL) {
			$this->active_groups .= '<tr>';
			$this->active_groups .= '<td colspan="4"><center>No record found in the database...</center></td>';
			$this->active_groups .= '</tr>';
		} else {
			foreach ($active_job_groups as $key => $value) {
				if ($value['status'] == 1) {
					$span = '<span class="label label-success">Activated</span>';
				} else if ($value['status'] == 0) {
					$span = '<span class="label label-danger">Deactivated</span>';
				}
				$count++;
				$this->active_groups .= '<tr>';
				$this->active_groups .= '<td>'.$count.'</td>';
				$this->active_groups .= '<td>'.$value['house_no'].'</td>';
				$this->active_groups .= '<td>'.$value['housetype_id'].'</td>';
				$this->active_groups .= '<td>'.$value['block'].'</td>';
				$this->active_groups .= '<td>'.$value['estate_name'].'</td>';
				$this->active_groups .= '<td>'.$value['rent'].'</td>';
				$this->active_groups .= '<td>'.$value['bedrooms'].'</td>';
				$this->active_groups .= '<td>'.$value['bathrooms'].'</td>';
				$this->active_groups .= '<td>'.$value['kitchen'].'</td>';
				$this->active_groups .= '<td>'.$value['description'].'</td>';

				$this->active_groups .= '<td>'.$span.'</td>';
				$this->active_groups .= '<td>'.$value['date_registered'].'</td>';
				
				$this->active_groups .= '</tr>';
			}
		}
		
		$this->active_groups .= "</tbody>";

		return $this->active_groups;
	}

	function ajax_get_house($id)
	{
		$house = $this->house_model->search_house($id);
		// echo "<pre>";print_r($house[0]);die();
		$house = json_encode($house[0]);
		echo $house;
	}


	public function edithouse()
	{
		$id = $this->input->post('editid');
		$house_first_name = $this->input->post('edithousefname');
		$house_last_name = $this->input->post('edithouselname');
		$national_passport = $this->input->post('editnationalpass');
		$phone_number = $this->input->post('editphonenumber');
		$house_status = $this->input->post('editstatus');
		
		$sql = "UPDATE
					`house`
				SET
				    	`firstname` = '$house_first_name',
						`lastname` 	= '$house_last_name',
						`nationalid_passport` = '$national_passport',
						`phone_number` 	= '$phone_number',
						`status` 	= '$house_status'
					
				WHERE
					`house_id` = '$id'";
		$this->db->query($sql);

		$this->index();
		
	}

	function all_house_combo()
	{
		$houses = $this->house_model->get_houses();
		// echo "<pre>";print_r($houses);die();
		$this->houses_combo .= '<select name="table_search" id="table_search" onchange="get_house()" class="form-control input-sm pull-right" style="width: 150px;">';
		$this->houses_combo .= '<option value="0" selected>**Select a house**</option>';
		foreach ($houses as $key => $value) {
			$this->houses_combo .= '<option value="'.$value['house_id'].'">'.$value['house_id'].'</option>';
		}
		$this->houses_combo .= '</select>';

		return $this->houses_combo;
	}


	public function searchhouse()
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

			$query = $this->db->get_where('house', $data);

			$result = $query->result_array();
			$search_array = $result;
		}

		return $search_array;
	}

	public function generate_search_table()
	{
		$house_list = '';
		$data = $this->searchhouse();
		$house_list .= '<thead><tr><th>#</th><th>house Number</th><th>First Name</th><th>Last Name</th><th>National ID / Passport No</th><th>Phone Number</th><th>Status</th><th>Date Registered</td></tr></thead>';
		$house_list .= '<tbody>';
		if($data)
		{
			$counter = 0;
			foreach ($data as $key => $value) {
				$counter++;
				$house_list .= '<tr>';
				$house_list .= '<td>' . $counter. '</td>';
				$house_list .= '<td>' . $value['firstname'] . '</td>';
				$house_list .= '<td>' . $value['lastname'] . '</td>';
				$house_list .= '<td>' . $value['nationalid_passport'] . '</td>';
				$house_list .= '<td>' . $value['phone_number'] . '</td>';
				$house_list .= '<td>' . $value['status'] . '</td>';
				$house_list .= '<td>' . $value['date_registered'] . '</td>';
				$house_list .= '<td><a href = "'.base_url().'house/search/housemember/' . $value['house_id'] . '">View More</a></td>';
				$house_list .= '</tr>';
			}
		}
		else
		{
			$house_list .= '<tr><td colspan = "7"><center>No data found</center></td></tr>';
		}
		$house_list .= '</tbody>';

		return $house_list;
	}

	public function housemember($house_id)
	{
		$house_details = $this->house_model->get_house_searched($house_id);
		if ($house_details) {
			# code...
		}
	}

	public function searchresult()
	{
		$data['content_page'] = 'house/houses';
		$data['sidebar'] = 'hr_side_bar';
		$data['search_result'] = $this->generate_search_table();
		
		$this->template->call_template($data);
	}

}
?>