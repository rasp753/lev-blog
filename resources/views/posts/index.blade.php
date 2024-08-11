<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>
</head>

<body>
  <div>
    @foreach ($questions as $question)
      <div>
        <a href="https://teratail.com/questions/{{ $question['id'] }}">
          {{ $question['title'] }}
        </a>
      </div>
    @endforeach
  </div>
  <h1>Blog</h1>
  <h2><a href="/posts/create">新規記事作成</a></h2>
  <h2>記事一覧</h2>
  <div class="posts">
    @foreach ($posts as $post)
      <article class="post">
        <h3 class="title">
          <a href=/posts/{{ $post->id }}>
            {{ $post->title }}
          </a>
        </h3>
        <p class="category">
          カテゴリー: <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        </p>
        <p class="body">
          {{ $post->body }}
        </p>
        <p>最終更新: {{ $post->updated_at }} <br>
          <a href="/posts/{{ $post->id }}/edit">編集</a>
          <a href="#" onclick="deletePostAfterConfirmed({{ $post->id }})">削除</a>
        <form action="/posts/{{ $post->id }}" method="post" id="post_{{ $post->id }}">
          @csrf
          @method('DELETE')
        </form>
        </p>
      </article>
    @endforeach
  </div>
  <div class="Pagination">
    {{ $posts->links() }}
  </div>

  <div>
    <p>{{ Auth::user()->name }}</p>
  </div>



  <script>
    function deletePostAfterConfirmed(postId) {
      if (window.confirm("本当に記事を削除しますか？")) {
        document.querySelector(`#post_${postId}`).submit();
      }
    }
  </script>
</body>

</html>
