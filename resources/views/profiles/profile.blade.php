<x-login-layout>

    <div id="profileContainer">
        <img src="{{ asset('images/' . Auth::user()->icon_image) }}">

        <form action="{{ route('profile') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="username">ユーザー名</label>
                <input type="text" name="username" value="{{ Auth::user()->username }}" id="username" class="input" required minlength="2" maxlength="12">
            </div>
            @error('username')
            <div class="error-message">{{ $message }}</div>
            @enderror

            <div>
                <label for="email">メールアドレス</label>
                <input type="email" name="email" value="{{ Auth::user()->email }}" id="email" class="input" required minlength="5" maxlength="40" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="正しいメールアドレスを入力してください">
            </div>
            @error('email')
            <div class="error-message">{{ $message }}</div>
            @enderror

            <div>
                <label for="password">パスワード</label>
                <input type="password" name="password" id="password" class="input" required minlength="8" maxlength="20" pattern="^[a-zA-Z0-9]+$" title="パスワードは英数字のみで入力してください">
            </div>
            @error('password')
            <div class="error-message">{{ $message }}</div>
            @enderror

            <div>
                <label for="password_confirmation">パスワード確認</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="input" required minlength="8" maxlength="20" pattern="^[a-zA-Z0-9]+$" title="確認用パスワードは英数字のみで入力してください">
            </div>
            @error('password_confirmation')
            <div class="error-message">{{ $message }}</div>
            @enderror

            <div>
                <label for="bio">自己紹介</label>
                <textarea name="bio" value="{{ Auth::user()->bio }}" id="bio" class="input" maxlength="150"></textarea>
            </div>
            @error('bio')
            <div class="error-message">{{ $message }}</div>
            @enderror
            <div>
                <label for="icon_image">アイコン画像</label>
                <input type="file" name="icon_image" id="icon_image" class="input" accept="image/*">
            </div>
            @error('icon_image')
            <div class="error-message">{{ $message }}</div>
            @enderror
            <input type="submit" value="更新">
        </form>
    </div>

</x-login-layout>
