<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $specialPosts = Post::where('is_special', 1)->limit(6)->latest()->get();
        $latestPosts = Post::limit(6)->latest()->get();
        
        return view("index", compact("specialPosts", "latestPosts", "popularPosts"));
    }

    public function categoryPosts($slug)
    {
        $category = Category::where('slug', $slug)->first(); 

        return view("categoryPosts", compact('category'));
    }

    public function postDetail()
    {
        return view("postDetail");
    }

    public function contact()
    {
        return view("contact");
    }
}
