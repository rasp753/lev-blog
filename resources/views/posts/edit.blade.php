<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog | 記事編集</title>
</head>

<body>
  <h1>Blog</h1>
  <h2>記事編集</h2>
  <form action="/posts/{{ $post->id }}" method="post">
    @csrf
    @method('PUT')
    <div class="title">
      <label for="title">タイトル: </label>
      <input type="text" name="post[title]" id="title"
        value="@if (old('post.title')) {{ old('post.title') }} @else {{ $post->title }} @endif">
      @error('post.title')
        <p>タイトルは必須です。</p>
      @enderror
    </div>
    <div class="body">
      <label for="body">本文</label>
      <textarea name="post[body]" id="body" cols="30" rows="10">
@if (old('post.body'))
{{ old('post.body') }}
@else
{{ $post->body }}
@endif
</textarea>
      @error('post.body')
        <p>本文は必須です</p>
      @enderror
    </div>
    <button type="submit">送信</button>
  </form>
  <a href="/posts">戻る</a>
</body>

</html>
