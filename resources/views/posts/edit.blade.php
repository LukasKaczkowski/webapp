@extends('layouts.main')

@section('title','Edit Post')

@section('content')
    <form method='POST' action="{{route('posts.update',$post->id)}}">
        @csrf
        @method('POST')
        <p>Title: <input type="text" name="title"></p>
        <p>Contents: <input type="text" name="contents"></p>
        <input type="submit" value="Submit">
        <a href="{{route('posts.index',auth::id)}}">Cancel</a>
    
    </form>
@endsection