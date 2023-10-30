<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"content="ie=edge">
    <title>Create Visitor</title>
</head>
<body>
    <h3>Create Visitor</h3>
    <br>
    <form action="{{ route('visitor.store') }}" method="post">
        @csrf
        @method('POST')
        Ip <br>
        <input type="string" name="ip"><br>
        Country <br>
        <input type="string" name="country"><br>
        Total <br>
        <input type="string" name="total"><br>
        <button type="submit">Simpan</button>
        <a href="{{ url('visitor') }}">Kembali</a>
    </form>
</body>
</html>