<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.create');
    }

    public function store(Request $request)
    {
        $path = $request->file('image')->store('btc');
        var_dump($request->file('image'));
    }
}
