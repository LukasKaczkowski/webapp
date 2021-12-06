@extends('layouts.main')

@section('title','User Profiles')

@section('content')
    <p>All users signed up to the forum:</p>
    <ul>
        @foreach ($userprofiles as $userprofile)
        <li>{{$userprofile->username}}</li>
            
        @endforeach
    </ul>
@endsection