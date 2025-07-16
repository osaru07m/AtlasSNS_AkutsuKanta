<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowsController extends Controller
{
    //
    public function followList(){
        $follows = Auth::user()->follows()->pluck('followed_id')->toArray();
        $posts = Post::whereIn('user_id', $follows)->orderBy('created_at', 'DESC')->get();

        return view('follows.followList', compact('posts'));
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
