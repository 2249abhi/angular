@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Post</div>
                <div class="panel-body">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Detail</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>Author</th>
                        <td>{{$post->user->name}}</td>
                      </tr>
                      <tr>
                        <th>Category</th>
                        <td>{{$post->category_id}}</td>
                      </tr>
                      <tr>
                        <th>Type</th>
                        <td>{{ ($post->post_type == 0) ? 'Post' : 'Page' }}</td>
                      </tr>
                      <tr>
                        <th>Status</th>
                        <td>{{ ($post->status == 0) ? 'Inactive' : 'Active'}}</td>
                      </tr>
                      <tr>
                        <th>Title</th>
                        <td>{{$post->post_title}}</td>
                      </tr>
                      <tr>
                        <th>Content</th>
                        <td>{{$post->post_content}}</td>
                      </tr>
                    </tbody>
                </table>
                <input type="button" class="btn btn-info" onclick="window.history.back();" value="Back">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection