<x-login-layout>

  <div id="followerListContainer">
    <h2>フォロワーリスト</h2>
    <div id="followerList">
      @foreach (Auth::user()->followers as $user)
      <a href="{{ route('profile.other', ['userId' => $user->id]) }}">
        <img src="{{ asset('images/' . $user->icon_image) }}" alt="{{ $user->username }}さんのアイコン">
      </a>
      @endforeach
    </div>
  </div>

</x-login-layout>
