<?php


class Payment_model extends MY_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	function generateReceipt()
	{
        $query = "SELECT MAX(tp_id) FROM tenant_payment";
            try {
                $this->dataSet = $this->db->query($query);
                $this->dataSet = $this->dataSet->result_array();
            }
            catch(exception $ex) {
            }
            
            return $this->dataSet;
	}

	function enter_payment($payment_tid, $payment_method, $payment_transaction_no, $payment_year, $payment_month, $rent, $pay_rent, $maintenance, $pay_maintenance, $security, $pay_security)
	{
		$tenant_payment = array(
						'tenant_id' => $payment_tid,
						'method' 	=> $payment_method,
						'transaction_no' => $payment_transaction_no,
						'payment_year' 	=> $payment_year,
						'payment_month' => $payment_month,
						'rent' 	=> $rent,
						'rent_paid' 	=> $pay_rent,
						'security' 	=> $security,
						'security_paid' 	=> $pay_security,
						'maintenance' 	=> $maintenance,
						'maintenance_paid' 	=> $pay_maintenance
						);

		$insert = $this->db->insert('tenant_payment', $tenant_payment);
		return $insert;

	}

	public function get_payment_methods()
    {
      $query = "SELECT * FROM payment_method WHERE status = 1";
            try {
                $this->dataSet = $this->db->query($query);
                $this->dataSet = $this->dataSet->result_array();
            }
            catch(exception $ex) {
            }
            
            return $this->dataSet;
    }

    public function get_payment_for()
    {
      $query = "SELECT * FROM payment_parameter WHERE status = 1";
            try {
                $this->dataSet = $this->db->query($query);
                $this->dataSet = $this->dataSet->result_array();
            }
            catch(exception $ex) {
            }
            
            return $this->dataSet;
    }

	function get_payments()
	{
		$yearcriteria = $this->input->post('crityear');
		$monthcriteria = $this->input->post('critmonth');
		
		$criteria  = (($monthcriteria!='') || ($yearcriteria!='')) ? "WHERE tp_id != '0' " : null;
		$criteria .= ($monthcriteria!='') ? "AND payment_month = '$monthcriteria' " : null;
        $criteria .= ($yearcriteria!='') ? "AND payment_year = '$yearcriteria' " : null;

		
		$sql = "SELECT 
					tp_id as 'No',
					tenant_id as 'Tenant ID',
					method as 'Payment Method',
					transaction_no as 'Transaction No',
					payment_year as 'Year Paid for',
					payment_month as 'Month Paid for',
					rent_paid as 'Rent Paid',
					security_paid as 'Security Paid',
					maintenance_paid as 'Maintenance Paid',
					date_of_payment as 'Date Paid'
				FROM
					`tenant_payment`
				     $criteria
				;";
				
				    
        // echo "<pre>";print_r($yearcriteria);echo '</pre>';die();
		$result = $this->db->query($sql);
		return $result->result_array();
			
	}

	function get_active_payments()
	{
		$sql = "SELECT 
					*
				FROM
					`tenant_payment`
				WHERE 
					`status` = 1";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	function search_payment($id)
	{
		$sql = "SELECT
					*
				FROM 
					`tenant_payment`
				WHERE
					`payment_id` = '$id'";
		$result = $this->db->query($sql);
		return $result->result_array();
	}
}

?>