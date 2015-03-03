<?php 
if (!defined("BASEPATH")) exit("No direct access to the script allowed");

/**
* 
*/
class template extends MY_Controller
{
	
	function __construct()
	{
		parent:: __construct();
	}

	function call_template($data = NULL)
	{
		// echo "You have gained access to the template controller";
		// echo "<pre>";print_r($data);die();
		$this->load->view('template_view', $data);
	}

	function call_login($data = NULL)
	{
		$this->load->view("login_view", $data);
	}
}
?>