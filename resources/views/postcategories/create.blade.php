<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"content="ie=edge">
    <title>Create Postcategories</title>
</head>
<body>
    <h3>Create Postcategories</h3>
    <br>
    <form action="{{ route('postcategories.store') }}" method="post">
        @csrf
        @method('POST')
        Name <br>
        <input type="string" name="name"><br>
        Slug <br>
        <input type="string" name="slug"><br>
        Status <br>
        <input type="string" name="status"><br>
        <button type="submit">Simpan</button>
        <a href="{{ url('postcategories') }}">Kembali</a>
    </form>
</body>
</html>