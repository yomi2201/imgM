<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PathController extends Controller
{
    public function create()
    {
        return view('path.create');
    }

    public function store(Request $request)
    {
        $path = $request->file('image')->store('atc');
        var_dump($request->file('image'));
    }
}