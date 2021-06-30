@extends('layouts.app')

@section('content')

<h1>All Posts</h1>

    @if(count($posts) > 1)
    <div class = "card">
    
            <ul class = "list-group list-group-flush">

        @foreach($posts as $post)
<!-- Ukoliko postoje objave, za svaku prikaži naslov -->

          <!--  <div class="row">
               <div class="col-md-4" style="border: 1em">
                 <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
               </div>
           
            
           <div class="col-md-8">
           
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3> 
                <small>Written on {{$post->created_at}}</small>
                
            </div>
        </div>

        -->
      <li class="list-group-item">
        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3> 
        <small>Written on {{$post->created_at}}</small>
        
    </li>
        @endforeach

        </ul>
                
            </div>
    @else

    @endif

@endsection