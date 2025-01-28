<x-header />
<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="">
            <h3>Update Post</h3>
            <form action="{{ route('posts.update', $post->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" style="width: 500px;" id="body" name="body" rows="10" required>{{ $post->body }}</textarea>
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" value="{{ $post->price }}" id="price" name="price"
                        required></input>
                </div>
                <div class="form-group">
                    <label for="descount">descount</label>
                    <input type="number" id="descount" class="form-control" value="{{ $post->descount }}" name="descount"
                        required></input>
                </div>
                <button type="submit" class="btn mt-3 submit btn-primary">Update Post</button>
            </form>
        </div>
    </div>
</div>
