<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
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

            return view('profiles.other', compact('user'));
        }
    }

    public function update(Request $request) {
        $request->validate([
            'username' => ['required', 'string', 'min:2', 'max:12'],
            'mail' => [
                'required',
                'email',
                'min:5',
                'max:40',
                Rule::unique('users', 'email')->ignore(Auth::id()),
            ],
            'password' => ['required', 'alpha_num', 'min:8', 'max:20'],
            'password_confirmation' => ['required', 'same:password', 'alpha_num', 'min:8', 'max:20'],
            'bio' => ['nullable', 'string', 'max:150'],
            'icon_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,bmp,gif,svg'],
        ],
        [
            'username.required' => 'ユーザー名は必須です。',
            'mail.email' => '正しいメールアドレス形式で入力してください。',
            'password.alpha_num' => 'パスワードは英数字のみで入力してください。',
            'password_confirmation.same' => '確認用パスワードが一致しません。',
            'icon_image.image' => '画像ファイルを選択してください。',
            'icon_image.mimes' => '画像は jpg, png, bmp, gif, svg のいずれかで指定してください。',
        ]);
    }
}
