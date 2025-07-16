<x-login-layout>

    <div id="searchContainer">
        {{ Form::open(['url' => route('search')]) }}
            <div>
                {{ Form::text('keyword', old('keyword'), ['class' => 'input']) }}
                <button type="submit" class="search-button">
                    <img src="{{ asset('images/search.png') }}" alt="検索" style="width: 24px; height: 24px;">
                </button>
            </div>
            @if (isset($keyword))
            <p>検索ワード：{{ $keyword }}</p>
            @endif
        {{ Form::close() }}
        <ul id="users">
            @foreach ($users as $user)
            {{ $user->username }}
            <li>
                @php
                $auth = Auth::user();
                $isFollowing = $auth->isFollowing($user->id);
                $isFollowedBy = $auth->isFollowedBy($user->id);
                @endphp

                <div>
                    @if ($isFollowedBy)
                    <p class="is-follower">フォローされています</p>
                    @endif

                    {{-- ボタン分岐 --}}
                    @if (!$isFollowing)
                    <button class="btn follow">フォローする</button>
                    @elseif ($isFollowing)
                    <button class="btn unfollow">フォロー解除</a>
                    @endif
                </div>
            </li>
            @endforeach
        </ul>
    </div>

</x-login-layout>
