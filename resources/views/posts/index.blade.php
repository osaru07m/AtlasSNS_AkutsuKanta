<x-login-layout>

  <div id="postContainer">
    <form action="{{ route('top') }}" method="POST">
      @csrf
      <img src="{{ asset('images/' . Auth::user()->icon_image) }}" alt="{{ Auth::user()->username }}のアイコン">
      <textarea name="post" placeholder="投稿内容を入力してください。" required maxlength="150"></textarea>
      <button>
        <img src="{{ asset('images/post.png') }}" alt="投稿する">
      </button>
    </form>
  </div>

  {{-- {{ dd($posts) }} --}}

  <ul id="postList">
  @foreach ($posts as $post)
  <li>
    <img src="{{ asset('images/' . $post->user->icon_image) }}" alt="{{ $post->user->username }}さんのアイコン">
    <div>
      <span>{{ $post->user->username }}</span>
      <p>{{ $post->post }}</p>
    </div>
    <span>{{ $post->created_at->format('Y-m-d H:i') }}</span>
  </li>
  @endforeach
  </ul>

</x-login-layout>
