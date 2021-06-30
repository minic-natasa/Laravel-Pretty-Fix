@extends('layouts.app')

@section('content')
    
<h1>{{$post->title}}</h1>



<p>{{$post->body}}</p>

<div class="row">
  <div class="col-md-12">
    <img style="width:50%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
  </div>
</div>
<hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
 
    @if(!Auth::guest())
      @if(Auth::user()->id == $post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
    <br>
    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}

    {{Form::hidden('_method', 'DELETE')}}
    <br>
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

    {!! Form::close() !!}
     @endif
    @endif
    <br>
    <a href="/posts" class="btn btn-default">Go back</a>

@endsection