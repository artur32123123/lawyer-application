<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Posts</title>
</head>
<body>
    <x-header />
    <section class="motorbike container">
        <div class="motorbike container">
            @foreach ($posts as $post)
                <div class="motorbike-card">
                    <h2>{{ $post->title }}</h2>
                    @if (count($post->post_images) >= 1)
                        <img src="{{ asset('storage/' . $post->post_images->first()->src) }}"
                            alt="Описание фотографии">
                    @else
                        <img src="{{ asset('storage/') . '/../images/seeder/default.jpeg' }}" alt="image.png">
                    @endif
                    <p>{{ $post->price . 'р.' }}</p>
                    <a class="post-info" href="{{ route('posts.show', $post->id) }}">Подробнее</a>
                     <div class="admin-actions">
                        @role('content-manager')
                            <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        @endrole
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</body>
</html>
