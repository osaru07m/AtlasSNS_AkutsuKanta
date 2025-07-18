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

  <ul id="postList">
    @foreach ($posts as $post)
    <li class="post">
      <a href="{{ route('profile.other', ['userId' => $post->user->id]) }}">
        <img src="{{ asset('images/' . $post->user->icon_image) }}" alt="{{ $post->user->username }}さんのアイコン">
      </a>
      <div class="content">
        <span>{{ $post->user->username }}</span>
        <p>{!! nl2br(e($post->post)) !!}</p>
      </div>

      <div class="meta">
        <span>{{ $post->created_at->format('Y-m-d H:i') }}</span>
      </div>
    </li>
    @endforeach
  </ul>

</x-login-layout>
