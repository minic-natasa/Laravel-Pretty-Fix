@extends('layouts.app')

@section('content')

<h1>Posts</h1>

    @if(count($posts) > 1)
        @foreach($posts as $post)
<!-- Ukoliko postoje objave, za svaku prikaži naslov -->
            <div class = "card">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3> 
                <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
    @else

    @endif

@endsection