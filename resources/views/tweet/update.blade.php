<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>つぶやきアプリ</title>
</head>

<body>
    <main>
        <h1>つぶやきを編集</h1>
        <section>
            <a href="{{ route('tweet.index') }}">戻る</a>
            <h2>投稿フォーム</h2>

            @if(session('feedback.success'))
            <p style="color: green">{{ session('feedback.success') }}</p>
            @endif

            <form action="{{ route('tweet.update.put', ['tweetId' => $tweet->id ]) }}" method="post">
                @method('PUT')
                @csrf
                <label for="tweet-content">つぶやき</label>
                <span>140字まで</span>
                <textarea id="tweet-content" type="text" name="tweet"
                    placeholder="つぶやきを入力">{{ $tweet->content }}</textarea>
                @error('tweet')
                <p style="color: red;">{{ $message }}</p>
                @enderror
                <button type="submit">更新</button>
            </form>
        </section>
    </main>
</body>

</html>