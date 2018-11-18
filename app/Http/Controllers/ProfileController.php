<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    /**
     * プロフィール登録フォームの表示
     *
     * @return Response
     */
    public function index()
    {
        $is_image = false;
        if (Storage::disk('local')->exists('public/profile_images/' . Auth::id() . '.jpg')) {
            $is_image = true;
        }
        return view('profile/index', ['is_image' => $is_image]);
    }

    public function store(Request $request)
    {
        $path = $request->file('image')->store('aaa');
        // var_dump($request->file('image'));
        return view('profile.index');
    }
    
}

// use Illuminate\Support\Facades\Auth;

// class ProfileController extends Controller
// {
//     /**
//      * プロフィールの保存
//      *
//      * @param ProfileRequest $request
//      * @return Response
//      */
//     public function store(ProfileRequest $request)
//     {
//         $request->photo->storeAs('public/profile_images', Auth::id() . '.jpg');

//         return redirect('profile')->with('success', '新しいプロフィールを登録しました');
//     }
// }
//     public static function getImagePath()
//     {
//         return 'public/profile_images';
//     }

//     public static function getImageFileName()
//     {
//         return Auth::id() . '.jpg';
//     }