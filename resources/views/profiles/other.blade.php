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
            
        </div>
    </div>

</x-login-layout>
