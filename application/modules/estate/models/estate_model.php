<?php


class Estate_model extends MY_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	function register_estate($estatename, $estatelocation)
	{
		$estate = array(
						'estate_name' 	=> $estatename,
						'estate_location' => $estatelocation
						);

		$insert = $this->db->insert('estates', $estate);
		return $insert;

	}

	function estate_update($id,$estate_name,$estate_location,$estate_status)
	{
		$estate = array(
						'estate_name' 	=> $estate_name,
						'estate_location' => $estate_location,
						'estate_status' => $estate_status
						);

		$this->db->where('estate_id', $id);
        $insert = $this->db->update('estates', $estate);
		return $insert;

	}
	
	function get_all_estates()
	{
		$sql = "SELECT 
					*
				FROM
					`estates`";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	function get_av_estates()
	{
		$sql = "SELECT 
					*
				FROM
					`estates`
				WHERE 
				   `estate_status` = 1";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	function search_estate($id)
	{
		$sql = "SELECT
					*
				FROM 
					`estates`
				WHERE
					`estate_id` = '$id'";
		$result = $this->db->query($sql);
		return $result->result_array();
	}
}

?>