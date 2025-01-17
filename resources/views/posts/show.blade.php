<!DOCTYPE html>

<html lang="en">


<body>

    <x-header />
    <section class="motorbike container">
        <div class="motorbike-card">
            <div class="motorbike-card__img">
                <img src="{{ $post->image }}" alt="motorbike">
            </div>
            <div class="motorbike-card__info">
                <h2 class="desck">Motorbike Information</h2>
                <p class="desck">Model: {{ $post->title }}</p>
                <p class="desck">Description: {{ $post->body }}</p>
                <p class="desck">Price: {{ $post->price . 'р.' }}</p>
                <a href="{{ route('posts.index') }}">Back to home</a>
            </div>
        </div>
    </section>




</body>

</html>
