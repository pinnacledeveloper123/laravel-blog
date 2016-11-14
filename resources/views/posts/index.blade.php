@extends('main')

@section('title', '| All Posts')

@section('content')

  <div class="row">
    <div class="col-md-10">
      <h1>
        All Post
      </h1>
    </div>
    <div class="col-md-2">
      {!! Html::linkRoute('posts.create', 'Create New Post', array(), array('class' => 'btn btn-block btn-primary btn-h1-spacing')) !!}
    </div>
    
    <div class="col-md-12">
      <hr>
    </div>
  </div>

  <div class="row">
    
    <table class="table">
    
      <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Body</th>
          <th>Created At</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      
      <tbody>
          @foreach ($posts as $post)
              <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ str_limit($post->body, 50) }} </td>
                <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
                <td><a href="{{ route('posts.show', $post->slug) }}" class="btn btn-default btn-sm">View</a>
                <a href="{{ route('posts.edit', $post->slug) }}" class="btn btn-default btn-sm">Edit</a></td>
              </tr>
          @endforeach
      
      
      </tbody>
    
    </table>
    
    <div class="text-center">
      {!! $posts->links() !!}
    </div>

  </div>

@stop
