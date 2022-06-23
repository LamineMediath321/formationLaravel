@extends('layouts.app')

@section('content')
    <h1 class="text-center">Creer un nouveau post</h1>

    <div class="col-6 mx-auto">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
               <div class="text-danger">{{$error}} </div>
            @endforeach
        @endif
        <form method="POST" action="{{route('post_store')}} ">
            @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="title">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="text">content</label>
                <textarea type="text" class="form-control" id="text" name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection