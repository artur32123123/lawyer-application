<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{-- <link rel="stylesheet" href="{{ asset('style.css') }}"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<header class="container">
    <div class="logo">
        <img src="{{ asset('images/jpeg/logo.jpeg') }}" alt="Logo">
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{ route('posts.index') }}">Главная</a></li>
            <li><a href="#">О нас</a></li>

            @role('web-developer')
                <li> <a class="add-post" href={{ route('posts.create') }}>Добавить пост</a></li>
            @endrole
        </ul>
    </div>
    <div class="auth">
        <ul class="register">
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Авторизация') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest


        </ul>
    </div>
</header>
