<div>
	<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li class="active">Houses</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Houses</h1>
			<!-- end page-header -->

			<!--begining of content page-->
			<div class="row">
                <!-- begin col-12 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">Houses</h4>
                        </div>
                        <div class="panel-body">
                            
								<div id="wizard">
									<ol>
										<li>
										    Register house
										</li>
										<li>
										    Edit house
										 </li>
										 <li>
										    View houses
										 </li>
										
									</ol>
									<!-- begin wizard step-1 -->
									<div>
                                        <fieldset>
                                            <legend class="pull-left width-full">Registration</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                            	<form action="<?php echo base_url() .'house/registration';?>" enctype="multipart/form-data" method="POST" class="form-horizontal form-bordered" role="form">
	                                            	<div class="form-group">
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>House No:</label>
																<input type="text" name="houseno" id="houseno" placeholder="Enter House No" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>House Type:</label>
																<select class="form-control selectpicker" name="housetype" id="housetype"  data-live-search="true">
																	<?php echo $housetypes?>
																</select>
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Block:</label>
																<input type="text"  name="houseblock" id="houseblock" placeholder="Enter house block" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Estate Name:</label>
																<input type="text"  name="houseestate" id="houseestate" placeholder="Enter estate name" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Rent:</label>
																<input type="text"  name="houserent" id="houserent" placeholder="Enter Rent for the house" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Picture:</label>
																<input type="file" name="housepicture" id="housepicture" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Bedrooms:</label>
																<input type="text"  name="housebedrooms" id="housebedrooms" placeholder="Enter Bedroom Number" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Bathrooms:</label>
																<input type="text"  name="housebathrooms" id="housebathrooms" placeholder="Enter Bathroom Number" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Kitchen:</label>
																<input type="text"  name="housekitchen" id="housekitchen" placeholder="Enter Kitchen Number" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Description:</label>
																<textarea  name="housedescription" id="housedescription" placeholder="Enter house Description" class="form-control"></textarea>
																<!-- <input type="text"  name="housedescription" id="housedescription" placeholder="Enter house Description" class="form-control" /> -->
															</div>
		                                                </div>
		                                                <!-- end col-4 -->




		                                                <div class="col-md-2" style="float:right;">
															<div class="form-group">
																<button type="submit" class="btn btn-success m-r-5 m-b-5">Register House</button>
															</div>
		                                                </div>
	                                                </div>
                                                </form>
                                            </div>
                                            <!-- end row -->
										</fieldset>
									</div>
									<!-- end wizard step-1 -->
									
									<!-- begin wizard step-3 -->
									<div>
										<fieldset>
											<legend class="pull-left width-full">Edit House</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                            	<div class="form-group">
                                            		<?php
                                            			echo $houses_c;
                                            		?>
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
                                            	<form action="<?php echo base_url() .'house/edithouse';?>" method="POST" class="form-horizontal form-bordered" id="edit_house_form" >
                                            		
	                                            	<div class="form-group">
		                                                <!-- begin col-4 -->
		                                                <input type="hidden" name="edithouseid" id="edithouseid" />
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>House No:</label>
																<input type="text" name="edithouseno" id="edithouseno" placeholder="" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>House Type:</label>
																<input type="text" name="edithousetype" id="edithousetype" placeholder="" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Block:</label>
																<input type="text"  name="edithouseblock" id="edithouseblock" placeholder="" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Estate:</label>
																<input type="text"  name="edithouseestate" id="edithouseestate" placeholder="" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Rent:</label>
																<input type="text"  name="edithouserent" id="edithouserent" placeholder="" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Bedrooms:</label>
																<input type="text"  name="edithousebedrooms" id="edithousebedrooms" placeholder="" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Bathrooms:</label>
																<input type="text"  name="edithousebathrooms" id="edithousebathrooms" placeholder="" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Kitchen:</label>
																<input type="text"  name="edithousekitchen" id="edithousekitchen" placeholder="" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Description:</label>
																<textarea name="edithousedescription" id="edithousedescription" placeholder="" class="form-control" ></textarea>
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Status:</label>
																<select class="form-control selectpicker" name="edithousestatus" id="edithousestatus" data-size="2" data-live-search="true">
																	<option value="" selected="true" disabled>**Select Status**</option>
																	<option value="1">Activate</option>
																	<option value="0">Deactivate</option>
																</select>
															</div>
		                                                </div>
		                                                <!-- end col-4 -->


                                                        

		                                                <div class="col-md-2" style="float:right;">
															<div class="form-group">
																<button type="submit" class="btn btn-success m-r-5 m-b-5">Edit house</button>
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
											<legend class="pull-left width-full">View all houses</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                                <div class="table-responsive">
                                <table id="data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>House No</th>
                                            <th>House Type</th>
                                            <th>Block</th>
                                            <th>Estate</th>
                                            <th>Rent</th>
                                            <th>Bedroom(s)</th>
                                            <th>Bathroom(s)</th>
                                            <th>Kitchen(s)</th>
                                            
                                            <th>Status</th>
                                            <th>Date Registered</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    	echo $all_houses;
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
       		sv = $(this).val();
       		// console.log('<?php echo base_url(); ?>house/ajax_get_house/'+sv);
       		$.get('<?php echo base_url(); ?>house/ajax_get_house/'+sv, function(data){
       			obj = jQuery.parseJSON(data);
       			// console.log(obj);
       			// alert(obj.firstname);
       			$('#edit_house_form input#edithouseid').val(obj.house_id);
				$('#edit_house_form input#edithouseno').val(obj.house_no);
				$('#edit_house_form input#edithousetype').val(obj.house_type);
				$('#edit_house_form input#edithouseblock').val(obj.house_block);
				$('#edit_house_form input#edithouseestate').val(obj.house_estate);
				$('#edit_house_form input#edithouserent').val(obj.house_rent);
				$('#edit_house_form input#edithousebedrooms').val(obj.house_bedrooms);
				$('#edit_house_form input#edithousebathrooms').val(obj.house_bathrooms);
				$('#edit_house_form input#edithousekitchen').val(obj.house_kitchen);
				$('#edit_house_form input#edithousedescription').val(obj.house_description);
				$('#edit_house_form input#edithousestatus').val(obj.house_status);
			});
       });
		});
</script>
<script>
	function get_house()
	{
		var sel = document.getElementById('table_search');
       // var sv = sel.options[sel.selectedIndex].value;

       // console.log(sv);
	}
</script>