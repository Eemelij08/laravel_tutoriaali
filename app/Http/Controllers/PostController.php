<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Post;

class PostController extends Controller
{
    public function show(Post $post)
    {
 
        return view('post', compact('post'));
    }
}
