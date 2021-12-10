@extends('layouts.main')

@section('title','User Profiles')

@section('content')
    <p class="font-bold">All users signed up to the forum:</p>
    <ul>
        @foreach ($userprofiles as $userprofile)
        <li class="mt-10 pl-5 font-medium rounded-full max-w-xs">- <a href='{{route('users.show',$userprofile->id)}}'>{{$userprofile->name}}</a></li>
        @endforeach
    </ul>
    {{$userprofiles ->links()}}
@endsection