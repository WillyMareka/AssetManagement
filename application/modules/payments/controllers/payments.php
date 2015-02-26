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
				$this->active_payments .= '<td>'.$value['rent_paid'].'</td>';
				$this->active_payments .= '<td>'.$value['security_paid'].'</td>';
				$this->active_payments .= '<td>'.$value['maintenance_paid'].'</td>';
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

		$rent = $this->input->post('paymentfor_1');
		$pay_rent = $this->input->post('payment_1');
		$maintenance = $this->input->post('paymentfor_2');
		$pay_maintenance = $this->input->post('payment_2');
		$security = $this->input->post('paymentfor_3');
		$pay_security = $this->input->post('payment_3');
		

		$insert = $this->payment_model->enter_payment($payment_tid, $payment_method, $payment_transaction_no, $rent, $pay_rent, $maintenance, $pay_maintenance, $security, $pay_security);

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
             $payfor .= '';  

        foreach ($results as $value) {
        	$count++;

        	$payfor .= '<div class="row">
        	              <div class="col-lg-6">
                          <div class="input-group payments">';
              
            $payfor .= '<span class="input-group-addon pay-group">';  
            $payfor .= '<input name="paymentfor_'.$count.'" id="paymentfor_'.$count.'" class="paybox" type="checkbox" aria-label="..." value="1">' . $value['name'] . ' ';  
            $payfor .= '</span>'; 
            $payfor .= '<input name="payment_'.$count.'" placeholder="0" id="payment_'.$count.'" type="text" disabled class="form-control payfield" aria-label="Lebel">';
            
            $payfor .= '  </div></div>
                        </div>'; 
        }
             
            
            
        return $payfor;
	}

                                                              
                                                                
                                                              
                                                              
	

}
?>