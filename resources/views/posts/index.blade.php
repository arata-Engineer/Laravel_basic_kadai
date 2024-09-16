<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿一覧</title>
</head>

<body>
    <h1>投稿一覧</h1>

    <ul>
        @foreach ($posts as $post)
        <li>
            <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
        </li>
        @endforeach
    </ul>

    <a href="{{ route('posts.create') }}">新規作成</a>
</body>

</html>