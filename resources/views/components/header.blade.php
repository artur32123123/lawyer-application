<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
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
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li>          <a class="add-post" href={{ route('posts.create') }}>Добавить пост</a></li>
        </ul>
    </div>
    <div class="auth">
        <ul>
            <li><a href="#">Авторизация</a></li>
            <li><a href="#">Регистрация</a></li>
        </ul>
    </div>
</header>
