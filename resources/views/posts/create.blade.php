<x-header />
<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <h3>Add a Post</h3>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" style="width: 500px;" id="body" name="body" rows="10" required></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" required></input>
                </div>
                <div class="form-group">
                    <label for="descount">descount</label>
                    <input type="number" id="descount" class="form-control" name="descount" required></input>
                </div>
                <div class="form-group">
                    <label for="image">image</label>
                    <input name="image" required id="image" type="file" />
                </div>
                {{-- <img src="{{ asset('storage/photos/' . $post->image) }}" alt="Image"> --}}
                <br>
                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
        </div>
    </div>
</div>
