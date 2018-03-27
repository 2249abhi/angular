@section('content')

@endsection
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Material Admin - Blank page</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="{{asset('assets/css/theme-default/bootstrap.css?1422792965')}}" />
		<link type="text/css" rel="stylesheet" href="{{asset('assets/css/theme-default/materialadmin.css?1425466319')}}" />
		<link type="text/css" rel="stylesheet" href="{{asset('assets/css/theme-default/font-awesome.min.css?1422529194')}}" />
		<link type="text/css" rel="stylesheet" href="{{asset('assets/css/theme-default/material-design-iconic-font.min.css?1421434286')}}" />
		<link type="text/css" rel="stylesheet" href="{{asset('assets/css/theme-default/libs/DataTables/jquery.dataTables.css?1423553989')}}" />
		<link type="text/css" rel="stylesheet" href="{{asset('assets/css/theme-default/libs/DataTables/extensions/dataTables.colVis.css?1423553990')}}" />
		<link type="text/css" rel="stylesheet" href="{{asset('assets/css/theme-default/libs/DataTables/extensions/dataTables.tableTools.css?1423553990')}}" />
		<link type="text/css" rel="stylesheet" href="{{asset('assets/css/theme-default/libs/summernote/summernote.css?1425218701')}}" />
		
		<!-- END STYLESHEETS -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="asselibs/utils/html5shiv.js?1403934957"></script>
		<script type="text/javascript" src="asselibs/utils/respond.min.js?1403934956"></script>
		<![endif]-->
		<style>
		.errors
		{
			color:red;
		}
		</style>
	</head>
	<body class="menubar-hoverable header-fixed">

		<!-- BEGIN HEADER-->
<header id="header" >
			<div class="headerbar">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="headerbar-left">
					<ul class="header-nav header-nav-options">
						<li class="header-nav-brand" >
							<div class="brand-holder">
								<a href="{{url('home')}}">
									<!--<span class="text-lg text-bold text-primary">ADMIN&nbsp;PANEL</span>-->
									<img src="assets/img/logo.png" alt="" />
								</a>
							</div>
						</li>
						<li>
							<a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
								<i class="fa fa-bars"></i>
							</a>
						</li>
					</ul>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="headerbar-right">
					<ul class="header-nav header-nav-profile">
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
								<img src="assets/img/avatar.png" alt="" />
								<span class="profile-info">
									{{Session::get('email')}}
									<small>Username</small>
								</span>
							</a>
							<ul class="dropdown-menu animation-dock">
								<li><a href="{{url('changepassword')}}"></i>Change Password</a></li>
								<li><a href="{{url('logout')}}"><i class="fa fa-fw fa-power-off text-danger"></i>Logout</a></li>
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->
					</ul><!--end .header-nav-profile -->
					<!--<ul class="header-nav header-nav-toggle">
						<li>
							<a class="btn btn-icon-toggle btn-default" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
								<i class="fa fa-ellipsis-v"></i>
							</a>
						</li>
					</ul>--><!--end .header-nav-toggle -->
				</div><!--end #header-navbar-collapse -->
			</div>
		</header>
		<!-- END HEADER-->

		<div id="base">

			<!-- BEGIN OFFCANVAS LEFT -->
			<div class="offcanvas">
			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS LEFT -->

			<!-- BEGIN CONTENT-->
			<div id="content">

				<!-- BEGIN BLANK SECTION -->
				@yield('content')
				<!--<section>
					<div class="section-header">
						<ol class="breadcrumb">
							<li><a href="html/.html">Home</a></li>
							<li class="active">User</li>
						</ol>
					</div>
					<div class="section-body">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-head">
										<ul class="nav nav-tabs" data-toggle="tabs">
											<li class="active"><a href="#first1">Registered Leads</a></li>
											<li><a href="#second1">Contact Leads</a></li>
										</ul>
									</div>
									<div class="card-body tab-content">
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>-->

				<!-- BEGIN BLANK SECTION -->
			</div><!--end #content-->
			<!-- END CONTENT -->

			<!-- BEGIN MENUBAR-->
				<div id="menubar" class="menubar-inverse ">
				<div class="menubar-fixed-panel">
					<div>
						<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					<div class="expanded">
						<a href="{{url('home')}}">
							<span class="text-lg text-bold text-primary ">ADMIN&nbsp;PANEL</span>
						</a>
					</div>
				</div>
				<div class="menubar-scroll-panel">

					<!-- BEGIN MAIN MENU -->
					<ul id="main-menu" class="gui-controls">

						<!-- BEGIN DASHBOARD -->
						<li>
							<a href="{{url('home')}}" >
								<div class="gui-icon"><i class="md md-home"></i></div>
								<span class="title">Dashboard</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END DASHBOARD -->

						<!-- BEGIN EMAIL -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="md md-email"></i></div>
								<span class="title">Email</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="{{url('inbox')}}" ><span class="title">Inbox</span></a></li>
								<li><a href="{{url('compose')}}" ><span class="title">Compose</span></a></li>
								<li><a href="{{url('compose')}}" ><span class="title">Reply</span></a></li>
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->

					</ul><!--end .main-menu -->
					<!-- END MAIN MENU -->

					<div class="menubar-foot-panel">
						<small class="no-linebreak hidden-folded">
							<span class="opacity-75">Copyright &copy; 2014</span> <strong>CodeCovers</strong>
						</small>
					</div>
				</div><!--end .menubar-scroll-panel-->
			</div><!--end #menubar-->
			<!-- END MENUBAR -->

			<!-- BEGIN OFFCANVAS RIGHT -->
			
			<!-- END OFFCANVAS RIGHT -->

		</div><!--end #base-->
		<!-- END BASE -->

		<!-- BEGIN JAVASCRIPT -->
		<script src="{{asset('assets/js/libs/jquery/jquery-1.11.2.min.js')}}"></script>
		<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
		<script src="{{asset('assets/js/libs/jquery/jquery-migrate-1.2.1.min.js')}}"></script>
		<script src="{{asset('assets/js/libs/bootstrap/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/js/libs/spin.js/spin.min.js')}}"></script>
		<script src="{{asset('assets/js/libs/autosize/jquery.autosize.min.js')}}"></script>
		<script src="{{asset('assets/js/libs/DataTables/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('assets/js/libs/DataTables/extensions/ColVis/js/dataTables.colVis.min.js')}}"></script>
		<script src="{{asset('assets/js/libs/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>
		<script src="{{asset('assets/js/libs/nanoscroller/jquery.nanoscroller.min.js')}}"></script>
		<script src="{{asset('assets/js/libs/ckeditor/ckeditor.js')}}"></script>
		<script src="{{asset('assets/js/libs/ckeditor/adapters/jquery.js')}}"></script>
		<script src="{{asset('assets/js/libs/summernote/summernote.js')}}"></script>
		<script src="{{asset('assets/js/libs/summernote/summernote.min.js')}}"></script>
		<script src="{{asset('assets/js/core/source/App.js')}}"></script>
		<script src="{{asset('assets/js/core/source/AppNavigation.js')}}"></script>
		<script src="{{asset('assets/js/core/source/AppOffcanvas.js')}}"></script>
		<script src="{{asset('assets/js/core/source/AppCard.js')}}"></script>
		<script src="{{asset('assets/js/core/source/AppForm.js')}}"></script>
		<script src="{{asset('assets/js/core/source/AppNavSearch.js')}}"></script>
		<script src="{{asset('assets/js/core/source/AppVendor.js')}}"></script>
		<script src="{{asset('assets/js/core/demo/Demo.js')}}"></script>
		<script src="{{asset('assets/js/core/demo/DemoTableDynamic.js')}}"></script>
	
		<!-- END JAVASCRIPT -->

	</body>
</html>
	