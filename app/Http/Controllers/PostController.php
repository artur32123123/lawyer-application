<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Models\PostImage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $post = Post::find(4);
        // dd($post->post_images);
        $posts = Post::paginate(10);
        // dd($posts);
        return view('posts.index', compact('posts'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {

        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->price = $request->price;
        $post->descount = $request->descoun;
        $post->save();
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        // dd($post->id);
        PostImage::create([
            'post_id' => $post->id,
            'src' => $imageName,
        ]);
        // $post_image->post_id = $post->id;
        // $post_image->src = $filename;
        // $post_image->save();
        // $post->$post_image->save();
        return redirect()->route('posts.index')
            ->with('success', 'Post created successfully.');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'price' => 'required',
            'descount' => 'required',
        ]);
        $post = Post::find($id);
        $post->update($request->all());
        return redirect()->route('posts.index')
            ->with('success', 'Post updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts.index')
            ->with('success', 'Post deleted successfully');
    }
    // routes functions
    /**
     * Show the form for creating a new post.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }
    /**
     * Show the form for editing the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }
}
