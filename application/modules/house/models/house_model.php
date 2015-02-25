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
						'house_description' => $housedescription
						);

		$insert = $this->db->insert('house', $house);
		return $insert;

	}

	function house_update($id,$house_houseno,$house_housetype,$house_block,$house_estate,$house_rent,$house_bedrooms,$house_bathrooms,$house_kitchen,$house_description,$house_status)
	{
		$house = array(
						'house_no' => $house_houseno,
						'house_type' 	=> $house_housetype,
						'block' 	=> $house_block,
						'estate_name' 	=> $house_estate,
						'rent' 	=> $house_rent,
						'bedrooms' => $house_bedrooms,
						'bathrooms' => $house_bathrooms,
						'kitchen' => $house_kitchen,
						'house_description' => $house_description,
						'house_status' => $house_status
						);

		$this->db->where('house_id', $id);
        $insert = $this->db->update('house', $house);
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
					`house`
				WHERE `is_assigned` = 0";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	function get_all_houses()
	{
		$sql = "SELECT 
					*
				FROM
					`house`";
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