<div>
	<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="<?php echo base_url();?>hr">Home</a></li>
				<li class="active">Payments</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Payments</h1>
			<!-- end page-header -->

			<!--begining of content page-->
			<div class="row">
                <!-- begin col-12 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">Payments</h4>
                        </div>
                        <div class="panel-body">
                            
								<div id="wizard">
									<ol>
										<li>
										    Payments
										</li>
										 <li>
										    View payments
										 </li>
										
									</ol>
									<!-- begin wizard step-1 -->
									<div>
                                        <fieldset>
                                            <legend class="pull-left width-full">Pay</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                            	<form id="paymentransaction" name="paymentransaction" enctype="multipart/form-data" method="POST" class="form-horizontal form-bordered" role="form">
	                                            	<div class="form-group">
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Tenant ID:</label>
																<input type="text" name="paymenttid" id="paymenttid" required placeholder="Search Tenant ID" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->

		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Payment Period:</label>
															  <div class="paymentperiod">
																Year: <input type="text"  name="paymentyear" id="paymentyear" placeholder="Enter the year paid for" class="form-control paymentyear" />
																Month: <?php echo $paymentmonth?><!-- Select for months -->
															  </div>
															</div>
		                                                </div>
		                                                <!-- end col-4 -->

		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Payment for:</label>
																<!-- <input type="text"  name="paymentfor" id="paymentfor" placeholder="Enter payment reason" class="form-control" /> -->
																<div class="checkbox paycheck">
																    <?php echo $paymentfor?>
															    </div>
															</div>
		                                                </div>
		                                                <!-- end col-4 -->

                                                       

		                                                
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Method of Payment:</label>
																	<?php echo $paymentmethods?>
															</div>
		                                                </div>
		                                                <!-- end col-4 -->


		                                                
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4 transaction_other">
															<div class="form-group">
																<label>Transaction No:</label>
																<input type="text"  name="paymenttrans" id="paymenttrans" placeholder="Enter the transaction number" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                               


		                                                <div class="col-md-4" style="float:right;">
															<div class="form-group">
																<button id="paymentbutton" type="submit" class="btn btn-success m-r-5 m-b-5">Complete Transaction</button>
																<button type="reset" class="btn btn-warning m-r-5 m-b-5">Cancel</button>
															</div>
		                                                </div>
	                                                </div>
                                                </form>
                                            </div>
                                            <!-- end row -->
										</fieldset>
									</div>
									<!-- end wizard step-1 -->
									<!-- begin wizard step-2 -->
									<div>
										<fieldset>
											<legend class="pull-left width-full">View all payments</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                                <div class="table-responsive">

                                                   <div class="table-toolbar">
                                     
                                      <div class="btn-group pull-right">
                                         <button data-toggle="dropdown" class="btn dropdown-toggle success">Tools <span class="caret"></span></button>
                                         <ul class="dropdown-menu">
                                            <li><a href="#">Save as PDF</a></li>
                                            <li class="download"><a href="<?php echo base_url(). 'payments/allpayments/report'?>">Export to Excel</a></li>
                                         </ul>
                                      </div>
                                   </div>

                                <table id="data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tenant ID</th>
                                            <th>Payment Method</th>
                                            <th>Transaction No</th>
                                            <th>Year Paid For</th>
                                            <th>Month Paid For</th>
                                            <th>Rent Paid</th>
                                            <th>Security Paid</th>
                                            <th>Maintenance Paid</th>
                                            <th>Date of Payment</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    	echo $all_payments;
                                    ?>
                                </table>
                            </div>
                                                
                                            </div>
                                            <!-- end row -->
										</fieldset>
									</div>
									<!-- end wizard step-2 -->
									
									
								</div>
							
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
			<!--end of content page-->
			
	</div>
</div>
<script>
		$(document).ready(function() {
			App.init();
			FormWizard.init();
			$('#table_search').change(function(){
       		sv = $(this).val();
       		// console.log('<?php echo base_url(); ?>payment/ajax_get_payment/'+sv);
       		$.get('<?php echo base_url(); ?>payments/ajax_get_payment/'+sv, function(data){
       			obj = jQuery.parseJSON(data);
       			// console.log(obj);
       			// alert(obj.firstname);
       			$('#edit_payment_form input#editpaymentid').val(obj.payment_id);
				$('#edit_payment_form input#editpaymentno').val(obj.payment_no);
				$('#edit_payment_form input#editpaymenttype').val(obj.payment_type);
				$('#edit_payment_form input#editpaymentblock').val(obj.payment_block);
				$('#edit_payment_form input#editpaymentestate').val(obj.payment_estate);
				$('#edit_payment_form input#editpaymentrent').val(obj.payment_rent);
				$('#edit_payment_form input#editpaymentbedrooms').val(obj.payment_bedrooms);
				$('#edit_payment_form input#editpaymentbathrooms').val(obj.payment_bathrooms);
				$('#edit_payment_form input#editpaymentkitchen').val(obj.payment_kitchen);
				$('#edit_payment_form input#editpaymentdescription').val(obj.payment_description);
				$('#edit_payment_form input#editpaymentstatus').val(obj.payment_status);
			});
       });
		});
</script>
<script>
	function get_payment()
	{
		var sel = document.getElementById('table_search');
       // var sv = sel.options[sel.selectedIndex].value;
         
       // console.log(sv);
	}
</script>