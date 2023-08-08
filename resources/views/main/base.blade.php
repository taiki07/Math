<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>数学広場</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>

    <!--  ヘッダー -->
    <header>
        <p>～数学広場～</p>
    </header>

    <!-- メイン -->
    <body>
        <!-- 子ビュー固有のコードを読み込む -->
        @yield('child')
    </body>

    <!-- フッター  -->
    <footer>
        <p></p>
    </footer>
</html>

<!-- CSS -->
<style>
    * {
        margin: 0;
        padding: 0;
        text-align: center;
        line-height: 50px;
        font-size: 20px;
    }
    header,
    footer {
        color: #000;
        width: 100%;
        font-weight: bold;
    }
    header {
        background-color: rgb(255, 250, 156);
    }
    footer {
        background-color: rgb(161, 178, 253);
        position: absolute;
        bottom: 0;
    }
</style>