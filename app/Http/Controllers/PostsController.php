<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    //
    public function index(){
        return view('posts.index');
    }

    public function create(Request $request) {
        $request->validate([
            'post' => ['required', 'string', 'min:1', 'max:150'],
        ]);

        Post::create([
            'user_id' => Auth::user()->id,
            'post' => $request->post,
        ]);

        return redirect('top');
    }
}
