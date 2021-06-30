@extends('layouts.app')

@section('content')

<h1>Edit Post</h1>

   <!-- Izmena objava
   Instaliranje Laravel Collective
   composer require laravelcollective/html -->



   {!! Form::open(['action' => ['App\Http\Controllers\PostsController@store', $post->id], 'method' => 'POST']) !!}
   <div class = "form-group">
    {{Form::label('title', 'Title')}}
    {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    <br>
    {{Form::label('body', 'Body')}}
    {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body'])}}

   </div>
   {{Form::hidden('_method', 'PUT')}} <!-- Za update je metoda PUT, a za create POST -->
   {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    
    {!! Form::close() !!}


@endsection