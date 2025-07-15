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
    public function follow($userId)
    {
        Auth::user()->follow($userId);

        return back();
    }

    // フォロー解除する
    public function unfollow($userId)
    {
        Auth::user()->unfollow($userId);

        return back();
    }
}
