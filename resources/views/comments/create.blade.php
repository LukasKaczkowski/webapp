@extends('layouts.main')

@section('title','Create Post')

@section('content')
    {{dd()}}
    <form method="POST" action="{{route('comments.store')}}">
        @csrf
        @method('POST')
        <p>Enter your message: <input type="text" name="message"></p>
        <input type="submit" value="Submit">
        <a href="{{route('posts.index')}}">Cancel</a>
    
    </form>
@endsection