<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTS</title>
</head>
<body>
    <p>{{ $post->article }}</p>
    <p>更新日時：{{ $post->update_time }}</p>
    <p>現在時刻：{{ $today }}</p>
</body>
</html>