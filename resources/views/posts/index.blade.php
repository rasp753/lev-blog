<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>
</head>

<body>
  <h1>Blog Page</h1>
  <div class="posts">
    @foreach ($posts as $post)
      <article class="post">
        <h1 class="title">
          {{ $post->title }}
        </h1>
        <p class="body">
          {{ $post->body }}
        </p>
        <p>最終更新: {{ $post->updated_at }}</p>
      </article>
    @endforeach
  </div>
  <div class="pagination">
    {{ $posts->links() }}
  </div>
</body>

</html>
