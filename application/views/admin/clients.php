<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<?php $this->load->view('commons/metronic_table_header');?>
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
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<?php $this->load->view('commons/metronic_pagetitle_breadcrumb');?>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box green">
							<div class="portlet-title">
								<div class="caption"><i class="icon-globe"></i>Clients</div>
								<div class="actions">
									<a href="/admin_clients/add" id="addClient" class="btn yellow"><i class="icon-plus"></i> Add Client</a>
								</div>

							</div>
							<div class="portlet-body">
								<table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
									<thead>
										<tr>
											<th>Client</th>
											<th>Address</th>
											<th class="hidden-480">Service(s)</th>
											<th class="hidden-480">Activate Date</th>
											<th class="hidden-480">AM</th>
										</tr>
									</thead>
									<tbody>
									<?php foreach($objs as $obj){?>
										<tr>
											<td><?php echo $obj->name;?></td>
											<td><?php echo $obj->address;?></td>
											<td class="hidden-480"><?php echo $obj->srv;?></td>
											<td class="hidden-480"><?php echo $obj->activedate;?></td>
											<td class="hidden-480"><?php echo $obj->am;?></td>
										</tr>
									<?php }?>
									</tbody>
								</table>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET-->
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
	<?php $this->load->view('commons/metronic_table_footer');?>
	<script>
		jQuery(document).ready(function() {       
		   App.init();
		   TableAdvanced.init();
		   $("#addUser").click(function(){
			   console.log("add user invoked");
		   });
		});
	</script>
</body>
<!-- END BODY -->
</html>