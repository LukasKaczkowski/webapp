<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content = "ie=edge">
    <title>User Forum: @yield('title')</title>
    <link href = "{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body class='bg-gray-200'>
    <nav class='bg-gray-600 flex space-x-4'>
        <a href='{{route('posts.index')}}'> <button class="flex-1 m-4">Home</button> </a>
        <a href='{{route('users.index')}}'> <button class="flex-1 m-4">Users</button> </a>
        
        @if (Auth::id()==null)
            <a href='{{route('login')}}'> <button class="flex-1 m-4">Login</button> </a>
            <a href='{{route('register')}}'> <button class="flex-1 m-4">Register</button> </a>
        @else
        <a href='{{route('users.show',Auth::id())}}'> <button class="flex-1 m-4"> My profile </button> </a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href='{{route('logout')}}' onclick="event.preventDefault(); this.closest('form').submit();">
                <button class="flex-1 m-4">  Logout 
                </button>
            </a>       
        </form>
        <button class="flex-1 m-4 max-w-xs">Welcome {{Auth::user()->name}}</button>
        @endif
        
    </nav>

    <div class='m-8'>
        @yield('content')
    </div>

</body>
</html>