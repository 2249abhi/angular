<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Material Admin - Login</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<meta name="csrf-token" content="{{ csrf_token() }}" />
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/bootstrap.css?1422792965" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/materialadmin.css?1425466319" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/font-awesome.min.css?1422529194" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/material-design-iconic-font.min.css?1421434286" />
		

		<!-- END STYLESHEETS -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="assets/js/libs/utils/html5shiv.js?1403934957"></script>
		<script type="text/javascript" src="assets/js/libs/utils/respond.min.js?1403934956"></script>
		<![endif]-->
		<style>
			.errors
			{
				color:red;
			}
		</style>
	</head>
	<body class="menubar-hoverable header-fixed ">
		<!-- BEGIN LOGIN SECTION -->
		<div class="container" style="margin-top:50px;">
			<div class="row">
				<div class="col-sm-2 col-xs-12 text-center col-md-offset-5">
							<img src="assets/img/logo.png" />
						</div>
			</div>
		</div>
		<section class="section-account">
			<div class="card contain-sm style-transparent">
				<div class="card-body">
					<div class="row">


						<div class="col-sm-6 col-md-offset-3">
							<br/>
							<span class="text-lg text-bold text-primary">MATERIAL ADMIN</span>
							<br/><br/>
							<!--<form class="form floating-label" action="" name="login" id="login" accept-charset="utf-8" method="post">-->
								@if ($errors->first('loginerror'))
	                             <div class="alert alert-danger">
	                               {{ $errors->first('loginerror') }}
	                             </div>
	                            @endif
								{!! Form::open(array('url' => 'checklogin','id'=>'login')) !!}
								<div class="alert alert-danger" id="fail-msg" style="display:none">
								  <strong>Sorry!</strong>  Wrong username or password.
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="username" name="username">
									@if ($errors->any())
	                                <p class="errors">{{$errors->first('username')}}</p>
	                                @endif
									<label for="username">Username</label>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" id="password" name="password">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									@if ($errors->any())
	                                <p class="errors">{{$errors->first('password')}}</p>
	                                @endif
									<label for="password">Password</label>
									<p class="help-block"><a href="#">Forgotten?</a></p>
								</div>
								<br/>
								<div class="row">
									<div class="col-xs-6 text-left">
										<div class="checkbox checkbox-inline checkbox-styled">
											<label>
												<input type="checkbox"> <span>Remember me</span>
											</label>
										</div>
									</div><!--end .col -->
									{!! Form::submit('Submit', ['class' => 'btn btn-primary btn-raised']) !!}    
                            		{!! Form::close() !!}
								</div><!--end .row -->
							</form>
						</div><!--end .col -->
						<!--<div class="col-sm-5 col-sm-offset-1 text-center">
							<br><br>
								<h3 class="text-light">
									No account yet?
								</h3>
								<a class="btn btn-block btn-raised btn-primary" href="#">Sign up here</a>
								<br><br>
									<h3 class="text-light">
										or
									</h3>
									<p>
										<a href="#" class="btn btn-block btn-raised btn-info"><i class="fa fa-facebook pull-left"></i>Login with Facebook</a>
									</p>
									<p>
										<a href="#" class="btn btn-block btn-raised btn-info"><i class="fa fa-twitter pull-left"></i>Login with Twitter</a>
									</p>
								</div>--><!--end .col -->
							</div><!--end .row -->
						</div><!--end .card-body -->
					</div><!--end .card -->
				</section>
				<!-- END LOGIN SECTION -->

				<!-- BEGIN JAVASCRIPT -->
				
		


				<script src="assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
				<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
		<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
				<script src="assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
				<script src="assets/js/libs/bootstrap/bootstrap.min.js"></script>
				<script src="assets/js/libs/spin.js/spin.min.js"></script>
				<script src="assets/js/libs/autosize/jquery.autosize.min.js"></script>
				<script src="assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
				<script src="assets/js/core/source/App.js"></script>
				<script src="assets/js/core/source/AppNavigation.js"></script>
				<script src="assets/js/core/source/AppOffcanvas.js"></script>
				<script src="assets/js/core/source/AppCard.js"></script>
				<script src="assets/js/core/source/AppForm.js"></script>
				<script src="assets/js/core/source/AppNavSearch.js"></script>
				<script src="assets/js/core/source/AppVendor.js"></script>
				<script src="assets/js/core/demo/Demo.js"></script>
				<!-- END JAVASCRIPT -->
				<script>
					$(document).ready(function(){
						
						$("#login").validate({
			                    rules: {
			                        "username": {
			                            required: true                            
			                        },  
			                        "password": {
			                            required: true,
			                            
			                        }
			                    },
			                    messages:{
			                        username:{
			                            required:"Please enter username."
			                        },
									password:{
			                            required:"Please enter password."
			                        }
			                    }
			                });
					});
				</script>
			</body>
		</html>
