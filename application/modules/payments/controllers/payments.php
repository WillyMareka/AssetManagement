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
        $this->load->module('export/export');
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
		$data['paymentmonth'] = $this->getpaymentmonths();
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
				if ($value['payment_month'] == 1) {
					$month = 'January';
				} else if ($value['payment_month'] == 2) {
					$month = 'February';
				} else if ($value['payment_month'] == 3) {
					$month = 'March';
				} else if ($value['payment_month'] == 4) {
					$month = 'April';
				} else if ($value['payment_month'] == 5) {
					$month = 'May';
				} else if ($value['payment_month'] == 6) {
					$month = 'June';
				} else if ($value['payment_month'] == 7) {
					$month = 'July';
				} else if ($value['payment_month'] == 8) {
					$month = 'August';
				} else if ($value['payment_month'] == 9) {
					$month = 'Semptember';
				} else if ($value['payment_month'] == 10) {
					$month = 'October';
				} else if ($value['payment_month'] == 11) {
					$month = 'November';
				} else if ($value['payment_month'] == 12) {
					$month = 'December';
				}
				
				$this->active_payments .= '<tr>';
				$this->active_payments .= '<td>'.$count.'</td>';
				$this->active_payments .= '<td>'.$value['tenant_id'].'</td>';
				$this->active_payments .= '<td>'.$value['method'].'</td>';
				$this->active_payments .= '<td>'.$value['transaction_no'].'</td>';
				$this->active_payments .= '<td>'.$value['payment_year'].'</td>';
				$this->active_payments .= '<td>'.$month.'</td>';
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

	function generatepaymentsreport(){
		$active_payment_payments = $this->payment_model->get_payments();

		
		$row_data = array();
		$this->active_payments = "";


		
			foreach ($active_payment_payments as $key => $value) {
		 //echo "<pre>";print_r($key);die();
				
				if ($value['payment_month'] == 1) {
					$month = 'January';
				} else if ($value['payment_month'] == 2) {
					$month = 'February';
				} else if ($value['payment_month'] == 3) {
					$month = 'March';
				} else if ($value['payment_month'] == 4) {
					$month = 'April';
				} else if ($value['payment_month'] == 5) {
					$month = 'May';
				} else if ($value['payment_month'] == 6) {
					$month = 'June';
				} else if ($value['payment_month'] == 7) {
					$month = 'July';
				} else if ($value['payment_month'] == 8) {
					$month = 'August';
				} else if ($value['payment_month'] == 9) {
					$month = 'Semptember';
				} else if ($value['payment_month'] == 10) {
					$month = 'October';
				} else if ($value['payment_month'] == 11) {
					$month = 'November';
				} else if ($value['payment_month'] == 12) {
					$month = 'December';
				}
				
			array_push($row_data, array($value['tp_id'], $value['tenant_id'], $value['method'], $value['transaction_no'], $value['payment_year'], $month, 
				                    $value['rent_paid'], $value['security_paid'], $value['maintenance_paid'], $value['date_of_payment']));
				
		
				
			
		}

		//echo "<pre>";print_r($key);die();



		$excel_data = array();
		$excel_data = array('doc_creator' => 'Asset Management ', 'doc_title' => 'Payments Report ', 'file_name' => 'Payments Report');
	    //$column_data = array("First Name", "Last Name", "date last seen", "# of days", "date last issued", "# of days", "Sub County", "facility name", "mfl");
		$column_data = array("No.", "Tenant ID", "Payment Method", "Transaction No", "Year Paid For", "Month Paid For", "Rent Paid", "Security Paid", "Maintenance Paid", "Date of Payment");

		$excel_data['column_data'] = $column_data;
		$excel_data['row_data'] = $row_data;

		//echo'<pre>';print_r($excel_data);echo'</pre>';die();

		$this->export->create_excel($excel_data);
	}

	function getReceiptNumber(){
		$result = $this->payment_model->generateReceipt();
          foreach ($result as $key => $value) {
          	foreach ($value as $key2 => $val) {
          		//echo '<pre>'; print_r($val); echo '</pre>'; die();
          	}
          	
          }

          return $val;
		
	}

	function paymenttransaction()
	{
		if($this->input->post('paymentfor')) {
	        $payment_for = implode(",", $this->input->post('paymentfor'));	
        }


		$payment_tid = $this->input->post('paymenttid');
		$payment_method = $this->input->post('paymentmethod');

		if($payment_method == "Cash"){
			$receipt = $this->getReceiptNumber();
            //echo '<pre>'; print_r($receipt); echo '</pre>'; die();
            $payment_transaction_no = 'AS';
            $payment_transaction_no .= mt_rand(10,90);
            $payment_transaction_no .= $receipt;
            $payment_transaction_no .= mt_rand(10,90);
            $payment_transaction_no .= 'MGT';
		}else{
		    $payment_transaction_no = $this->input->post('paymenttrans');
	    }
		    //echo '<pre>'; print_r($payment_method); echo '</pre>'; die();
        $payment_year = $this->input->post('paymentyear');
		$payment_month = $this->input->post('paymentmonth');
		$rent = $this->input->post('paymentfor_1');
		$pay_rent = $this->input->post('payment_1');
		$maintenance = $this->input->post('paymentfor_2');
		$pay_maintenance = $this->input->post('payment_2');
		$security = $this->input->post('paymentfor_3');
		$pay_security = $this->input->post('payment_3');

		
		

		$insert = $this->payment_model->enter_payment($payment_tid, $payment_method, $payment_transaction_no, $payment_year, $payment_month, $rent, $pay_rent, $maintenance, $pay_maintenance, $security, $pay_security);

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
            $paymeth ='<select class="form-control selectpicker js-example-placeholder-single paymeth" required name="paymentmethod" id="paymentmethod"  data-live-search="true">';
            $paymeth .='<option selected="selected" value="">Select the Payment Method</option>';
        foreach ($results as $value) {
            $paymeth .= '<option value="' . $value['method_name'] . '" >' . $value['method_name'] . '</option>';  
        }
            $paymeth .= '</select>';
        return $paymeth;
	}

	function getpaymentmonths()
	{
   
            $paymeth ='<select class="form-control js-example-placeholder-single paymonth" required name="paymentmonth" id="paymentlmonth"  data-live-search="true">';
            $paymeth .='<option selected="selected" value="">Select the Month of Payment</option>';
      
            $paymeth .= '<option value="1" >January</option>';
            $paymeth .= '<option value="2" >February</option>';
            $paymeth .= '<option value="3" >March</option>';
            $paymeth .= '<option value="4" >April</option>';
            $paymeth .= '<option value="5" >May</option>';
            $paymeth .= '<option value="6" >June</option>';
            $paymeth .= '<option value="7" >July</option>';
            $paymeth .= '<option value="8" >August</option>';
            $paymeth .= '<option value="9" >September</option>';
            $paymeth .= '<option value="10" >October</option>';
            $paymeth .= '<option value="11" >November</option>';
            $paymeth .= '<option value="12" >December</option>';  
        
            $paymeth .= '</select>';
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