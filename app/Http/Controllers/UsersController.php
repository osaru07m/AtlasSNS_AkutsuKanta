<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //
    public function search(Request $request){

        $keyword = $request->input('keyword');

        if(!is_null($keyword)) {
            $users = User::where('username', 'like', "%{$keyword}%")->where('id', '!=', Auth::user()->id)->get();

            return view('users.search', compact('keyword', 'users'));
        }
        else {
            $users = User::where('id', '!=', Auth::user()->id)->get();

            return view('users.search', compact('users'));
        }
    }
}
