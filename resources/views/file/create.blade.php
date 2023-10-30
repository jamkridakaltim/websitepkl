<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create File</title>
</head>
<body>
    <h3>Create File</h3>
    <br>
    <form action="{{ route('file.store') }}" method="post">
        @csrf
        @method('POST')
        Name <br>
        <input type="string" name="name"> <br>
        Type <br>
        <input type="string" name="type"> <br>
        Path <br>
        <input type="string" name="path"> <br>
        Disk <br>
        <input type="string" name="disk"> <br>
        Fileable_type <br>
        <input type="string" name="fileable_type"> <br>
        Fileable_id <br>
        <input type="string" name="fileable_id"> <br>
        Field <br>
        <input type="string" name="field"> <br>
        Meta <br>
        <input type="text" name="meta"> <br>
        <button type="submit"> Simpan</button>
        <a href="{{ url('file') }}">Kembali</a>
    </form>
</body>
</html>