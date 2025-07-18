<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    //
    public function index(){
        $auth = Auth::user();

        // 自分 + フォローしているユーザーのID一覧を取得
        $followIds = $auth->follows()->pluck('followed_id')->toArray();
        $targetUserIds = array_merge([$auth->id], $followIds);

        // 対象ユーザーの投稿を新しい順で取得
        $posts = Post::with('user')->whereIn('user_id', $targetUserIds)->orderBy('created_at', 'desc')->get();

        return view('posts.index', compact('posts'));
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

    public function update($postId, Request $request) {
        $request->validate([
            'post' => 'required|string|max:150',
        ]);

        $post = Post::find($postId);
        $post->post = $request->post;
        $post->update();

        return redirect('top');
    }

    public function destroy($postId)
    {
        $post = Post::find($postId);
        $post->delete();

        return redirect('top');
    }
}
