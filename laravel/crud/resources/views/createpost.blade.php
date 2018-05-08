@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Post</div>
                <div class="panel-body">
                  @if (session('status'))
                      <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          {{ session('status') }}
                      </div>
                  @endif
                    <div class="alert alert-success" style="display:none">Post Created Successfully.</div>
                    <form class="form-horizontal" name="postform" id="postform" method="post"  enctype="multipart/form-data"  role="form">
                      @include('postform')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection