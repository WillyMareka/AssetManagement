<div>
	<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li class="active">Tenants</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Tenants</h1>
			<!-- end page-header -->

			<!--begining of content page-->
			<div class="row">
                <!-- begin col-12 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">Tenants</h4>
                        </div>
                        <div class="panel-body">
                            
								<div id="wizard">
									<ol>
										<li>
										    Register Tenant
										</li>
										<li>
										    Assign House
										 </li>
										<li>
										    Edit Tenant
										 </li>
										 <li>
										    View Tenants
										 </li>
										
									</ol>
									<!-- begin wizard step-1 -->
									<div>
                                        <fieldset>
                                            <legend class="pull-left width-full">Registration</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                            	<form action="<?php echo base_url() .'tenant/registration';?>" method="POST" class="form-horizontal form-bordered">
	                                            	<div class="form-group">
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>First Name:</label>
																<input type="text" name="tenantfname" id="tenantfname" placeholder="Enter Tenant First Name" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Last Name:</label>
																<input type="text" name="tenantlname" id="tenantlname" placeholder="Enter Tenant Last Name" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>National ID / Passport No:</label>
																<input type="text"  name="nationalpass" id="nationalpass" placeholder="Enter National ID or Passport Number" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Phone Number:</label>
																<input type="text"  name="phonenumber" id="phonenumber" placeholder="Enter Mobile Phone Number" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Status:</label>
																<select class="form-control selectpicker" name="status" id="status" data-size="2" data-live-search="true">
						                                            <option value="" selected>Select a status</option>
						                                            <option value="1">Actived</option>
						                                            <option value="0">Deactivated</option>
						                                        </select>
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <div class="col-md-2" style="float:right;">
															<div class="form-group">
																<button type="submit" class="btn btn-success m-r-5 m-b-5">Register</button>
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
											<legend class="pull-left width-full">Assign House</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                            	<div class="form-group">
                                            		
                                                        <!-- <select name="table_search" id="table_search" onchange="get_house()" class="form-control input-sm pull-right" style="width: 150px;">
                                                        	<option value="" selected="true" disabled="on">**Select a house**</option>
                                                        	<option value="1">Option 2</option>
                                                        	<option value="2">Option 2</option>
                                                        </select> -->
                                                          <!--  <div class="input-group-btn">
                                                              <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                                           </div> -->
                                                    </div>
                                            </div>
                                            <div class="row">
                                            	<form action="<?php echo base_url() .'tenant/assignhouse';?>" method="POST" class="form-horizontal form-bordered" id="edit_house_form" >
                                            		
	                                            	<div class="form-group">
		                                               
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>House ID:</label>
																<input type="text" name="assignhouseid" id="assignhouseid" placeholder="Enter the tenant's house ID" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                 <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Block Name:</label>
																<input type="text"  name="assignblock" id="assignblock" placeholder="Enter the block name" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Tenant ID:</label>
																<input type="text"  name="assigntenantid" id="assigntenantid" placeholder="Enter the tenant ID" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->

		                                                
		                                               
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>House No:</label>
																<input type="text"  name="assignhouseno" id="assignhouseno" placeholder="Enter the tenant's house no" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Estate Name:</label>
																<input type="text"  name="assignestate" id="assignestate" placeholder="Enter the estate name" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Phone Number:</label>
																<input type="text"  name="assignpnumber" id="assignpnumber" placeholder="Enter the tenant's phone number" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Rent:</label>
																<input type="text"  name="assignrent" id="assignrent" placeholder="Enter the house rent" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>House Type:</label>
																<input type="text"  name="assignhousetype" id="assignhousetype" placeholder="Enter the house type" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                 <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>National ID / Passport:</label>
																<input type="text"  name="assignnapa" id="assignnapa" placeholder="Enter the tenant's National ID/Passport no" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                
		                                                 


                                                        

		                                                <div class="col-md-2" style="float:right;">
															<div class="form-group">
																<button type="submit" class="btn btn-success m-r-5 m-b-5">Assign house</button>
															</div>
		                                                </div>
	                                                </div>
                                                </form>
                                            </div>
                                            <!-- end row -->
										</fieldset>
									</div>
									<!-- end wizard step-2 -->
									<!-- begin wizard step-3 -->
									<div>
										<fieldset>
											<legend class="pull-left width-full">Edit Tenant</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                            	<div class="form-group">
                                            		<?php
                                            			echo $tenants_c;
                                            		?>
                                                        <!-- <select name="table_search" id="table_search" onchange="get_tenant()" class="form-control input-sm pull-right" style="width: 150px;">
                                                        	<option value="" selected="true" disabled="on">**Select a Tenant**</option>
                                                        	<option value="1">Option 2</option>
                                                        	<option value="2">Option 2</option>
                                                        </select> -->
                                                          <!--  <div class="input-group-btn">
                                                              <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                                           </div> -->
                                                    </div>
                                            </div>
                                            <div class="row">
                                            	<form action="<?php echo base_url() .'tenant/edittenant';?>" method="POST" class="form-horizontal form-bordered" id="edit_tenant_form" >
                                            		
	                                            	<div class="form-group">
		                                                <!-- begin col-4 -->
		                                                <input type="hidden" name="editid" id="editid" />
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>First Name:</label>
																<input type="text" name="edittenantfname" id="edittenantfname" placeholder="" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Last Name:</label>
																<input type="text" name="edittenantlname" id="edittenantlname" placeholder="" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>National ID / Passport No:</label>
																<input type="text"  name="editnationalpass" id="editnationalpass" placeholder="" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Phone Number:</label>
																<input type="text"  name="editphonenumber" id="editphonenumber" placeholder="" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Status:</label>
																<select class="form-control selectpicker" name="editstatus" id="editstatus" data-size="2" data-live-search="true" required>
						                                            <option value="" selected>Select a status</option>
						                                            <option value="1">Actived</option>
						                                            <option value="0">Deactivated</option>
						                                        </select>
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <div class="col-md-2" style="float:right;">
															<div class="form-group">
																<button type="submit" class="btn btn-success m-r-5 m-b-5">Edit Tenant</button>
															</div>
		                                                </div>
	                                                </div>
                                                </form>
                                            </div>
                                            <!-- end row -->
										</fieldset>
									</div>
									<!-- end wizard step-3 -->
									<!-- begin wizard step-4 -->
									<div>
										<fieldset>
											<legend class="pull-left width-full">View all Tenants</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                                <div class="table-responsive">
                                <table id="data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>National ID / Passport No</th>
                                            <th>Phone Number</th>
                                            <th>Status</th>
                                            <th>Date Registered</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    	echo $all_tenants;
                                    ?>
                                </table>
                            </div>
                                                
                                            </div>
                                            <!-- end row -->
										</fieldset>
									</div>
									<!-- end wizard step-4 -->
									
									
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
				var table_search = document.getElementById('table_search');
				var sv = table_search.value();alert(sv);
       		// sv = $(this).val();
       		 //console.log(sv);
       		// console.log('<?php echo base_url(); ?>tenant/ajax_get_tenant/'+sv);
       		$.get('<?php echo base_url(); ?>tenant/ajax_get_tenant/'+sv, function(data){
       			obj = jQuery.parseJSON(data);
       			// console.log(obj);
       			// alert(obj.firstname);
       			$('#edit_tenant_form input#editid').val(obj.tenant_id);
				$('#edit_tenant_form input#edittenantfname').val(obj.firstname);
				$('#edit_tenant_form input#edittenantlname').val(obj.lastname);
				$('#edit_tenant_form input#editnationalpass').val(obj.nationalid_passport);
				$('#edit_tenant_form input#editphonenumber').val(obj.phone_number);
			});
       		});
		});
</script>
<script>
	function get_tenant()
	{
		var sel = document.getElementById('table_search');
       // var sv = sel.options[sel.selectedIndex].value;

       // console.log(sv);
	}
</script>