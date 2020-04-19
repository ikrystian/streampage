<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Best rating app</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ route('login') }}">Login</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
        @endif
        @endauth
    </div>
    @endif

    <ul class="desktop-list">
        <li>
            <a href="/desktop/1">
                <img
                    src="https://bpcoders.nazwa.pl/images/1.jpg"
                    alt="">
                <footer>
                    <span>Krystian</span>
                    <span>6666</span>
                </footer>
            </a>
        </li>
        <li>
            <a href="#">
                <img
                    src="https://bpcoders.nazwa.pl/images/2.jpg"
                    alt="">
            </a>
        </li>
        <li>
            <a href="">
                <img src="https://bpcoders.nazwa.pl/images/3.jpg" alt="">
            </a>
        </li>
    </ul>

</div>
</body>
</html>
