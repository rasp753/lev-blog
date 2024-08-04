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
          "test"
        </h1>
        <p class="body">
          {{ $post->body }}
        </p>
      </article>
    @endforeach
  </div>
</body>

</html>
