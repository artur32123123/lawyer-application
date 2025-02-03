<!DOCTYPE html>

<html lang="en">

    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />
    <body>
        <script defer src="{{ asset('js/swiper.js') }}"></script>

    <x-header />
    <section class="motorbike container">
        <div class="motorbike-card ">
            <div class="swiper mySwiperClass">
                <div class="swiper-wrapper">
                    @if ($post->post_images->count() > 0)
                        @foreach ($post->post_images as $key => $image)
                            <div class="swiper-slide">
                                <div class="motorbike-card__img">
                                    <img src="{{ $image->src }}" alt="motorbike">
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No images found.</p>
                    @endif
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Controls -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
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
    <!-- Slider main container -->

    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>

</html>
