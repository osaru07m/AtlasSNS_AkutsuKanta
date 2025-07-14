<x-logout-layout>

    {{ Form::open(['url' => '/register']) }}

    <h2>新規ユーザー登録</h2>

    <div>
        {{ Form::label('username', 'ユーザー名') }}
        {{ Form::text('username', old('username'), [
            'class' => 'input',
            'autocomplete' => 'username',
            'required' => true,
            'minlength' => 2,
            'maxlength' => 12,
        ]) }}
        @error('username')
        <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div>
        {{ Form::label('email', 'メールアドレス') }}
        {{ Form::email('email', old('email'), [
            'class' => 'input',
            'autocomplete' => 'email',
            'required' => true,
            'minlength' => 5,
            'maxlength' => 40,
        ]) }}
        @error('email')
        <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div>
        {{ Form::label('password', 'パスワード') }}
        {{ Form::password('password', [
            'class' => 'input',
            'autocomplete' => 'new-password',
            'required' => true,
            'pattern' => '^[a-zA-Z0-9]+$',
            'minlength' => 8,
            'maxlength' => 20,
            'title' => '英数字のみ、8文字以上20文字以内で入力してください',
        ]) }}
        @error('password')
        <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div>
        {{ Form::label('password_confirmation', 'パスワード確認') }}
        {{ Form::password('password_confirmation', [
            'class' => 'input',
            'required' => true,
            'pattern' => '^[a-zA-Z0-9]+$',
            'minlength' => 8,
            'maxlength' => 20,
            'title' => '英数字のみ、8文字以上20文字以内で入力してください',
        ]) }}
        @error('password_confirmation')
        <div class="error">{{ $message }}</div>
        @enderror
    </div>

    {{ Form::submit('新規登録') }}

    <p><a href="/login">ログイン画面へ戻る</a></p>

    {!! Form::close() !!}

</x-logout-layout>
