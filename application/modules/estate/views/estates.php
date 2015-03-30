<div>
	<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="<?php echo base_url();?>hr">Home</a></li>
				<li class="active">Estates</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Estates</h1>
			<!-- end page-header -->

			<!--begining of content page-->
			<div class="row">
                <!-- begin col-12 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">Estates</h4>
                        </div>
                        <div class="panel-body">
                            
								<div id="wizard">
									<ol>
										<li>
										    Register Estate
										</li>
										<li>
										    Edit Estate
										 </li>
										 <li>
										    View Estates
										 </li>
										
									</ol>
									<!-- begin wizard step-1 -->
									<div>
                                        <fieldset>
                                            <legend class="pull-left width-full">Registration</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                            	<form id="estateregistration" name="estateregistration" role="form" enctype="multipart/form-data" method="POST" class="form-horizontal form-bordered">
	                                            	<div class="form-group">
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>estate Type:</label>
																<select class="form-control selectpicker" required name="estatetype" id="estatetype"  data-live-search="true">
																	<?php echo $estatetypes?>
																</select>
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Estate Name:</label>
																<input type="text"  name="estateestate" required id="estateestate" placeholder="Enter estate name" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Rent:</label>
																<input type="text"  name="estaterent" required id="estaterent" placeholder="Enter Rent for the estate" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Picture:</label>
																<input type="file" name="estatepicture" id="estatepicture" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Bedrooms:</label>
																<input type="text"  name="estatebedrooms" required id="estatebedrooms" placeholder="Enter Bedroom Number" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Bathrooms:</label>
																<input type="text"  name="estatebathrooms" required id="estatebathrooms" placeholder="Enter Bathroom Number" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Kitchen:</label>
																<input type="text"  name="estatekitchen" required id="estatekitchen" placeholder="Enter Kitchen Number" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Description:</label>
																<textarea  name="estatedescription" id="estatedescription" placeholder="Enter estate Description" class="form-control"></textarea>
																<!-- <input type="text"  name="estatedescription" id="estatedescription" placeholder="Enter estate Description" class="form-control" /> -->
															</div>
		                                                </div>
		                                                <!-- end col-4 -->




		                                                <div class="col-md-2" style="float:right;">
															<div class="form-group">
																<button type="submit" class="btn btn-success m-r-5 m-b-5">Register estate</button>
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
											<legend class="pull-left width-full">Edit estate</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                            	<div class="form-group">
                                            		Select a estate
                                            		<?php
                                            			echo $estates_c;
                                            		?>
                                                      
                                                    </div>
                                            </div>
                                            <div class="row">
                                            	<form id="estateediting" name="estateediting" method="POST" class="form-horizontal form-bordered"  >
                                            		
	                                            	<div class="form-group">
		                                                <!-- begin col-4 -->
		                                                <input type="hidden" name="editestateid" id="editestateid" />
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>estate No:</label>
																<input type="text" name="editestateno" required id="editestateno" placeholder="" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>estate Type:</label>
																<input type="text" name="editestatetype" required id="editestatetype" placeholder="" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Block:</label>
																<input type="text"  name="editestateblock" id="editestateblock" placeholder="" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Estate:</label>
																<input type="text"  name="editestateestate" required id="editestateestate" placeholder="" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Rent:</label>
																<input type="text"  name="editestaterent" required id="editestaterent" placeholder="" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Bedrooms:</label>
																<input type="text"  name="editestatebedrooms" required id="editestatebedrooms" placeholder="" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Bathrooms:</label>
																<input type="text"  name="editestatebathrooms" required id="editestatebathrooms" placeholder="" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Kitchen:</label>
																<input type="text"  name="editestatekitchen" required id="editestatekitchen" placeholder="" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Description:</label>
																<textarea name="editestatedescription" id="editestatedescription" placeholder="" class="form-control" ></textarea>
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Status:</label>
																<select class="form-control selectpicker" name="editestatestatus" id="editestatestatus" data-size="2" data-live-search="true">
																	<option value="" selected="true" disabled>**Select Status**</option>
																	<option value="1">Activate</option>
																	<option value="0">Deactivate</option>
																</select>
															</div>
		                                                </div>
		                                                <!-- end col-4 -->


                                                        

		                                                <div class="col-md-2" style="float:right;">
															<div class="form-group">
																<button type="submit" class="btn btn-success m-r-5 m-b-5">Edit estate</button>
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
											<legend class="pull-left width-full">View all estates</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                                <div class="table-responsive">
                                <table id="data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>estate No</th>
                                            <th>estate Type</th>
                                            <th>Block</th>
                                            <th>Estate</th>
                                            <th>Rent</th>
                                            <th>Bedroom(s)</th>
                                            <th>Bathroom(s)</th>
                                            <th>Kitchen(s)</th>
                                            <th>Vacancy</th>
                                            <th>Status</th>
                                            <th>Date Registered</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    	echo $all_estates;
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
			$('#table_search_estate').change(function(){
       		sv = $(this).val();
       		// console.log('<?php echo base_url(); ?>estate/ajax_get_estate/'+sv);
       		$.get('<?php echo base_url(); ?>estate/ajax_get_estate/'+sv, function(data){
       			obj = jQuery.parseJSON(data);
       			 //console.log(obj);
       			// alert(obj.firstname);
       			$('#estateediting #editestatepicture').attr('src', obj.picture);
       			$('#estateediting input#editestateid').val(obj.estate_id);
				$('#estateediting input#editestateno').val(obj.estate_no);
				$('#estateediting input#editestatetype').val(obj.estate_type);
				$('#estateediting input#editestateblock').val(obj.block);
				$('#estateediting input#editestateestate').val(obj.estate_name);
				$('#estateediting input#editestaterent').val(obj.rent);
				$('#estateediting input#editestatebedrooms').val(obj.bedrooms);
				$('#estateediting input#editestatebathrooms').val(obj.bathrooms);
				$('#estateediting input#editestatekitchen').val(obj.kitchen);
				$('#estateediting textarea#editestatedescription').val(obj.estate_description);
				$('#estateediting select#editestatestatus').val(obj.estate_status);
			});
       });
		});
</script>
<script>
	function get_estate()
	{
		var sel = document.getElementById('table_search_estate');
       // var sv = sel.options[sel.selectedIndex].value;
       // console.log(sv);
	}
</script>