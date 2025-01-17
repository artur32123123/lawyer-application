<!DOCTYPE html>
<html lang="en">
<body>
    <x-header />
    <form action="{{ route('post.update', $post->id) }}" method="post">
        @csrf
        <input type="text" name="title" value="{{ $post->title }}">
        <input type="text" name="body" value="{{ $post->body }}">
        <input type="text" name="price" value="{{ $post->price }}">
        <button type="submit">Update</button>
    </form>
</body>
</html>
