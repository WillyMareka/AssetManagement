<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_login extends MY_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function authenticate($username,$password)
    {
    	$sql = "SELECT 
    				* 
    			FROM 
    				`users`
    			WHERE
    				`username` = '$username'
    			AND 
    				`password` = '$password'";

    	$res = $this->db->query($sql);
    	$res = $res->result_array();
    	
    	return $res;
    }


   
}