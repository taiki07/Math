<!DOCTYPE HTML>
<x-app-layout>
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='content__title'>
                    <h2>投稿の題名</h2>
                    <input type='text' name='post[name]' value="{{ $post->name }}">
                </div>
                <div class='content__body'>
                    <h2>内容についての説明</h2>
                    <input type='text' name='post[text]' value="{{ $post->text }}">
                </div>
                <input type="submit" value="保存">
            </form>
        </div>
    </body>
</x-app-layout>