<x-login-layout>

    <div id="searchContainer">
        {{ Form::open(['url' => route('search'), 'method' => 'GET']) }}
            <div>
                {{ Form::text('keyword', old('keyword'), ['class' => 'input', 'placeholder' => 'ユーザー名で検索']) }}
                <button type="submit" class="search-button">
                    <img src="{{ asset('images/search.png') }}" alt="検索">
                </button>
            </div>
            @if (isset($keyword))
            <p>検索ワード：{{ $keyword }}</p>
            @endif
        {{ Form::close() }}
        <ul id="users">
            @foreach ($users as $user)
            <li>
                @php
                $auth = Auth::user();
                $isFollowing = $auth->isFollowing($user->id);
                $isFollowedBy = $auth->isFollowedBy($user->id);
                @endphp

                <img src="{{ asset('images/' . $user->icon_image) }}" alt="{{ $user->username }}さんのアイコン">
                <span>{{ $user->username }}</span>

                <div>
                    @if ($isFollowedBy)
                    <p class="is-follower">フォローされています</p>
                    @endif

                    {{-- ボタン分岐 --}}
                    @if (!$isFollowing)
                    <a href="{{ route('follow', ['userId' => $user->id, 'redirect' => route('search')]) }}" class="btn follow">フォローする</a>
                    @elseif ($isFollowing)
                    <a href="{{ route('unfollow', ['userId' => $user->id, 'redirect' => route('search')]) }}" class="btn unfollow">フォロー解除</a>
                    @endif
                </div>
            </li>
            @endforeach
        </ul>
    </div>

</x-login-layout>
