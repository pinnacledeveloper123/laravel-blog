@extends('main') 
@section('title', '| Edit Post')

@section('css')
  {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
<div class="row">
  {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'data-parsley-validate' => '']) !!}
  <div class="col-md-8">
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', null, array('class' => 'form-control input-lg', 'required' => '', 'maxlength' => '255')) }}
      
        {{ Form::label('body', 'Body:', array('class' => 'top-spacing')) }}
        {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}
  </div>
  <div class="col-md-4">
    <div class="well">
        <dl class="dl-horizontal">
          <dt>Created at</dt>
          <dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
        </dl>
      
        <dl class="dl-horizontal">
          <dt>Update at</dt>
          <dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
        </dl>
      
        <hr>
      
        <div class="row">
          <div class="col-sm-6">{{ Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-block btn-danger')) }}</div>
          <div class="col-sm-6"> {{ Form::submit('Save Changes',  array('class' => 'btn btn-block btn-success')) }}</div>
        </div>
    
    </div>
  
  </div>
</div>


@stop

@section('js')
  {!! Html::script('js/parsley.min.js') !!}
@endsection