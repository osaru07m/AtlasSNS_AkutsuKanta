<x-login-layout>

  <div id="followListContainer">
    <h2>フォローリスト</h2>
    <div id="followList">
      @foreach (Auth::user()->follows as $user)
      <a href="{{ route('profile.other', ['userId' => $user->id]) }}">
        <img src="{{ asset('images/' . $user->icon_image) }}" alt="{{ $user->username }}さんのアイコン">
      </a>
      @endforeach
    </div>
  </div>

</x-login-layout>
