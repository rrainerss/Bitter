<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostImage;

class PostController extends Controller
{
    public function loadPosts() {
        $posts = Post::with('user', 'images')->get();
        return view('home', compact('posts'));
    }
    public function storePost(Request $request)
    {
        $request->validate([
            'text' => 'required|string|max:512',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:4096'
        ]);

        $post = Post::create([
            'text' => $request->text,
            'user_id' => auth()->id()
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('images', 'public');
                PostImage::create([
                    'post_id' => $post->id,
                    'image' => $path
                ]);
            }
        }

        return redirect()->route('home')->with('success', 'Post created successfully.');
    }
}
