<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
            maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>つぶやきアプリ</title>
</head>

<body>
    <main>
        <h1>つぶやきアプリ</h1>
        <section>
            <h2>投稿フォーム</h2>
            <form action="{{  route('tweet.create') }}" method="post">
                @csrf
                <label for="tweet-content">つぶやき</label>
                <span>140字まで</span>
                <textarea id="tweet-content" type="text" name="tweet" placeholder="つぶやきを入力"></textarea>
                @error('tweet')
                <p style="color: red;">{{ $message }}</p>
                @enderror
                <button type="submit">投稿</button>
            </form>
        </section>
        <section>
            <h2>投稿一覧</h2>
            @foreach($tweets as $tweet)
            <section>
                <p>{{ $tweet->content }} <a href="{{ route('tweet.update.index', ['tweetId' => $tweet->id]) }}">編集</a></p>
            </section>
            @endforeach

        </section>
    </main>
</body>

</html>