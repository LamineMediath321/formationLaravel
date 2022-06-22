@extends('layouts.app')

@section('content')
    <h2>{{$post->title}} </h2>
    <h5>{{$post->content}} </h5
    
       <div>
             <a class="btn btn-light" href="">Editer</a>
             <a class="btn btn-danger" href="{{route('delete_post',['id' => $post->id])}} ">Supprimer</a>
       </div>
@endsection