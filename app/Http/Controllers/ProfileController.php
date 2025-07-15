<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function profile($userId = null){
        if(is_null($userId)) {
            return view('profiles.profile');
        }
        else {
            $user = User::where('id', $userId)->first();

            return view('profiles.other', compact('user'));
        }
    }
}
