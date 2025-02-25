<?php

namespace App\Services;

use App\Models\Post;
use App\Models\PostImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PostService
{
    public function createPost(Request $request): Post
    {
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->price = $request->price;
        $post->descount = $request->descoun;
        $post->save();
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        PostImage::create([
            'post_id' => $post->id,
            'src' => $imageName,
        ]);

        return $post;
    }
}
