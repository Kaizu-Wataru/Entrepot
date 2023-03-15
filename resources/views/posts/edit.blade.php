<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1 class='title'>編集画面</h1>
        <div class="content"></div>
         <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="content_title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル"value="{{ $post->title }}"/>
                <p class="title_error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div class="content_body">
                <h2>本文</h2>
                <input type='text' name='post[body]' value="{{ $post->body }}">
                <textarea name="post[body]" placeholder="今日も一日お疲れ様でした。">{{ $post->body }}</textarea>
                <p class="body_error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="保存"/>
         </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>