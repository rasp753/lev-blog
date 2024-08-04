<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog | 新規記事作成</title>
</head>

<body>
  <h1>Blog</h1>
  <h2>新規記事作成</h2>
  <form action="/posts" method="post">
    @csrf
    <div class="title">
      <label for="title">タイトル: </label>
      <input type="text" name="post[title]" id="title">
    </div>
    <div class="body">
      <label for="body">本文</label>
      <textarea name="post[body]" id="body" cols="30" rows="10"></textarea>
    </div>
    <button type="submit">送信</button>
  </form>
  <a href="/posts">戻る</a>
</body>

</html>
