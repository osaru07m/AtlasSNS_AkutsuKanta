<x-logout-layout>
  <div id="clear">
    <h2>
      <span>{{ session('username') }}さん</span>
      <span>ようこそ！AtlasSNSへ！</span>
    </h2>
    <div>
      <p>ユーザー登録が完了いたしました。</p>
      <p>早速ログインをしてみましょう！</p>
    </div>
    <p class="btn"><a href="login">ログイン画面へ</a></p>
  </div>
</x-logout-layout>
