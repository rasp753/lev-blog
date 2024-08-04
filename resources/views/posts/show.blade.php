<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog | {{ $post->title }}</title>
</head>

<body>
  <h1>Blog</h1>
  <article>
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
    <p>作成: {{ $post->created_at }} <br> 更新: {{ $post->updated_at }}</p>
    <a href="/posts">戻る</a>
  </article>
</body>

</html>
