<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // auth's follows
    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'following_id', 'followed_id');
    }

    // auth's follower
    public function followers()
    {
        return $this->belongsToMany(User::class, 'follows', 'followed_id', 'following_id');
    }

    public function isFollowing($id) {
        return $this->follows()->where('followed_id', $id)->exists();
    }

    public function isFollowedBy($id) {
        return $this->followers()->where('following_id', $id)->exists();
    }

    public function followsCount() {
        return $this->follows()->count();
    }

    public function followersCount() {
        return $this->followers()->count();
    }

    // フォロー
    public function follow($userId)
    {
        // 自分自身はフォロー不可
        if ($this->id == $userId) return false;

        // フォローしていなければフォロー可能
        if (!$this->isFollowing($userId)) {
            $this->follows()->attach($userId);

            return true;
        }

        return false;
    }

    // フォロー解除する
    public function unfollow($userId)
    {
        $this->follows()->detach($userId);

        return true;
    }
}
