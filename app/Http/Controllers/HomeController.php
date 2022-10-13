<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
    $posts = Post::with('user')->get();
    return view('welcome', compact('posts'));
   }
   public function show(Post $post){
        return view('singlePost', compact('post'));
   }
}
