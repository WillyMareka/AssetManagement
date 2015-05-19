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
		$data['all_payments'] = $this->allpayments('table');
		$data['paymentmethods'] = $this->getpaymentmethods();
		$data['paymentfor'] = $this->getpaymentfor();
		$data['paymentmonth'] = $this->getpaymentmonths();
		// echo "<pre>";print_r($data);die();
		$this->template->call_template($data);
	}

	function allpayments($type)
	{
      
		$active_payment_payments = $this->payment_model->get_payments();

		// echo "<pre>";print_r($yearcriteria);echo '</pre>';die();

		$column_data = $row_data = array();
		   // echo "<pre>";print_r($active_payment_payments);echo '</pre>';die();
        $counter = 0;
		$payments .= "<tbody>";
		$html_body = '
		<table class="data-table">
		<thead>
		<tr>
			<th><b>No</b></th>
			<th><b>Tenant ID</b></th>
			<th><b>Payment Method</b></th>
			<th><b>Transaction No</b></th>
			<th><b>Year Paid For</b></th>
			<th><b>Month Paid For</b></th>
			<th><b>Rent Paid</b></th>
			<th><b>Security Paid</b></th>
			<th><b>Maintenance Paid</b></th>
			<th><b>Current Total</b></th>
			<th><b>Date Paid</b></th>
		</tr> 
		</thead>
		<tbody>
		<ol type="a">';
		
		if(isset($active_payment_payments)){

			foreach ($active_payment_payments as $key => $data) {
				$counter++;
				if ($data['Month Paid for'] == 1) {
					$month = 'January';
				} else if ($data['Month Paid for'] == 2) {
					$month = 'February';
				} else if ($data['Month Paid for'] == 3) {
					$month = 'March';
				} else if ($data['Month Paid for'] == 4) {
					$month = 'April';
				} else if ($data['Month Paid for'] == 5) {
					$month = 'May';
				} else if ($data['Month Paid for'] == 6) {
					$month = 'June';
				} else if ($data['Month Paid for'] == 7) {
					$month = 'July';
				} else if ($data['Month Paid for'] == 8) {
					$month = 'August';
				} else if ($data['Month Paid for'] == 9) {
					$month = 'Semptember';
				} else if ($data['Month Paid for'] == 10) {
					$month = 'October';
				} else if ($data['Month Paid for'] == 11) {
					$month = 'November';
				} else if ($data['Month Paid for'] == 12) {
					$month = 'December';
				}else {
					$month = 'No month selected';
				}

			

	switch ($type) {
		case 'table':
				
				$payments .= '<tr>';
				$payments .= '<td>'.$counter.'</td>';
				$payments .= '<td>'.$data['Tenant ID'].'</td>';
				$payments .= '<td>'.$data['Payment Method'].'</td>';
				$payments .= '<td>'.$data['Transaction No'].'</td>';
				$payments .= '<td>'.$data['Year Paid for'].'</td>';
				$payments .= '<td>'.$month.'</td>';
				$payments .= '<td>'.$data['Rent Paid'].'</td>';
				$payments .= '<td>'.$data['Security Paid'].'</td>';
				$payments .= '<td>'.$data['Maintenance Paid'].'</td>';
				$payments .= '<td>'.$data['Date Paid'].'</td>';
				
				$payments .= '</tr>';
	    break;

	    case 'excel':
				
		   array_push($row_data, array($data['No'], $data['Tenant ID'], $data['Payment Method'], $data['Transaction No'], $data['Year Paid for'], $month, 
				   $data['Rent Paid'], $data['Security Paid'], $data['Maintenance Paid'], $data['Date Paid']));

		
	     break;

	     case 'pdf':
            
			$total = $data['Rent Paid']+$data['Security Paid']+$data['Maintenance Paid'];
			//echo'<pre>';print_r($active_payment_payments);echo'</pre>';die();
           
				$html_body .= '<tr>';
				$html_body .= '<td>'.$counter.'</td>';
				$html_body .= '<td>'.$data['Tenant ID'].'</td>';
				$html_body .= '<td>'.$data['Payment Method'].'</td>';
				$html_body .= '<td>'.$data['Transaction No'].'</td>';
				$html_body .= '<td>'.$data['Year Paid for'].'</td>';
				$html_body .= '<td>'.$month.'</td>';
				$html_body .= '<td>'.$data['Rent Paid'].'</td>';
				$html_body .= '<td>'.$data['Security Paid'].'</td>';
				$html_body .= '<td>'.$data['Maintenance Paid'].'</td>';
				$html_body .= '<td>'.$total.'</td>';
				$html_body .= '<td>'.$data['Date Paid'].'</td>';
				$html_body .= "</tr></ol>";
                $sum_total += $total;

	     break;

			   }
			}
		}
		

		if($type == 'excel'){
            $excel_data = array();
		    $excel_data = array('doc_creator' => 'Asset Management ', 'doc_title' => 'Payments Excel Report ', 'file_name' => 'Payments Report', 'excel_topic' => 'Payment');
		    $column_data = array('No','Tenant ID','Payment Method','Transaction No','Year Paid For','Month Paid For','Rent Paid','Security Paid','Maintenance Paid','Date Paid');
		    $excel_data['column_data'] = $column_data;
		    $excel_data['row_data'] = $row_data;

		//echo'<pre>';print_r($excel_data);echo'</pre>';die();

		    $this->export->create_excel($excel_data);

		}elseif($type == 'pdf'){
			$html_body .= '<tr><td colspan="3"> Sum Total: </td><td colspan="7">Kshs '.$sum_total.'/=<td></tr>';
			
			$html_body .= '</tbody></table>';
            $pdf_data = array("pdf_title" => "Payments PDF Report", 'pdf_html_body' => $html_body, 'pdf_view_option' => 'download', 'file_name' => 'Payments Report', 'pdf_topic' => 'Payments');

        //echo'<pre>';print_r($pdf_data);echo'</pre>';die();

		    $this->export->create_pdf($pdf_data);
		}else{
			  $payments .= "</tbody>";

      //echo'<pre>';print_r($payments);echo'</pre>';die();

			return $payments;
		}

		
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