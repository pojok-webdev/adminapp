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
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-globe"></i>Show/Hide Columns</div>
								<div class="actions">
									<div class="btn-group">
										<a class="btn" href="#" data-toggle="dropdown">
										Columns
										<i class="icon-angle-down"></i>
										</a>
										<div id="thisdatatable_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
											<label><input type="checkbox" checked data-column="0">Rendering engine</label>
											<label><input type="checkbox" checked data-column="1">Browser</label>
											<label><input type="checkbox" checked data-column="2">Platform(s)</label>
											<label><input type="checkbox" checked data-column="3">Engine version</label>
											<label><input type="checkbox" checked data-column="4">CSS grade</label>
										</div>
									</div>
								</div>
							</div>
							<div class="portlet-body">
								<table class="table table-striped table-bordered table-hover table-full-width" id="thisdatatable">
									<thead>
										<tr>
											<th>Kode</th>
											<th>Name</th>
											<th class="hidden-480">Createdate</th>
											<th class="hidden-480">Engine version</th>
											<th class="hidden-480">CSS grade</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach($objs as $obj){?>
										<tr>
											<td><?php echo $obj->kdticket;?></td>
											<td><?php echo $obj->clientname;?></td>
											<td class="hidden-480"><?php echo $obj->create_date;?></td>
											<td class="hidden-480 curdate">4</td>
											<td class="hidden-480">X</td>
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
			var initTable = function() {
				var oTable = $('#thisdatatable').dataTable( {           
					"aoColumnDefs": [
						{ "aTargets": [ 0 ] }
					],
					"aaSorting": [[0, 'desc']],
					"aLengthMenu": [
						[5, 15, 20, -1],
						[5, 15, 20, "All"] // change per page values here
					],
					// set the initial value
					"iDisplayLength": 10,
				});

				jQuery('#thisdatatable_wrapper .dataTables_filter input').addClass("m-wrap small"); // modify table search input
				jQuery('#thisdatatable_wrapper .dataTables_length select').addClass("m-wrap small"); // modify table per page dropdown
				jQuery('#thisdatatable_wrapper .dataTables_length select').select2(); // initialize select2 dropdown

				$('#thisdatatable_column_toggler input[type="checkbox"]').change(function(){
					/* Get the DataTables object again - this is not a recreation, just a get of the object */
					var iCol = parseInt($(this).attr("data-column"));
					var bVis = oTable.fnSettings().aoColumns[iCol].bVisible;
					oTable.fnSetColumnVis(iCol, (bVis ? false : true));
				});
			}

		   	App.init();
			initTable();
		});
	</script>
	<script src="/assets/padiapp/ticket.js"></script>
</body>
<!-- END BODY -->
</html>