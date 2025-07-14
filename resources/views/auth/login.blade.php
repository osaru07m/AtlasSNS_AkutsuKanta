<x-logout-layout>

    {{ Form::open(['url' => '/login']) }}

        <h2>AtlasSNSへようこそ</h2>

        <div>
            {{ Form::label('email', 'メールアドレス') }}
            {{ Form::text('email', old('email'), ['class' => 'input', 'autocomplete' => 'email', 'required']) }}
            @error('email')
            <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div>
            {{ Form::label('password', 'パスワード') }}
            {{ Form::password('password', ['class' => 'input', 'autocomplete' => 'current-password', 'required']) }}
            @error('password')
            <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        {{ Form::submit('ログイン') }}

        <p><a href="/register">新規ユーザーの方はこちら</a></p>

    {!! Form::close() !!}

</x-logout-layout>
