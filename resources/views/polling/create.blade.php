<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Polling</title>
</head>
<body>
    <h3>Create Polling</h3>
    <br>
    <form action="{{ route('polling.store') }}" method="post">
        @csrf
        @method('POST')
        Type <br>
        <input type="string" name="type"> <br>
        Parent <br>
        <input type="string" name="parent"> <br>
        Content <br>
        <input type="string" name="content"> <br>
        Score <br>
        <input type="string" name="score"> <br>
        Status <br>
        <input type="string" name="status"> <br>
        <button type="submit"> Simpan</button>
        <a href="{{ url('polling') }}">Kembali</a>
    </form>
</body>
</html>