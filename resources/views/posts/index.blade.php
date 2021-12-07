@extends('layouts.main')

@section('title','All Posts')

@section('content')
    <p>All Posts on this forum:</p>
    <ul>
        @foreach ($posts as $post)

        <li>Title:{{$post->title}}, Posted by TODO</li>
            
        @endforeach
    </ul>
@endsection