<?php 
if (!defined("BASEPATH")) exit("No direct access to the script allowed");

/**
* 
*/
class HR extends MY_Controller
{
	
	function __construct()
	{
		parent:: __construct();
	}

	function index()
	{
		$data['content_page'] = 'HR/dashboard';
		$this->template->call_template($data);
	}
}

?>