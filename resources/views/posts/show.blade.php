@extends('layouts.main')

@section('title','Post')

@section('content')
    <h1> {{$post->title}}'</h1>
    <p> {{$post->contents}}</p>

    <p>Posted by {{$post->user->name}} </p>    
    
    <h2>Comments:</h2>
    @foreach ($post->comments as $comment )
        
        <h3>{{$comment->message}}</h3>
        <h4>posted by {{$comment->user->name}}</h4>
    @endforeach
    
@endsection