@extends('layouts.main')

@section('title','Create Post')

@section('content')
    <!--Create new post-->
    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        @method('POST')
        <p>Title: <input type="text" name="title"></p>
        <p>Contents: <input type="text" name="contents"></p>
        <input type="submit" value="Submit">
        <a href="{{route('posts.index')}}">Cancel</a>
    
    </form>
@endsection