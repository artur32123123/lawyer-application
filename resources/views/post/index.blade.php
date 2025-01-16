<!DOCTYPE html>

<html lang="en">


<body>

    <x-header />
    <div class="motorbike container">
        @foreach ($posts as $post)
            <div class="motorbike-card">
                <h2>{{ $post->title }}</h2>
                <img src="{{ $post->image }}" alt="Image">

                <p>{{ $post->price . 'р.'}}</p>
                <a href="{{ route('post.show', $post->id) }}">Подробнее</a>
            </div>
        @endforeach
        {{ $posts->links() }}
    </div>
</body>

</html>
