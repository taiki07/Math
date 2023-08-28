<x-app-layout>
    <x-slot name="header">
        <p>数学広場</p>
    </x-slot>
    <body>
        <h1 class="bg-blue-500 text-green p-4 rounded-lg">Blog Name</h1>
        <a href='/posts/create'>create</a>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->name }}</a>
                    </h2>
                    <p><カテゴリー></p>
                    <a href="/categories/{{ $post->school->id }}">{{ $post->school->name }}</a>
                    <a href="/categories/{{ $post->unit->id }}">{{ $post->unit->name }}</a>
                    <a href="/categories/{{ $post->test->id }}">{{ $post->test->name }}</a>
                    <p><投稿の作成者></p>
                    <a href="/categories/{{ $post->mathuser->id }}">{{ $post->mathuser->name }}</a>
                    <p class='body'>{{ $post->text }}</p>
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $post->id }})">投稿の削除</button> 
                    </form>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <script>
            function deletePost(id) {
                'use strict'
        
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
        <p>ログインユーザー:{{ Auth::user()->name }}</p>
    </body>
</x-app-layout>