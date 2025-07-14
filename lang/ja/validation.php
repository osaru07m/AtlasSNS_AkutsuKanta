<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attributeを承認してください。',
    'accepted_if' => ':otherが:valueの場合、:attributeを承認してください。',
    'active_url' => ':attributeは有効なURLではありません。',
    'after' => ':attributeには、:dateより後の日付を指定してください。',
    'after_or_equal' => ':attributeには、:date以降の日付を指定してください。',
    'alpha' => ':attributeにはアルファベッドのみ使用できます。',
    'alpha_dash' => ':attributeには英数字・ダッシュ(-)・アンダースコア(_)のみ使用できます。',
    'alpha_num' => ':attributeには英数字のみ使用できます。',
    'array' => ':attributeには配列を指定してください。',
    'boolean' => ':attributeにはtrueかfalseを指定してください。',
    'confirmed' => ':attributeと確認フィールドが一致しません。',
    'date' => ':attributeは有効な日付ではありません。',
    'date_format' => ':attributeの形式は":format"と一致しません。',
    'different' => ':attributeと:otherには異なる内容を指定してください。',
    'digits' => ':attributeは:digits桁で指定してください。',
    'digits_between' => ':attributeは:min桁から:max桁の間で指定してください。',
    'email' => ':attributeは有効なメールアドレス形式で指定してください。',
    'exists' => '選択された:attributeは正しくありません。',
    'file' => ':attributeはファイルでなければなりません。',
    'filled' => ':attributeは必須です。',
    'image' => ':attributeは画像ファイルでなければなりません。',
    'in' => '選択された:attributeは正しくありません。',
    'integer' => ':attributeは整数でなければなりません。',
    'max' => [
        'numeric' => ':attributeは:max以下で指定してください。',
        'file' => ':attributeは:maxキロバイト以下のファイルにしてください。',
        'string' => ':attributeは:max文字以下で指定してください。',
        'array' => ':attributeは:max個以下指定してください。',
    ],
    'min' => [
        'numeric' => ':attributeは:min以上で指定してください。',
        'file' => ':attributeは:minキロバイト以上のファイルにしてください。',
        'string' => ':attributeは:min文字以上で指定してください。',
        'array' => ':attributeは:min個以上指定してください。',
    ],
    'not_regex' => ':attributeの形式が正しくありません。',
    'numeric' => ':attributeは数値で指定してください。',
    'regex' => ':attributeの形式が正しくありません。',
    'required' => ':attributeは必須です。',
    'required_if' => ':otherが:valueの場合、:attributeは必須です。',
    'required_unless' => ':otherが:valuesでない場合、:attributeは必須です。',
    'same' => ':attributeと:otherが一致しません。',
    'string' => ':attributeは文字列で指定してください。',
    'unique' => '指定の:attributeは既に存在します。',
    'url' => ':attributeは有効なURL形式で指定してください。',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'username' => [
            'required' => 'ユーザー名は必須項目です。',
            'min' => 'ユーザー名は2文字以上で入力してください。',
            'max' => 'ユーザー名は12文字以内で入力してください。',
        ],
        'email' => [
            'required' => 'メールアドレスは必須項目です。',
            'email' => 'メールアドレスは正しい形式で入力してください。',
            'unique' => 'このメールアドレスは既に使用されています。',
            'min' => 'メールアドレスは5文字以上で入力してください。',
            'max' => 'メールアドレスは40文字以内で入力してください。',
        ],
        'password' => [
            'required' => 'パスワードは必須項目です。',
            'alpha_num' => 'パスワードは英数字のみ使用できます。',
            'min' => 'パスワードは8文字以上で入力してください。',
            'max' => 'パスワードは20文字以内で入力してください。',
            'confirmed' => 'パスワード確認が一致しません。',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'username' => 'ユーザー名',
        'email' => 'メールアドレス',
        'password' => 'パスワード',
        'password_confirmation' => 'パスワード確認',
    ],

];
