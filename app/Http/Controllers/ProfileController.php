<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function profile($userId = null){
        if(is_null($userId)) {
            return view('profiles.profile');
        }
        elseif($userId == Auth::user()->id) {
            return redirect(route('profile'));
        }
        else {
            $user = User::where('id', $userId)->first();
            $posts = Post::where('user_id', $user->id)->orderBy('created_at', 'DESC')->get();

            return view('profiles.other', compact('user', 'posts'));
        }
    }

    public function update(Request $request) {
        $request->validate([
            'username' => ['required', 'string', 'min:2', 'max:12'],
            'email' => [
                'required',
                'email',
                'min:5',
                'max:40',
                Rule::unique('users', 'email')->ignore(Auth::id()),
            ],
            'password' => ['required', 'alpha_num', 'min:8', 'max:20', 'confirmed'],
            'password_confirmation' => ['required', 'same:password', 'alpha_num', 'min:8', 'max:20'],
            'bio' => ['nullable', 'string', 'max:150'],
            'icon_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,bmp,gif,svg'],
        ],
        [
            'username.required' => 'ユーザー名は必須です。',
            'email.email' => '正しいメールアドレス形式で入力してください。',
            'password.alpha_num' => 'パスワードは英数字のみで入力してください。',
            'password_confirmation.same' => '確認用パスワードが一致しません。',
            'icon_image.image' => '画像ファイルを選択してください。',
            'icon_image.mimes' => '画像は jpg, png, bmp, gif, svg のいずれかで指定してください。',
        ]);

        $user = Auth::user();

        $user->username = $request->username;
        $user->email = $request->email;

        $user->password = Hash::make($request->password);

        if (!empty($request->bio)) {
            $user->bio = $request->bio;
        }

        if ($request->hasFile('icon_image')) {
            $imageFile = $request->file('icon_image');

            // 衝突防止のため、uuid付与
            $imageName = Str::uuid() . '_' . $imageFile->getClientOriginalExtension();
            $imageFile->move(public_path('images'), $imageName);
            $user->icon_image = $imageName;
        }

        $user->update();

        return redirect()->route('top');
    }
}
