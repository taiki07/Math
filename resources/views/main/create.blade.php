<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>数学広場</title>
    </head>
    <body>
        <h1>投稿の作成</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>投稿の題名</h2>
                <input type="text" name="post[name]" placeholder="投稿名" value="{{ old('post.name') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.name') }}</p>
            </div>
            <div class="body">
                <h2>内容についての説明</h2>
                <textarea name="post[text]" placeholder="よろしくお願いします。">{{ old('post.text') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.text') }}</p>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>