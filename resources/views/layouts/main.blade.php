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
        <button class="flex-1 m-4">My Profile</button>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href='{{route('logout')}}' onclick="event.preventDefault(); this.closest('form').submit();">
                <button class="flex-1 m-4">  Logout 
                </button>
            </a>       
        </form>
    </nav>

    <div class='m-8'>
        @yield('content')
    </div>

</body>
</html>