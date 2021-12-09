@extends('layouts.main')

@section('title','Post')

@section('content')
    <h1> {{$post->title}}</h1>
    <p> {{$post->contents}}</p>

    <p>Posted by <a href={{route('users.show',$post->user->id)}}> {{$post->user->name}} </a></p>    
    
    <h2>Comments:</h2>
    @foreach ($post->comments as $comment )
        
        <h3>{{$comment->message}}</h3>
        <h4>posted by <a href={{route('users.show',$comment->user->id)}}> {{$comment->user->name}} </a></h4>
    @endforeach
    
@endsection