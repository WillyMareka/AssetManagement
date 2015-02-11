<?php
if (!defined("BASEPATH")) exit("No direct access to the script is allowed");

/**
* 
*/
class MY_Controller extends MX_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->module("template");
	}
}
?>