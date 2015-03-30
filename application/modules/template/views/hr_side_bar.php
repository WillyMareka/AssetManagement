<div>
	<div class="row">
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<!-- <div data-scrollbar="true" data-height="100%"> -->

				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li class="has-sub active">
						<a href="<?php echo base_url(); ?>hr">
						   <i class="fa fa-laptop"></i>
						    <span>Dashboard</span>
					    </a>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<!-- <span class="badge pull-right">10</span> -->
							<b class="caret pull-right"></b>
							<i class="fa fa-inbox"></i> 
							<span>Registration</span>
						</a>
						<ul class="sub-menu">
						    <li><a href="<?php echo base_url(); ?>hr/employees">Employee Registration</a></li>
						    <li><a href="<?php echo base_url(); ?>hr/job_groups">Job Groups</a></li>
						    <li><a href="<?php echo base_url(). 'estate'; ?>">Estate Registration</a></li>
                            <li><a href="<?php echo base_url(). 'house'; ?>">House Registration</a></li>
                            <li><a href="<?php echo base_url(). 'tenant'; ?>">Tenants Registration</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="#">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-suitcase"></i>
						    <span>Cash Flows</span> 
						</a>
						<ul class="sub-menu">
							<li><a href="<?php echo base_url(). 'payments'; ?>">Salaries & Payments</a></li>
							<li><a href="<?php echo base_url(); ?>hr">Allowances & Deductions</a></li>
							<li><a href="<?php echo base_url(); ?>hr">Penalties</a></li>
						</ul>
					</li>
					
			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
	</div>
</div>