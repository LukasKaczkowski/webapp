@extends('layouts.main')

@section('title','All Posts')

@section('content')
    <p>All Posts on this forum:</p>
    <ul>
        @foreach ($posts as $post)
        <li><a href="{{route('posts.show',$post)}}">{{$post->title}}</a>, Posted by user: {{$post->user->name}}</li>
        @endforeach
    </ul>
@endsection