<?php


class House_model extends MY_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	function register_house($houseno, $housetype, $houseblock, $houseestate, $houserent, $path, $housebedrooms, $housebathrooms, $housekitchen, $housedescription)
	{
		$house = array(
						'house_no' => $houseno,
						'housetype_id' 	=> $housetype,
						'block' 	=> $houseblock,
						'estate_name' 	=> $houseestate,
						'rent' 	=> $houserent,
						'picture' => $path,
						'bedrooms' => $housebedrooms,
						'bathrooms' => $housebathrooms,
						'kitchen' => $housekitchen,
						'description' => $housedescription
						);

		$insert = $this->db->insert('house', $house);
		return $insert;

	}

	function assign_house($assignhouseid, $assignblock, $assigntenantid, $assignhouseno, $assignestate, $assignpnumber, $assignrent, $assignhousetype, $assignnapa)
	{
		$data = array();
		$data['is_assigned'] = 1;
		$this->db->where('house_id', $assignhouseid);
        $this->db->update('house', $data);


		$house_assign = array(
						'ha_houseid' => $assignhouseid,
						'ha_block' 	=> $assignblock,
						'ha_tenantid' 	=> $assigntenantid,
						'ha_houseno' 	=> $assignhouseno,
						'ha_estate' 	=> $assignestate,
						'ha_pnumber' => $assignpnumber,
						'ha_rent' => $assignrent,
						'ha_housetype' => $assignhousetype,
						'ha_national' => $assignnapa
						);

		$insert = $this->db->insert('house_assign', $house_assign);
		return $insert;

	}

	public function get_house_types()
    {
      $query = "SELECT * FROM house_type WHERE status = 1";
            try {
                $this->dataSet = $this->db->query($query);
                $this->dataSet = $this->dataSet->result_array();
            }
            catch(exception $ex) {
            }
            
            return $this->dataSet;
    }

	function get_houses()
	{
		$sql = "SELECT 
					*
				FROM
					`house`";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	function get_active_houses()
	{
		$sql = "SELECT 
					*
				FROM
					`house`
				WHERE 
					`status` = 1";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	function search_house($id)
	{
		$sql = "SELECT
					*
				FROM 
					`house`
				WHERE
					`house_id` = '$id'";
		$result = $this->db->query($sql);
		return $result->result_array();
	}
}

?>