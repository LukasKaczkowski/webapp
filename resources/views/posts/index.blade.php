@extends('layouts.main')

@section('title','All Posts')

@section('content')
    <p>All Posts on this forum:</p>
    <ul>
        @foreach ($posts as $post)
        <li>
            <div class='post'>
                <div class='post-title'>
                    <a href="{{route('posts.show',$post)}}">{{$post->title}}</a>
                </div>

                <div class='post-user'> 
                By: {{$post->user->name}}
                </div>
            </div>
            </li>
        @endforeach
    </ul>
@endsection