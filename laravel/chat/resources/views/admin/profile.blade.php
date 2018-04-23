@extends('admin.layout')

@section('title', 'Profile')
@section('center-heading', 'Update Profile')

@section('content')
<div class="row">
                <div class="col-md-12">
                    <form action="#"  class="form-horizontal" role="form" id="settings">
                            <!-- BEGIN TABS -->
                            <div class="tabbable tabbable-custom form">
                                <div class="tab-content">
                                    <div class="space20"></div>
                                    <div class="tab-pane active" id="general_settings">
                                        <div class="row profile">
                                        	{!! Form::open(array('url' => 'update','id'=>'profile')) !!}
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <ul class="list-unstyled profile-nav col-md-3">
                                                            <li>
                                                                <img src="assets/img/avatars/avatar4_big.png" alt="avatar 4"/>
                                                            </li>
                                                        </ul>
                                                        <div class="col-md-9">
                                                            <div class="row">
                                                                <div class="col-md-12 profile-info">
                                                                    <h1>John Addams</h1>
                                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet dolore magna aliquam tincidunt erat volutpat.</p>
                                                                    <div class="m-t-10"></div>
                                                                    <ul class="list-unstyled list-inline">
                                                                        <li class="m-r-20"><i class="fa fa-map-marker p-r-5 c-dark"></i> New York</li>
                                                                        <li class="m-r-20"><i class="fa fa-calendar p-r-5 c-purple"></i> July 2012</li>
                                                                        <li class="m-r-20"><i class="fa fa-briefcase p-r-5 c-brown"></i> Webmaster</li>
                                                                        <li class="m-r-20"><i class="fa fa-star p-r-5 c-blue"></i> Moderator</li>
                                                                        <li><i class="fa fa-heart p-r-5 c-red"></i> Swimming</li>
                                                                    </ul>
                                                                    <div class="m-t-20"></div>
                                                                    <a href="profil.html" class="btn btn-dark">See my Profil</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row profile-classic">
                                                    <div class="col-md-12 m-t-20">
                                                        <div class="panel">
                                                            <div class="panel-title line">
                                                                <div class="caption"><i class="fa fa-phone c-gray m-r-10"></i> CONTACT</div>
                                                            </div>
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="control-label c-gray col-md-3">Email:</div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control" id="field-1" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="control-label c-gray col-md-3">Phone:</div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control" id="field-1" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="control-label c-gray col-md-3">Mobile:</div> 
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control" id="field-1" value="">
                                                                    </div>
                                                                </div>
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>         
                                                <div class="col-sm-12">
                                                    <div class="align-center">
                                                    	<input type="submit" name="submit" class="btn btn-primary m-r-20" value="Submit"/>
                                                    </div>
                                                </div> 
                                            </div>

                            				{!! Form::close() !!}
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <!--END TABS-->
                        </form>=
                </div>
            </div>
@endsection