<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $path = $request->file('image')->store('images');
        // var_dump($request->file('image'));
        dd($request->file('image'));
        // echo $path;
    }
}