<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->get();
        $posts = Post::when(request('category_id'), function ($query) { 
            $query->where('category_id', request('category_id'));
        })->latest()->get();

        return view('home', compact('categories', 'posts')); 
    }
}
