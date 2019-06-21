@extends('layouts.app')
@section('content')
    <h1>{{$post->title}}</h1>
    <div class="list-group-item">
        {{$post->body}}
    </div>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="http://localhost/lsapp/public/posts" class="btn btn-info" ><h3>retour</h3></a>
    <a href="http://localhost/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-success" ><h3>modifier</h3></a>

    </div>
@endsection
