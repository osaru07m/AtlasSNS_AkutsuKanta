<x-login-layout>

    <div id="searchContainer">
        {{ Form::open(['url' => route('search')]) }}
            <div>
                {{ Form::text('keyword', old('keyword'), ['class' => 'input']) }}
                <button type="submit" class="search-button">
                    <img src="{{ asset('images/search.png') }}" alt="検索" style="width: 24px; height: 24px;">
                </button>
            </div>
            @if (isset($keyword))
            <p>検索ワード：{{ $keyword }}</p>
            @endif
        {{ Form::close() }}

</x-login-layout>
