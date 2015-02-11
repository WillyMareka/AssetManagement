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
	}

	function index()
	{
		
		$data['content_page'] = 'hr/dashboard';
		// echo "<pre>";print_r($data);die();
		$this->template->call_template($data);
	}
}

?>