<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content = "ie=edge">
    <title>User Forum: @yield('title')</title>
    <link href = "{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body class='bg-gray-400'>
    <nav class='bg-gray-600 flex space-x-4'>
        <button class="flex-1 m-4">Home</button> <button class="flex-1 m-4">Users</button> <button class="flex-1 m-4">My Profile</button> <button class="flex-1 m-4">Logout</button>
    </nav>

    <div class='m-8'>
        @yield('content')
    </div>

</body>
</html>