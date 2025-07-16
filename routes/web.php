<?php

use App\Http\Controllers\FollowsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



require __DIR__ . '/auth.php';

Route::middleware('auth')->group(function() {

    Route::get('top', [PostsController::class, 'index'])->name('top');

    Route::get('profile', [ProfileController::class, 'profile'])->name('profile');
    Route::post('profile', [ProfileController::class, 'update']);

    Route::get('{userId}/profile', [ProfileController::class, 'profile'])->name('profile.other');

    Route::get('search', [UsersController::class, 'search'])->name('search');

    Route::get('follow-list', [FollowsController::class, 'followList'])->name('followList');
    Route::get('{userId}/follow', [FollowsController::class, 'follow'])->name('follow');

    Route::get('follower-list', [FollowsController::class, 'followerList'])->name('followerList');

    Route::get('{userId}/unfollow', [FollowsController::class, 'unfollow'])->name('unfollow');
});
