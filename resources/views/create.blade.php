@extends('layouts.app')

@section('content')
    <h1>Create User</h1>

    <form action="" method="POST">

        {{ csrf_field() }}
        <div class="container">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" placeholder="Nom" name="title">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="textarea" class="form-control" placeholder="Description" name="body">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="textarea" class="form-control" placeholder="Description" name="body">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">create</button>
            </div>



        </div>
    </form>

@endsection
