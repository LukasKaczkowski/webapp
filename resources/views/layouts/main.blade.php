<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content = "ie=edge">
    <title>User Forum: @yield('title')</title>
</head>
<body>
    <nav>
        <span>Home</span> <span>Users</span> <span>My Profile</span> <span>Logout</span>
    </nav>

    <div>
        @yield('content')
    </div>

</body>
</html>