@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

    <form class="form-horizontal" method="POST" action="{{ route('posts.update', $post->id) }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        {{ csrf_field() }}
        <div class="container">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" placeholder="Title" name="title">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="textarea" class="form-control" placeholder="Description" name="body">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">valider</button>
            </div>



        </div>
    </form>

@endsection
