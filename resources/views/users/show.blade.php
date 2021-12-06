@extends('layouts.main')

@section('title','User Profile')

@section('content')
    <h1> Profile of user '{{$profile->name}}'</h1>
    <li>
        <ul>Karma: {{$profile->karma}}
    </li>
@endsection