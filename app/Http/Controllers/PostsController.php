<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view("posts.index",['posts'=> $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $path = $request->file('image')->store('public');
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->path = $path;
        $post->save();
        // $post->path =  $request['image']->getClientost->titleOriginalName();
        // var_dump($request->file('image'));
        // dd($request->file('image'));
        return view('posts.store');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', ['post' => $post]);
    }

    public function edit(Request $request,$id)
    {
        $post = Post::find($id);
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request)
    {
        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
 
        return view('posts.update');
    }

    public function delete(Request $request)
    {
        Post::destroy($request->id);
        return view('posts.delete');
    }

}