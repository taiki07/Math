<!DOCTYPE HTML>
<x-app-layout>
    <body>
        <h1 class="title">
            {{ $post->name }}
        </h1>
        <div class="content">
            <div class="content__post">
                <p>{{ $post->image }}</p>
                <h4>本文</h4>
                <p>{{ $post->text }}</p>
                <h5>コメント</h5>
                <p>{{ $post->comment }}</p>
                <p><カテゴリー></p>
                <a href="/categories/{{ $post->school->id }}">{{ $post->school->name }}</a>
                <a href="/categories/{{ $post->unit->id }}">{{ $post->unit->name }}</a>
                <a href="/categories/{{ $post->test->id }}">{{ $post->test->name }}</a>
                <p><投稿の作成者></p>
                <a href="/categories/{{ $post->mathuser->id }}">{{ $post->mathuser->name }}</a>
            </div>
        </div>
        <div class="edit">
            <a href="/posts/{{ $post->id }}/edit">edit</a>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</x-app-layout>