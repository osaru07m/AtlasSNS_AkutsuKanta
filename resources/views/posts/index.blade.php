<x-login-layout>

  <div id="postContainer">
    <form action="{{ route('top') }}" method="POST">
      @csrf
      <img src="{{ asset('images/' . Auth::user()->icon_image) }}" alt="{{ Auth::user()->username }}のアイコン">
      <textarea name="post" placeholder="投稿内容を入力してください。"></textarea>
      <button>
        <img src="{{ asset('images/post.png') }}" alt="投稿する">
      </button>
    </form>
  </div>

</x-login-layout>
