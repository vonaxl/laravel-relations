<?php

namespace App\Http\Controllers;
use App\Tag;
use App\Post;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function post($id)
    {
        $post = Post::findOrFail($id);
        dd($id);
    }
    public function show($id)
    {
        $tag = Tag::findOrFail($id);
        // dd($tag->id);
        return view('pages.tagShow',compact('tag'));
    }
}
