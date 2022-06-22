@extends('layouts.app')

@section('content')
    <h2>{{$post->title}} </h2>
    <h5>{{$post->content}} </h5>
@endsection