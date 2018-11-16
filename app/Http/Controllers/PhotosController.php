<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function create()
    {
        return view('photos.create');
    }
    public function store(Request $request)
    {
    $params = $request->validate([
        'image' => 'required|file|image|max:4000',
    ]);

    $file = $params['image'];

    $image = \Image::make(file_get_contents($file->getRealPath()));
    $image
        ->save(public_path().'/images/'.$file->hashName());

    return redirect('/images/'.$file->hashName());
    }
}
