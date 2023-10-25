<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Link</title>
</head>
<body>
    <h3>Create Link</h3>
    <br>
    <form action="{{ route('link.store') }}" method="post">
        @csrf
        @method('POST')
        Category <br>
        <input type="string" name="category"><br>
        Name <br>
        <input type="string" name="name"><br>
        Link <br>
        <input type="string" name="link"><br>
        Icon <br>
        <input type="string" name="icon"><br>
        Order <br>
        <input type="string" name="order"><br>
        Status <br>
        <input type="string" name="status"><br>
        Lock <br>
        <input type="string" name="lock"><br>
        <button type="submit">Simpan</button>
        <a href="{{ url('link') }}">Kembali</a>
    </form>
</body>
</html>
        