<?php

namespace App\Http\Controllers;

use App\Models\CanvasPost;

class BlogController extends Controller
{
    public function index()
    {
        $posts = CanvasPost::where('published_at', '<>', NULL)->take(4)->get();
        return view('news', compact('posts'));
    }

    public function show(string $slug) {
        $post = CanvasPost::where('slug', $slug)->firstOrFail();

        return view('news.post', compact('post'));
    }
}
