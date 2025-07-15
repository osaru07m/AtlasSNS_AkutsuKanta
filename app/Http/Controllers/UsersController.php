<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function search(Request $request){

        $keyword = $request->input('keyword');

        if(!is_null($keyword)) {
            return view('users.search', compact('keyword'));
        }
        else {
            return view('users.search');
        }
    }
}
