@extends('layouts.app')
    @section('content')
    <h1>Posts</h1>
        @if(count($posts)>0)
            @foreach($posts as $post)
                <div class="list-group-item">
                    <a href="http://localhost/lsapp/public/posts/{{$post->id}}"><h3>{{$post->title}}</h3></a>
                    <small>Written on {{$post->created_at}}</small>
                </div>
            @endforeach
            {{$posts->links()}}
            @else
            <p>Posts not Founds</p>
        @endif
    @endsection
