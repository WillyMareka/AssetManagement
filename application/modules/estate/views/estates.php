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
																<label>Estate Name:</label>
																<input type="text"  name="estatename" required id="estatename" placeholder="Enter Estate name" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <!-- <div class="col-md-4">
															<div class="form-group">
																<label>Picture:</label>
																<input type="file" name="estatepicture" id="estatepicture" class="form-control" />
															</div>
		                                                </div> -->
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Location:</label>
																<input type="text"  name="estatelocation" required id="estatelocation" placeholder="Enter Estate location" class="form-control" />
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
                                                <!-- begin col-4 -->
		                                                <!-- <div class="col-md-4">
															<div class="form-group">
																
																<input type="file" name="estatepicture" id="estatepicture" class="form-control" />
															</div>
		                                                </div> -->
		                                                <!-- end col-4 -->
                                            </div>
                                            <!-- end row -->
										</fieldset>
									</div>
									<!-- end wizard step-1 -->
									
									<!-- begin wizard step-3 -->
									<div>
										<fieldset>
											<legend class="pull-left width-full">Edit Estate</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                            	<div class="form-group">
                                            		Select an Estate
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
		                                                 <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div id="divpic"  class="form-group">
																<img type="file" name="editestatepicture" id="editestatepicture"  width="250px" height="250px" alt="Profile Pic" src= "">
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
		                                                <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Estate Name:</label>
																<input type="text" name="editestatename" required id="editestatename" placeholder="" class="form-control" />
															</div>
		                                                </div>
		                                                <!-- end col-4 -->
                                                        <!-- begin col-4 -->
		                                                <div class="col-md-4">
															<div class="form-group">
																<label>Estate Location:</label>
																<input type="text" name="editestatelocation" required id="editestatelocation" placeholder="" class="form-control" />
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
																<button type="submit" class="btn btn-success m-r-5 m-b-5">Edit Estate</button>
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
											<legend class="pull-left width-full">View all Estates</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                                <div class="table-responsive">
                                                	<div class="table-toolbar">
                                     
                                      <div class="btn-group pull-right">
                                         <button data-toggle="dropdown" class="btn dropdown-toggle success">Tools <span class="caret"></span></button>
                                         <ul class="dropdown-menu">
                                            <li><a href="<?php echo base_url(). 'estate/allestates/pdf'?>">Save as PDF</a></li>
                                            <li class="download"><a href="<?php echo base_url(). 'estate/allestates/excel'?>">Export to Excel</a></li>
                                         </ul>
                                      </div>
                                   </div>
                                <table id="data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Estate Name</th>
                                            <th>Estate Location</th>
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
       			$('#estateediting input#editestateid').val(obj.estate_id);
       			$('#estateediting #editestatepicture').attr('src', obj.picture);
       			$('#estateediting #editestatemap').attr('src', obj.map_description);
				$('#estateediting input#editestatename').val(obj.estate_name);
				$('#estateediting input#editestatelocation').val(obj.estate_location);
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