<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowsController extends Controller
{
    //
    public function followList(){
        return view('follows.followList');
    }
    public function followerList(){
        return view('follows.followerList');
    }

    // フォローする
    public function follow($userId, Request $request)
    {
        Auth::user()->follow($userId);

        $redirect = $request->redirect;

        if (!is_null($redirect)) {
            return redirect($redirect);
        }

        return back();
    }

    // フォロー解除する
    public function unfollow($userId, Request $request)
    {
        Auth::user()->unfollow($userId);

        $redirect = $request->redirect;

        if (!is_null($redirect)) {
            return redirect($redirect);
        }

        return back();
    }
}
