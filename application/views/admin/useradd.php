<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
	<?php $this->load->view('commons/metronic_useradd_header');?>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
	<!-- BEGIN HEADER -->   
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="/">
				<img src="/assets/logo_gold1.png" alt="logo" />
				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<img src="/assets/metronics/img/menu-toggler.png" alt="" />
				</a>          
				<!-- END RESPONSIVE MENU TOGGLER -->            
				<!-- BEGIN TOP NAVIGATION MENU -->
				<?php $this->load->view('commons/metronic_topnavigation_menu');?>
				<!-- END TOP NAVIGATION MENU --> 
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	<div class="page-container row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar nav-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<?php $this->load->view('commons/metronic_sidebar');?>
		<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->  
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="portlet-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button"></button>
					<h3>portlet Settings</h3>
				</div>
				<div class="modal-body">
					<p>Here will be a configuration form</p>
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->   
				<div class="row-fluid">
					<div class="span12">
						<?php $this->load->view('commons/metronic_pagetitle_breadcrumb');?>
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN VALIDATION STATES-->
						<div class="portlet box purple">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Basic Identity</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form action="/admin_users/add_handler" id="form_sample_1" class="form-horizontal">
									<div class="alert alert-error hide">
										<button class="close" data-dismiss="alert"></button>
										You have some form errors. Please check below.
									</div>
									<div class="alert alert-success hide">
										<button class="close" data-dismiss="alert"></button>
										Your form validation is successful!
									</div>
									<div class="control-group">
										<label class="control-label">Name<span class="required">*</span></label>
										<div class="controls">
											<input type="text" name="name" data-required="1" class="span6 m-wrap"/>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Email<span class="required">*</span></label>
										<div class="controls">
											<input name="email" type="text" class="span6 m-wrap"/>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Role<span class="required">*</span></label>
										<div class="controls">
											<select class="span6 m-wrap" name="category">
												<option value="">Select...</option>
												<option value="Category 1">Admin</option>
												<option value="Category 2">TS</option>
												<option value="Category 3">Sales</option>
											</select>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Branch<span class="required">*</span></label>
										<div class="controls">
											<label class="checkbox line">
											<input type="checkbox" value="1" name="service"/> Surabaya
											</label>
											<label class="checkbox line">
											<input type="checkbox" value="2" name="service"/> Jakarta
											</label>
											<label class="checkbox line">
											<input type="checkbox" value="3" name="service"/> Malang
											</label>
											<label class="checkbox line">
											<input type="checkbox" value="4" name="service"/> Bali
											</label>
											<span class="help-block">(select at least one)</span>
											<div id="form_2_service_error"></div>
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn purple">Validate</button>
										<button type="button" class="btn">Cancel</button>
									</div>
								</form>
								<!-- END FORM-->
							</div>
						</div>
						<!-- END VALIDATION STATES-->
					</div>
				</div>
				<!-- END PAGE CONTENT-->         
			</div>
			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE -->  
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<?php $this->load->view('commons/metronic_footer');?>
	<!-- END FOOTER -->
	<?php $this->load->view('commons/metronic_useradd_footer');?>
	<script>
		jQuery(document).ready(function() {   
		   // initiate layout and plugins
		   App.init();
		   FormValidation.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>