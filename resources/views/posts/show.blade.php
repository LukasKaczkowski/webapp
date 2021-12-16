@extends('layouts.main')

@section('title','Post')

@section('content')

    <div class='bg-gray-300 rounded-2xl mt-4 mb-4 pl-2 pt-2'>
    <h1 class="text-2xl font-bold"> {{$post->title}}</h1>
    <p> {{$post->contents}}</p>

    <p class="text-sm">Posted by <a class='font-bold' href={{route('users.show',$post->user->id)}}> {{$post->user->name}} </a></p>

    <!--Edit post-->
    <button class="mt-4"> <a href="{{route('posts.edit',$post)}}">Edit Post </a> </button> 
    <form method="POST" action="{{route('posts.destroy',['post'=>$post])}}">
        @csrf
        @method('DELETE')
        <button type="submit" class="mt-4">Delete post</button>
    </form>
    </div>
    <h1 class="text-2xl font-bold">Comments:</h1>
    
    <!--Show each comment-->
    @foreach ($post->comments as $comment )
        <div class='bg-gray-300 rounded-2xl mt-4 mb-4 ml-4 pl-2'>
        <h3 class="mt-6">{{$comment->message}}</h3>
        <h4 class="pb-2">Posted by <a class='font-bold' href={{route('users.show',$comment->user->id)}}> {{$comment->user->name}} </a></h4>
        <form method="POST" action="{{route('comments.destroy',$comment->id)}}}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="mt-4">Delete comment</button>
        </form>
        </div>
    @endforeach
    
    <!--Adding new comment-->
    <p>Add new comment!</p>
    <form method="POST" action="{{route('comments.store')}}">
        @csrf
        
        <p>Contents: <input type="text" name="message"></p>
        <input type="hidden" name="post_id" value="{{$post->id}}">
        <input type="submit" value="Submit" class="bg-indigo-400 hover:bg-indigo-700 hover:text-gray-100 text-2xl rounded py-1 px-2 mt-4">
        
    </form>
@endsection