@extends('layouts.app')

@section('content')
    <h2>{{$post->title}} </h2>
    <h5>{{$post->content}} </h5
        <span> {{$post->image->path}}</span>
    
       <div>
             <a class="btn btn-light" href="">Editer</a>
             <a class="btn btn-danger" href="{{route('delete_post',['id' => $post->id])}} ">Supprimer</a>
       </div>
       <hr>
       @forelse ($post->comments as $comment)
           <div>
                  <p>#{{$comment->id}} </p>
                  {{$comment->content}} | crée en {{$comment->created_at->format('Y')}}
           </div>
       @empty
           <p>Aucun commentaire </p>
       @endforelse
@endsection