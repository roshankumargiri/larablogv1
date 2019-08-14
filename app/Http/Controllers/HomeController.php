<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogs = Blog::with('category','user')->get();
        // return $blogs;

        // return $user_id;
        // exit();


        return view('blog.index',compact('blogs'));
    }
}
