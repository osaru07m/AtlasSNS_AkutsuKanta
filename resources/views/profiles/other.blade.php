<?php

/** @var \App\Model\User $user */

?>
<x-login-layout>

    <div id="otherProfile">
        <div>
            <img src="{{ asset('images/' . $user->icon_image) }}">
        </div>
        <div>
            <div>
                <p>ユーザー名</p>
                <p>{{ $user->username }}</p>
            </div>
            <div>
                <p>自己紹介</p>
                <p>{{ $user->bio }}</p>
            </div>
        </div>
        <div>

            @php
                $auth = Auth::user();
                $isFollowing = $auth->isFollowing($user->id);
                $isFollowedBy = $auth->isFollowedBy($user->id);
            @endphp

            @if ($isFollowedBy)
            <p class="is-follower">フォローされています</p>
            @endif

            {{-- ボタン分岐 --}}
            @if (!$isFollowing)
            <a href="{{ route('follow', ['userId' => $user->id]) }}" class="btn follow">フォローする</a>
            @elseif ($isFollowing)
            <a href="{{ route('unfollow', ['userId' => $user->id]) }}" class="btn unfollow">フォロー解除</a>
            @endif

        </div>
    </div>

</x-login-layout>
