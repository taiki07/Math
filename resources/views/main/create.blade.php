<x-app-layout>
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
            <div class="category">
                <h2>カテゴリーの選択</h2>
                <select name="post[school_id]">
                    @foreach($schools as $school)
                        <option value="{{ $school->id }}">{{ $school->name }}</option>
                    @endforeach
                </select>
                <select name="post[unit_id]">
                    @foreach($units as $unit)
                        <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</x-app-layout>