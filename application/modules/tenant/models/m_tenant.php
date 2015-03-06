<?php


class M_tenant extends MY_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	function register_tenant($tenant_first_name, $tenant_last_name, $path, $national_passport, $phone_number, $tenant_status)
	{
		$tenant = array(
						'firstname' => $tenant_first_name,
						'lastname' 	=> $tenant_last_name,
						'picture' 	=> $path,
						'nationalid_passport' 	=> $national_passport,
						'phone_number' 	=> $phone_number,
						'tenant_status' 	=> $tenant_status
						);

		$insert = $this->db->insert('tenant', $tenant);
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

	function tenant_update($id,$tenant_first_name, $tenant_last_name, $national_passport, $phone_number, $tenant_status)
	{
		$tenant = array(
						'firstname' => $tenant_first_name,
						'lastname' 	=> $tenant_last_name,
						'nationalid_passport' 	=> $national_passport,
						'phone_number' 	=> $phone_number,
						'tenant_status' 	=> $tenant_status
						);

		$this->db->where('tenant_id', $id);
        $insert = $this->db->update('tenant', $tenant);
		return $insert;

	}

	function get_all_vhouses()
	{
		$sql = "SELECT 
					*
				FROM
					`house`
				WHERE 
				    `is_assigned` = 0";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	function get_tenants()
	{
		$sql = "SELECT 
					*
				FROM
					`tenant`";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	function get_active_tenants()
	{
		$sql = "SELECT 
					*
				FROM
					`tenant`
				WHERE 
					`status` = 1";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	function search_tenant($id)
	{
		$sql = "SELECT
					*
				FROM 
					`tenant`
				WHERE
					`tenant_id` = '$id'";
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