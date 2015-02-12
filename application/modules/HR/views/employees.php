<div>
	<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li class="active">Employees</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Employees</h1>
			<!-- end page-header -->

			<!--begining of content page-->
			<div class="row">
                <!-- begin col-12 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">Employees</h4>
                        </div>
                        <div class="panel-body">
                            
								<div id="wizard">
									<ol>
										<li>
										    Register Employee
										</li>
										<li>
										    Edit Employee
										 </li>
										 <li>
										    View Employees
										 </li>
										
									</ol>
									<!-- begin wizard step-1 -->
									<div>
                                        <fieldset>
                                            <legend class="pull-left width-full">Registration</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                            	<form action="<?php echo base_url();?>hr/employees/registration" method="POST" class="form-horizontal form-bordered">
	                                            	<div class="form-group">
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>First Name:</label>
																<input type="text" name="fname" id="fname" placeholder="First Name" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Middle Name</label>
																<input type="text"  name="mname" id="mname" placeholder="Middle Name" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Last Name:</label>
																<input type="text"  name="lname" id="lname" placeholder="Last Name" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                 <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>National ID:</label>
																<input type="text" name="natid" id="natid" placeholder="First Name" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>NHIF Number</label>
																<input type="text"  name="nhifno" id="nhifno" placeholder="Middle Name" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>KRA Pin:</label>
																<input type="text"  name="krapin" id="krapin" placeholder="KRA Pin" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                 <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Gender:</label>
																<select class="form-control selectpicker" name="gender" id="gender" data-size="2" data-live-search="true">
																	<option value="" selected="true" disabled>**Select Gender**</option>
																	<option value="Male">Male</option>
																	<option value="Female">Female</option>
																</select>
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Date of Birth:</label>
																<input type="text"  name="nhifno" id="nhifno" placeholder="Middle Name" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Marital Status:</label>
																<select class="form-control selectpicker" name="gender" id="gender" data-size="2" data-live-search="true">
																	<option value="" selected="true" disabled>**Select Marital Status**</option>
																	<option value="Sinlge">Single</option>
																	<option value="Married">Married</option>
																</select>
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Job Group:</label>
																<?php
																	echo $active_jobs;
																?>
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
											<legend class="pull-left width-full">Edit</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                                <!-- begin col-6 -->
                                                <div class="col-md-6">
													<div class="form-group">
														<label>Phone Number</label>
														<input type="text" name="phone" placeholder="123-456-7890" class="form-control" />
													</div>
                                                </div>
                                                <!-- end col-6 -->
                                                <!-- begin col-6 -->
                                                <div class="col-md-6">
													<div class="form-group">
														<label>Email Address</label>
														<input type="text" name="email" placeholder="someone@example.com" class="form-control" />
													</div>
                                                </div>
                                                <!-- end col-6 -->
                                            </div>
                                            <!-- end row -->
										</fieldset>
									</div>
									<!-- end wizard step-2 -->
									<!-- begin wizard step-3 -->
									<div>
										<fieldset>
											<legend class="pull-left width-full">View all Employees</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                                <div class="table-responsive">
                                <table id="data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Job Group Name</th>
                                            <th>Salary</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    	echo $all_job_groups;
                                    ?>
                                </table>
                            </div>
                                                
                                            </div>
                                            <!-- end row -->
										</fieldset>
									</div>
									<!-- end wizard step-3 -->
									
									
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
		});
</script>