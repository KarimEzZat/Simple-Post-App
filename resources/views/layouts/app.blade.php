<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>posty</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100">
<nav class="p-3 bg-white flex justify-between mb-4">
    <ul class="flex items-center">
        <li class="p-3"><a href="">Home</a></li>
        <li class="p-3"><a href="{{ route('dashboard') }}">Dashbord</a></li>
        <li class="p-3"><a href="{{ route('posts') }}">Post</a></li>
    </ul>
    <ul class="flex items-center">
        @auth
            <li class="p-3">{{ auth()->user()->username }}</li>
            <li class="p-3">
                <form action="{{ route('logout') }}" method="post" class="inline">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
        @endauth
        @guest
            <li class="p-3"><a href="{{ route('login') }}">Login</a></li>
            <li class="p-3"><a href="{{route('register')}}">Register</a></li>
        @endguest

    </ul>
</nav>

    @yield('content')
</body>
</html>
