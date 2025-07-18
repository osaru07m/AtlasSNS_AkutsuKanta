        <div id="head">
            <h1><a href="{{ route('top') }}"><img src="{{ asset('images/atlas.png') }}"></a></h1>
            <div id="headNav">
                <div id="headNavToggler">
                    <p>{{ Auth::user()->username }}さん</p>
                    <span id="headNavToggleButton"></span>
                </div>
                <ul id="headNavContent" style="display: none;">
                    <li><a href="{{ route('top') }}">ホーム</a></li>
                    <li><a href="{{ route('profile') }}">プロフィール</a></li>
                    <li><a href="{{ route('logout') }}">ログアウト</a></li>
                </ul>
                <img src="{{ asset('images/' . Auth::user()->icon_image) }}" alt="{{ Auth::user()->username }}のアイコン" class="user-icon">
            </div>
        </div>
