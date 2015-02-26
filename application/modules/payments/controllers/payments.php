<?php
if(!defined("BASEPATH")) exit("No direct access to the script is allowed");

class Payments extends MY_Controller
{
	var $active_payments;
	var $payments_combo;
	function __construct()
	{
		parent:: __construct();
		$this->load->model('payment_model');

		$this->load->library('upload');
        
        $this->pic_path = realpath(APPPATH . '../uploads/');
	}

	function index()
	{
		$data['content_page'] = 'payments/payment';
		$data['sidebar'] = 'hr_side_bar';
		$data['all_payments'] = $this->all_payments();
		$data['paymentmethods'] = $this->getpaymentmethods();
		$data['paymentfor'] = $this->getpaymentfor();
		// echo "<pre>";print_r($data);die();
		$this->template->call_template($data);
	}

	function all_payments()
	{
		$active_payment_payments = $this->payment_model->get_payments();
		// echo "<pre>";print_r($active_job_groups);die();
		$count = 0;
		$this->active_payments .= "<tbody>";
		if(isset($active_payment_payments)){
			foreach ($active_payment_payments as $key => $value) {
				
				$count++;
				$this->active_payments .= '<tr>';
				$this->active_payments .= '<td>'.$count.'</td>';
				$this->active_payments .= '<td>'.$value['tenant_id'].'</td>';
				$this->active_payments .= '<td>'.$value['method'].'</td>';
				$this->active_payments .= '<td>'.$value['transaction_no'].'</td>';
				$this->active_payments .= '<td>'.$value['payment_for'].'</td>';
				$this->active_payments .= '<td>'.$value['amount_paid'].'</td>';
				$this->active_payments .= '<td>'.$value['date_of_payment'].'</td>';
				
				$this->active_payments .= '</tr>';
			}
		}
		
		$this->active_payments .= "</tbody>";

		return $this->active_payments;
	}

	function paymenttransaction()
	{
		if($this->input->post('paymentfor')) {
	        $payment_for = implode(",", $this->input->post('paymentfor'));	
        }
		$payment_tid = $this->input->post('paymenttid');
		$payment_method = $this->input->post('paymentlmethod');
		$payment_transaction_no = $this->input->post('paymenttrans');
		$payment_amount = $this->input->post('paymentamount');

		$insert = $this->payment_model->enter_payment($payment_tid, $payment_method, $payment_transaction_no, $payment_for, $payment_amount);

		if ($insert) {
			echo "Insertion complete";
		} else {
			echo "Error occured";
		}
		
	}

	function getpaymentmethods()
	{
        $results = $this->payment_model->get_payment_methods();
        
        //echo '<pre>';print_r($results);echo '</pre>';die;
            $paymeth ='<option selected="selected" value="">Select the Payment Method</option>';
        foreach ($results as $value) {
            $paymeth .= '<option value="' . $value['method_name'] . '" >' . $value['method_name'] . '</option>';  
        }

        return $paymeth;
	}

	function getpaymentfor()
	{
        $results = $this->payment_model->get_payment_for();
        
        //echo '<pre>';print_r($results);echo '</pre>';die;
            $count = 0;
             $payfor='';
        foreach ($results as $value) {
        	$count++;
            $payfor .= '<label class="checkbox-inline">';  
            $payfor .= '<input name="paymentfor[]" id="paymentfor_'.$count.'" type="checkbox" id="inlineCheckbox'.$count.'" value="' . $value['name'] . '">' . $value['name'] . ' ';  
            $payfor .= '</label>';  
        }
            
        return $payfor;
	}

  
	

}
?>