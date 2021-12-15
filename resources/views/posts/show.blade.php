@extends('layouts.main')

@section('title','Post')

@section('content')
    <h1 class="text-2xl font-bold"> {{$post->title}}</h1>
    <p> {{$post->contents}}</p>

    <p class="text-sm">Posted by <a href={{route('users.show',$post->user->id)}}> {{$post->user->name}} </a></p>    
    <button> <a href="{{route('posts.edit',$post)}}">Edit Post </a> </button> 
    <h1 class="text-2xl font-bold">Comments:</h1>
    @foreach ($post->comments as $comment )
        
        <h3>{{$comment->message}}</h3>
        <h4>posted by <a href={{route('users.show',$comment->user->id)}}> {{$comment->user->name}} </a></h4>
    @endforeach
    
@endsection