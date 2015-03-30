<?php


class Estate_model extends MY_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	function register_estate($estateno, $estatetype, $estateblock, $estateestate, $estaterent, $path, $estatebedrooms, $estatebathrooms, $estatekitchen, $estatedescription)
	{
		$estate = array(
						'estate_no' => $estateno,
						'estate_type' 	=> $estatetype,
						'block' 	=> $estateblock,
						'estate_name' 	=> $estateestate,
						'rent' 	=> $estaterent,
						'picture' => $path,
						'bedrooms' => $estatebedrooms,
						'bathrooms' => $estatebathrooms,
						'kitchen' => $estatekitchen,
						'estate_description' => $estatedescription
						);

		$insert = $this->db->insert('estate', $estate);
		return $insert;

	}

	function estate_update($id,$estate_estateno,$estate_estatetype,$estate_block,$estate_estate,$estate_rent,$estate_bedrooms,$estate_bathrooms,$estate_kitchen,$estate_description,$estate_status)
	{
		$estate = array(
						'estate_no' => $estate_estateno,
						'estate_type' 	=> $estate_estatetype,
						'block' 	=> $estate_block,
						'estate_name' 	=> $estate_estate,
						'rent' 	=> $estate_rent,
						'bedrooms' => $estate_bedrooms,
						'bathrooms' => $estate_bathrooms,
						'kitchen' => $estate_kitchen,
						'estate_description' => $estate_description,
						'estate_status' => $estate_status
						);

		$this->db->where('estate_id', $id);
        $insert = $this->db->update('estate', $estate);
		return $insert;

	}

	

	public function get_estate_types()
    {
      $query = "SELECT * FROM estate_type WHERE status = 1";
            try {
                $this->dataSet = $this->db->query($query);
                $this->dataSet = $this->dataSet->result_array();
            }
            catch(exception $ex) {
            }
            
            return $this->dataSet;
    }

	
	function get_all_estates()
	{
		$sql = "SELECT 
					*
				FROM
					`estate`";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	function search_estate($id)
	{
		$sql = "SELECT
					*
				FROM 
					`estate`
				WHERE
					`estate_id` = '$id'";
		$result = $this->db->query($sql);
		return $result->result_array();
	}
}

?>