<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>
<body>
    <h3>Create Post</h3>
    <br>
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        @method('POST')
        Category_id <br>
        <input type="text" name="category_id"><br>
        Title <br>
        <input type="text" name="title"><br>
        Slug <br>
        <input type="text" name="slug"><br>
        Tags <br>
        <input type="text" name="tags"><br>
        Content <br>
        <input type="text" name="content"><br>
        Type <br>
        <input type="text" name="type"><br>
        Type_id <br>
        <input type="text" name="type_id"><br>
        Read <br>
        <input type="text" name="read"><br>
        Status <br>
        <input type="text" name="status"><br>
        Published_at <br>
        <input type="date" name="published_at"><br>
        User_id <br>
        <input type="text" name="user_id"><br>
        <button type="submit">Simpan</button>
        <a href="{{ url('post') }}">Kembali</a>
    </form>
</body>
</html>