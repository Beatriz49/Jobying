<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function home()
    {
        $posts = \App\Models\Post::all();
        return view('pages.home', compact('posts'));
    }
}

