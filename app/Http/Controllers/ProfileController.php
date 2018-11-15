<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * プロフィール登録フォームの表示
     *
     * @return Response
     */
    public function index()
    {
        return view('profile/index');
    }

    /**
     * プロフィールの保存
     *
     * @param ProfileRequest $request
     * @return Response
     */
    public function store(ProfileRequest $request)
    {
        $request->photo->store('profile_images');
        return redirect('profile/index');
    }
}
