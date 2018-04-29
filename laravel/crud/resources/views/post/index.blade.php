@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-1 margin-tb">
            <div class="pull-left" >
                <h2>Posts</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('post.create') }}"> Create New Post</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Type</th>
            <th>Title</th>
            <th>Cotent</th>
            <th width="280px">Operation</th>
        </tr>
    <?php $i = ($posts->currentpage()-1)* $posts->perpage(); ?>
    @foreach ($posts as $post)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ ($post->post_type == 0 ? 'Post' : 'Page') }}</td>
        <td>{{ $post->post_title}}</td>
        <td>{{ $post->post_content}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('post.show',$post->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('post.edit',$post->id) }}">Edit</a>
            
        </td>
    </tr>
    @endforeach
    </table>
    {{ $posts->links() }}
</div>    
@endsection