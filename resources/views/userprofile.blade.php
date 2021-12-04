@extends('layouts.main')

@section('title','User Profiles')

@section('content')
    @if($username)
        <h1>{{$username}}'s profile</h1>
        <p>Details:</p>
    @else
        <h1>User field cannot be empty</p>
    @endif
@endsection
