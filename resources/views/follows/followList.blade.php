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

  <ul id="postList">
    @foreach ($posts as $post)
    <li class="post">
      <img src="{{ asset('images/' . $post->user->icon_image) }}" alt="{{ $post->user->username }}さんのアイコン">

      <div class="content">
        <span>{{ $post->user->username }}</span>
        <p>{{ $post->post }}</p>
      </div>

      <div class="meta">
        <span>{{ $post->created_at->format('Y-m-d H:i') }}</span>
      </div>
    </li>
    @endforeach
  </ul>

</x-login-layout>
