@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Post</div>
                <div class="panel-body">
                  @if (session('status'))
                      <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          {{ session('status') }}
                      </div>
                  @endif
                    {!! Form::model($post, array('url' => '/post/'.$post->id, 'method' => 'patch', 'class' => 'form-horizontal', 'files'=> true)) !!}
                    <form class="form-horizontal" name="post" id="post" method="post" enctype="multipart/form-data" action="{{url('/post')}}" role="form">
                      @include('postform')
                    </form>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection