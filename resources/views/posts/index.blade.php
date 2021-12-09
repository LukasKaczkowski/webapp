@extends('layouts.main')

@section('title','All Posts')

@section('content')
    <p>All Posts on this forum:</p>
    <ul>
        @foreach ($posts as $post)
        <li>
            <div class='bg-gray-300 ml-4 mt-8 rounded-2xl'>
                <div class='font-bold pl-2 pt-2'>
                    <a href="{{route('posts.show',$post)}}">{{$post->title}}</a>
                </div>

                <div class='mt-4 p-2'> 
                By: <a href='{{route('users.show',$post->user->id)}}' class='font-bold'> {{$post->user->name}}</a>
                </div>
            </div>
            </li>
        @endforeach
    </ul>
@endsection