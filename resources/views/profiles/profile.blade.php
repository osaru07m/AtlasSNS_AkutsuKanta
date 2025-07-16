<x-login-layout>

    <div id="profileContainer">
        <img src="{{ asset('images/' . Auth::user()->icon_image) }}">

        <form action="{{ route('profile') }}" method="post">
            @csrf
            <div>
                <label for="username">ユーザー名</label>
                <input type="text" name="username" id="username" class="input" required>
            </div>
            <div>
                <label for="mail">メールアドレス</label>
                <input type="text" name="mail" id="mail" class="input" required>
            </div>
            <div>
                <label for="password">パスワード</label>
                <input type="password" name="password" id="password" class="input" required>
            </div>
            <div>
                <label for="password_confirmation">パスワード確認</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="input" required>
            </div>
            <div>
                <label for="bio">自己紹介</label>
                <textarea name="bio" id="bio" class="input"></textarea>
            </div>
            <div>
                <label for="icon_image">アイコン画像</label>
                <input type="file" name="icon_image" id="icon_image" class="input" accept="image/*">
            </div>
        </form>
    </div>

</x-login-layout>
