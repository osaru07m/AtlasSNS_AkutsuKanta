<x-login-layout>

  <div id="followerListContainer">
    <h2>フォロワーリスト</h2>
    <div id="followerList">
      @foreach (Auth::user()->followers as $user)
      <img src="{{ asset('images/' . $user->icon_image) }}" alt="{{ $user->username }}さんのアイコン">
      @endforeach
    </div>
  </div>

</x-login-layout>
