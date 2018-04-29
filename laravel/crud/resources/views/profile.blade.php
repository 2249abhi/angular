@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile page</div>

                <div class="panel-body">
                  @if (session('status'))
                      <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          {{ session('status') }}
                      </div>
                  @endif
                    <form class="form-horizontal" name="profile" method="post" enctype="multipart/form-data" action="{{url('/profile')}}" role="form">
                      <!-- <div class="form-group">
                        <label class="col-lg-3 control-label">First name:</label>
                        <div class="col-lg-8">
                          <input class="form-control" type="text" value="Jane">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label">Last name:</label>
                        <div class="col-lg-8">
                          <input class="form-control" type="text" value="Bishop">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label">Company:</label>
                        <div class="col-lg-8">
                          <input class="form-control" type="text" value="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8">
                          <input class="form-control" type="text" value="janesemail@gmail.com">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label">Time Zone:</label>
                        <div class="col-lg-8">
                          <div class="ui-select">
                            <select id="user_time_zone" class="form-control">
                              <option value="Hawaii">(GMT-10:00) Hawaii</option>
                              <option value="Alaska">(GMT-09:00) Alaska</option>
                              <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                              <option value="Arizona">(GMT-07:00) Arizona</option>
                              <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                              <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                              <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                              <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                            </select>
                          </div>
                        </div>
                      </div> -->
                      
                      <div class="form-group">
                        <label class="col-md-3 control-label">Image:</label>
                        <div class="col-md-8">
                          <img src="{{url('/profilepic/'.$user->id.'/'.$user->profile->img_path)}}" class="img-thumbnail" alt="{{$user->name}}">
                          <input type="file" name="avatar">
                          @if ($errors->any())
                            <p class="errors">{{$errors->first('avatar')}}</p>
                          @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Phone:</label>
                        <div class="col-md-8">
                          <input class="form-control" type="text" name="phone" placeholder="Phone Number" value="{{$user->profile->phone}}">
                          @if ($errors->any())
                            <p class="errors">{{$errors->first('phone')}}</p>
                          @endif
                          {{ csrf_field() }}
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Country:</label>
                        <div class="col-md-8">
                          <input class="form-control" type="text" name="country" placeholder="Country" value="{{$user->profile->country}}">
                          @if ($errors->any())
                            <p class="errors">{{$errors->first('country')}}</p>
                          @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">City:</label>
                        <div class="col-md-8">
                          <input class="form-control" type="text" name="city" placeholder="City" value="{{$user->profile->city}}">
                          @if ($errors->any())
                            <p class="errors">{{$errors->first('city')}}</p>
                          @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Address:</label>
                        <div class="col-md-8">
                          <input class="form-control" type="text" name="address" placeholder="Address" value="{{$user->profile->address}}">
                          @if ($errors->any())
                            <p class="errors">{{$errors->first('address')}}</p>
                          @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Pincode:</label>
                        <div class="col-md-8">
                          <input class="form-control" type="text" name="pincode" placeholder="Pincode" value="{{$user->profile->pincode}}">
                          @if ($errors->any())
                            <p class="errors">{{$errors->first('pincode')}}</p>
                          @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                          <input type="submit" class="btn btn-primary" name="submit" value="Save Changes">
                          <span></span>
                          <input type="reset" class="btn btn-default" value="Cancel">
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection