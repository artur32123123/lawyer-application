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
                    <img src="{{ $post->image }}" alt="Image">
                    <p>{{ $post->price . 'р.' }}</p>
                    <a href="{{ route('posts.show', $post->id) }}">Подробнее</a>
                    <div class="admin-actions">

                        <a href="{{ route('posts.edit', $post->id) }}" >Edit</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
            {{-- {{ $posts->links() }} --}}
        </div>
    </section>

</body>

</html>
