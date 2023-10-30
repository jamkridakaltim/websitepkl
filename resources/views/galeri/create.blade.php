<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"content="ie=edge">
    <title>Create Galeri</title>
</head>
<body>
    <h3>Create Galeri</h3>
    <br>
    <form action="{{ route('galeri.store') }}" method="post">
        @csrf
        @method('POST')
        Type <br>
        <input type="string" name="type"><br>
        Caption <br>
        <input type="string" name="caption"><br>
        Slug <br>
        <input type="string" name="slug"><br>
        Link <br>
        <input type="string" name="link"><br>
        Tags <br>
        <input type="string" name="tags"><br>
        Description <br>
        <input type="text" name="description"><br>
        Read <br>
        <input type="string" name="read"><br>
        Featured <br>
        <input type="string" name="featured"><br>
        Status <br>
        <input type="string" name="status"><br>
        <button type="submit">Simpan</button>
        <a href="{{ url('galeri') }}">Kembali</a>
    </form>
</body>
</html>