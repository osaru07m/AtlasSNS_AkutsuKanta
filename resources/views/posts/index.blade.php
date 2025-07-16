<x-login-layout>

  <div id="postContainer">
    <form action="{{ route('top') }}" method="POST">
      @csrf
      <div class="icon">
        <img src="{{ asset('images/' . Auth::user()->icon_image) }}" alt="{{ Auth::user()->username }}のアイコン">
      </div>
      <textarea name="post" placeholder="投稿内容を入力してください。" required maxlength="150"></textarea>
      <div class="btnBox">
        <button class="btn">
          <img src="{{ asset('images/post.png') }}" alt="投稿する">
        </button>
      </div>
    </form>

  {{-- {{ dd($posts) }} --}}

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
        <div class="actionBtns">
          <button class="deleteBtnTrigger">
            <span class="icon">
              <img src="{{ asset('images/trash.png') }}" class="normal">
              <img src="{{ asset('images/trash-h.png') }}" class="hover">
            </span>
          </button>
        </div>
      </div>

      <div class="modal deleteModal">
        <div class="modalContent">
          <div class="post">
            <img src="{{ asset('images/' . $post->user->icon_image) }}" alt="{{ $post->user->username }}さんのアイコン">
            <div class="content">
              <span>{{ $post->user->username }}</span>
              <p>{{ $post->post }}</p>
            </div>
            <div class="meta">
              <span>{{ $post->created_at->format('Y-m-d H:i') }}</span>
            </div>
          </div>
          <p>この投稿を削除します。よろしいでしょうか？</p>
          <div class="modalBtns">
            <a href="{{ route('postDelete', ['postId' => $post->id]) }}" class="confirmDeleteBtn">削除</a>
            <button class="cancelBtn">キャンセル</button>
          </div>
        </div>
      </div>
    </li>

    @endforeach
    </ul>

  </div>

</x-login-layout>
