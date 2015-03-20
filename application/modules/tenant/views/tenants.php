<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/select2/css/select2.min.css">
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
                            
								<div id="wizard" class="tabs">
									<ol>
										<li id="registerten">
										    Register Tenant
										</li>
										<li id="assignten">
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
                                            	<form id="tenantregistration" name="tenantregistration" enctype="multipart/form-data" method="POST" class="form-horizontal form-bordered">
	                                            	<div class="form-group">
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>First Name:</label>
																<input type="text" name="tenantfname" id="tenantfname" required placeholder="Enter Tenant First Name" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Last Name:</label>
																<input type="text" name="tenantlname" id="tenantlname" required placeholder="Enter Tenant Last Name" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Picture:</label>
																<input type="file" name="tenantpicture" id="tenantpicture" required class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>National ID / Passport No:</label>
																<input type="text"  name="nationalpass" id="nationalpass" required placeholder="Enter National ID or Passport Number" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Phone Number:</label>
																<input type="text"  name="phonenumber" id="phonenumber" required placeholder="Enter Mobile Phone Number" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Status:</label>
																<select class="form-control selectpicker" name="tenantstatus" required id="tenantstatus" data-size="2" data-live-search="true">
						                                            <option value="" selected>Select a status</option>
						                                            <option value="1">Activated</option>
						                                            <option value="0">Deactivated</option>
						                                        </select>
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                
		                                                <div class="col-md-2" style="float:right;">
															<div class="form-group">
																<button id="registertenant" class="btn btn-success m-r-5 m-b-5">Register</button>
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
                                            		
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                            	<form id="tenantassigning" name="tenantassigning" method="POST" class="form-horizontal form-bordered" >
                                            		
	                                            	<div class="form-group">
		                                               
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>House ID:</label>
																<input type="text" name="assignhouseid" id="assignhouseid" required placeholder="Enter the tenant's house ID" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                 <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Block Name:</label>
																<input type="text"  name="assignblock" id="assignblock" required placeholder="Enter the block name" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Tenant ID:</label>
																<input type="text"  name="assigntenantid" id="assigntenantid" required placeholder="Enter the tenant ID" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->

		                                                
		                                               
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>House No:</label>
																<input type="text"  name="assignhouseno" id="assignhouseno" required placeholder="Enter the tenant's house no" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Estate Name:</label>
																<input type="text"  name="assignestate" id="assignestate" required placeholder="Enter the estate name" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Phone Number:</label>
																<input type="text"  name="assignpnumber" id="assignpnumber" required placeholder="Enter the tenant's phone number" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Rent:</label>
																<input type="text"  name="assignrent" id="assignrent" required placeholder="Enter the house rent" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>House Type:</label>
																<select class="form-control selectpicker" required name="assignhousetype" id="assignhousetype"  data-live-search="true">
																	<?php echo $housetypes?>
																</select>
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                 <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>National ID / Passport:</label>
																<input type="text"  name="assignnapa" id="assignnapa" required placeholder="Enter the tenant's National ID/Passport no" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                
		                                                 


                                                        

		                                                <div class="col-md-2" style="float:right;">
															<div class="form-group">
																<button id="assignbutton" type="submit" class="btn btn-success m-r-5 m-b-5">Assign house</button>
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
<<<<<<< HEAD
                                            		
=======
                                            		<select class="js-example-data-array form-control input-sm pull-right" name="table_search" id="table_search" style="width: 150px;"></select>
>>>>>>> f5d07595bf42fad19fd98966f4f55fd1bb10259a
                                            		<?php
                                            			// echo $tenants_c;
                                            		?>
                                                  
                                                    </div>
                                            </div>
                                            <div class="row">
                                            	<form id="tenantediting" name="tenantediting" method="POST" class="form-horizontal form-bordered" >
                                            		
	                                            	<div class="form-group">
	                                            		<input type="hidden" name="edittenantid" id="edittenantid" />
	                                            		<input type="hidden" name="edittenantpicture" id="edittenantpicture" />
	                                            		 <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div id="divpic"  class="form-group">
																<img type="file" name="edittenantpicture" id="edittenantpicture"  width="250px" height="250px" alt="Profile Pic" src= "">
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>First Name:</label>
																<input type="text" name="edittenantfname" id="edittenantfname" required placeholder="" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Last Name:</label>
																<input type="text" name="edittenantlname" id="edittenantlname" required placeholder="" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>National ID / Passport No:</label>
																<input type="text"  name="editnationalpass" id="editnationalpass" required placeholder="" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Phone Number:</label>
																<input type="text"  name="editphonenumber" id="editphonenumber" required placeholder="" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Status:</label>
																<select class="form-control selectpicker" name="edittenantstatus" id="edittenantstatus" data-size="2" data-live-search="true" required>
						                                            <option value="" selected>Select a status</option>
						                                            <option value="1">Activated</option>
						                                            <option value="0">Deactivated</option>
						                                        </select>
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <div class="col-md-2" style="float:right;">
															<div class="form-group">
																<button type="submit" class="btn btn-success m-r-5 m-b-5">Edit Tenant</button>
																<button type="reset" class="btn btn-warning m-r-5 m-b-5">Cancel</button>
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
<script type="text/javascript" src="<?php echo base_url();?>assets/select2/js/select2.min.js"></script>
<script>
		$(document).ready(function() {
			App.init();
			FormWizard.init();
<<<<<<< HEAD
			 
			$('#table_search_tenant').change(function(){
=======
			$('#table_search').change(function(){
>>>>>>> 8a1245ebc216b78454c9b99381be8013ee89913e
       		sv = $(this).val();
<<<<<<< HEAD
       		//console.log(sv);
=======
>>>>>>> f5d07595bf42fad19fd98966f4f55fd1bb10259a
       		// console.log('<?php echo base_url(); ?>tenant/ajax_get_tenant/'+sv);
	       		$.get('<?php echo base_url(); ?>tenant/ajax_get_tenant/'+sv, function(data){
	       			obj = jQuery.parseJSON(data);
	       			//console.log(obj);
	       			// alert(obj.firstname);
	       			// var img = val(obj.picture);
	       			// imgList += '<img name="edittenantpicture" id="edittenantpicture"  width="300px" height="300px" alt="Profile Pic" src= "' + img + '">';

	       			//alert(pic);
	       			$('#tenantediting input#edittenantid').val(obj.tenant_id);
					$('#tenantediting input#edittenantfname').val(obj.firstname);
					$('#tenantediting input#edittenantlname').val(obj.lastname);
					$('#tenantediting #edittenantpicture').attr('src', obj.picture);
					$('#tenantediting input#editnationalpass').val(obj.nationalid_passport);
					$('#tenantediting input#editphonenumber').val(obj.phone_number);
					$('#tenantediting select#edittenantstatus').val(obj.tenant_status);
	                
				});
       		});
<<<<<<< HEAD
=======
			
<<<<<<< HEAD
=======
			var data = [{ id: 0, text: 'enhancement' }, { id: 1, text: 'bug' }, { id: 2, text: 'duplicate' }, { id: 3, text: 'invalid' }, { id: 4, text: 'wontfix' }];
>>>>>>> f5d07595bf42fad19fd98966f4f55fd1bb10259a

			// var data = [{ id: 0, text: 'enhancement' }, { id: 1, text: 'bug' }, { id: 2, text: 'duplicate' }, { id: 3, text: 'invalid' }, { id: 4, text: 'wontfix' }];

			// $(".js-example-data-array").select2({
			// 	data: data
			// });






			// $.get('<?php echo base_url(); ?>tenant/ajax_get_house/'+sv, function(data){
   //     			obj = jQuery.parseJSON(data);
   //     			//console.log(obj);
   //     			// alert(obj.firstname);

   //     			//gets vacant houses
   //     			$('#assign_tenant_form input#assignhouseid').val(obj.house_id);
			// 	$('#assign_tenant_form input#assignhouseno').val(obj.house_no);
			// 	$('#assign_tenant_form input#assignhousetype').val(obj.house_type);
			// 	$('#assign_tenant_form input#assignblock').val(obj.block);
			// 	$('#assign_tenant_form input#assignestate').val(obj.estate_name);
			// 	$('#assign_tenant_form input#assignrent').val(obj.rent);

               
				
				
			// });

			// $.get('<?php echo base_url(); ?>tenant/ajax_get_atenant/'+sv, function(data){
   //     			obj = jQuery.parseJSON(data);
   //     			//console.log(obj);
   //     			// alert(obj.firstname);
   //     			 //gets tenant
			// 	$('#assign_tenant_formm input#assigntenantid').val(obj.tenant_id);
			// 	$('#assign_tenant_formm input#assignnapa').val(obj.nationalid_passport);
			// 	$('#assign_tenant_formm input#assignpnumber').val(obj.phone_number);
			// });
>>>>>>> 8a1245ebc216b78454c9b99381be8013ee89913e
		});
</script>
<script>
	function get_tenant()
	{
		var sel = document.getElementById('table_search');
       // var sv = sel.options[sel.selectedIndex].value;

       // console.log(sv);
	}

	function get_house()
	{
		var sel = document.getElementById('table_search');
       // var sv = sel.options[sel.selectedIndex].value;

       // console.log(sv);
	}
</script>