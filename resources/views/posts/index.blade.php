@extends('layouts.main')

@section('title','All Posts')

@section('content')
    <div class='flex justify-center'>
    <button> <a href="{{route('posts.create')}}">Submit new post </a> </button> 
    </div>
    <p>All Posts on this forum:</p>
    <ul>
        <!--Show each post-->
        @foreach ($posts as $post)
        <li>
            <div class='bg-gray-300 ml-4 mt-8 rounded-2xl pl-2 pt-2'>
                <div class='font-bold'>
                    <a href="{{route('posts.show',$post)}}">{{$post->title}}</a>
                </div>

                {{$post->contents}}

                <div class='mt-4 pb-4'> 
                By: <a href='{{route('users.show',$post->user->id)}}' class='font-bold'> {{$post->user->name}}</a>
                </div>
            </div>
            </li>
        @endforeach
    </ul>
    
    {{$posts->links()}}
@endsection