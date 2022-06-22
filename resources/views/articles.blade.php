@extends('layouts.app')

@section('content')
   <div class="col-6 mx-auto">
     <h1>Liste des articles</h1>
    @if ($posts)
        @foreach ($posts as $post)
             <h4><a href="{{route('app_post',['id' => $post->id])}} "><span>title: </span> {{$post->title}} </a></h4>
        @endforeach
        @else
            <p class="text-center alert alert-danger">Aucun posts en base de donnees</p>
    @endif
   </div>
    
@endsection