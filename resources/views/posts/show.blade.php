@extends('layouts.app')

@section('content')
    
<h1>{{$post->title}}</h1>
<p>{{$post->body}}</p>
<hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
    <br>
    <br>
    <a href="/posts" class="btn btn-default">Go back</a>

@endsection