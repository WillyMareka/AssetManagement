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
		$this->load->view("template_view", $data);
	}
}
?>