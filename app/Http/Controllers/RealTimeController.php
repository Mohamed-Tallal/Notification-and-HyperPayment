<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class RealTimeController extends Controller
{
    public function index(){
        $posts = Post::get();
        return view('notification',compact('posts'));
    }
}
