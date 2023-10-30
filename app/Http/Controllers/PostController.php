<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::get();
        return view('post.index', compact('post'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $post = new Post;
        $post->category_id = request()->input('category_id');
        $post->title = request()->input('title');
        $post->slug = request()->input('slug');
        $post->tags = request()->input('tags');
        $post->content = request()->input('content');
        $post->type = request()->input('type');
        $post->type_id = request()->input('type_id');
        $post->read = request()->input('read');
        $post->status = request()->input('status');
        $post->published_at = request()->input('published_at');
        $post->user_id = request()->input('user_id');
        $post->save();

        return redirect()->route('post.index');
    }

    public function update($id)
    {
        $post = Post::find($id);
        $post->category_id = request()->input('category_id');
        $post->title = request()->input('title');
        $post->slug = request()->input('slug');
        $post->tags = request()->input('tags');
        $post->content = request()->input('content');
        $post->type = request()->input('type');
        $post->type_id = request()->input('type_id');
        $post->read = request()->input('read');
        $post->status = request()->input('status');
        $post->published_at = request()->input('published_at');
        $post->user_id = request()->input('user_id');
        $post->save();
       
        return redirect()->route('post.index');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit', compact('post'));
    }

    public function destroy($id)
    {
        $post = Post::find($id);

        if($post){
            $post->delete();
            return redirect()->route('post.index');
        }

    }

}