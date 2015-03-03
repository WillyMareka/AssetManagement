<?php 
if (!defined("BASEPATH")) exit("No direct access to the script allowed");

/**
* 
*/
class hr extends MY_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('hr_model');
		$this->load->module('dashboard');
	}

	function index()
	{
		$this->dashboard->hr_dashboard();
		// $data['content_page'] = 'dashboard/hr_dashboard';
		// $data['sidebar'] = 'hr_side_bar';
		// // echo "<pre>";print_r($data);die();
		// $this->template->call_template($data);
	}
}

?>