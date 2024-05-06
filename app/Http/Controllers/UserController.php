<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // home
    public function index()
    {
        $posts = Post::paginate(4);
        $categories = Category::all();
        $feature_post = Post::latest()->first();
        $latest_post = Post::latest('created_at')->take(7)->get();
        return view('frontend.index', compact('posts', 'categories', 'feature_post', 'latest_post'));
    }

    // blog detail
    public function get($id)
    {
        $post = Post::find($id);
        $latest_post = Post::latest('created_at')->take(5)->get();
        return view('frontend.detail', compact('post', 'latest_post'));
    }

    // get by category
    public function getByCategory($id)
    {
        $posts = Post::where('category_id', $id)->paginate(4);
        $categories = Category::all();
        $category = Category::where('id', $id)->first();
        $latest_post = Post::latest('created_at')->take(7)->get();
        return view('frontend.index', compact('posts', 'categories', 'latest_post', 'category'));
    }
}
