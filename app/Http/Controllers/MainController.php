<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $specialPosts = Post::where('is_special', 1)->limit(6)->latest()->get();
        return view("index", compact("specialPosts"));
    }

    public function categoryPosts()
    {
        return view("categoryPosts");
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
