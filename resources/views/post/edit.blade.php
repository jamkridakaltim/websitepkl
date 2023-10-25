<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
</head>
<body>
    <h3>Edit Siswa</h3>
    <br>
    <form action="{{ route('post.update', $post->id) }}" method="post">
        @csrf
        @method('PUT')
        Category_id <br>
        <input type="text" name="category_id" value="{{ $post->category_id }}"> <br>
        Tittle <br>
        <input type="text" name="title" value="{{ $post->title }}"> <br>
        Slug <br>
        <input type="text" name="slug" value="{{ $post->slug }}"> <br>
        Tags <br>
        <input type="text" name="tags" value="{{ $post->tags }}"> <br>
        Content <br>
        <input type="text" name="content" value="{{ $post->content }}"> <br>
        Type <br>
        <input type="text" name="type" value="{{ $post->type }}"> <br>
        Type_id <br>
        <input type="text" name="type_id" value="{{ $post->type_id }}"> <br>
        Read <br>
        <input type="text" name="read" value="{{ $post->read }}"> <br>
        Status <br>
        <input type="text" name="status" value="{{ $post->status }}"> <br>
        Published_at <br>
        <input type="date" name="published_at" value="{{ $post->published_at }}"> <br>
        User_id <br>
        <input type="text" name="user_id" value="{{ $post->user_id }}"> <br>
        <button type="submit">Simpan</button>
        <a href="{{ url('post') }}">Kembali</a>
    </form>
</body>
</html>
