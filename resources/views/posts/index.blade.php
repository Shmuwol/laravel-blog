<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <ul>
      @foreach ($posts as $post)
        <li>
          <a href="/posts/{{$post->id}}">{{$post->title}}</a>
          <p>{{$post->content}}</p>
        </li>
      @endforeach
    </ul>

  </body>
</html>
