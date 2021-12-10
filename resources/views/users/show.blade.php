@extends('layouts.main')

@section('title','User Profile')

@section('content')
    <h1> Profile of user '<span class="font-bold">{{$profile->name}}</span>'</h1>
    <h1> Posts by user: </h1>
    <ul>  
    @foreach ($profile->posts as $post )
        <li class="font-bold text-decoration: underline ml-4">
            <a href='{{route('posts.show',$post->id)}}''>{{$post->title}} </a>
        </li>
    @endforeach
    </ul>
@endsection