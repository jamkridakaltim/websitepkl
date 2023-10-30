<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Link</title>
</head>
<body>
    <h3>Edit Link</h3>
    <br>
    <form action="{{ route('link.store') }}" method="post">
        @csrf
        @method('POST')
        Category <br>
        <input type="string" name="category" value="{{ $link->category }}"><br>
        Name <br>
        <input type="string" name="name" value="{{ $link->name }}"><br>
        Link <br>
        <input type="string" name="link" value="{{ $link->link }}"><br>
        Icon <br>
        <input type="string" name="icon" value="{{ $link->icon }}"><br>
        Order <br>
        <input type="string" name="order" value="{{ $link->order }}"><br>
        Status <br>
        <input type="string" name="status" value="{{ $link->status }}"><br>
        Lock <br>
        <input type="string" name="lock" value="{{ $link->lock }}"><br>
        <button type="submit">Simpan</button>
        <a href="{{ url('link') }}">Kembali</a>
    </form>
</body>
</html>
