<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Visitor</title>
</head>
<body>
    <h3>Edit Visitor</h3>
    <br>
    <form action="{{ route('visitor.update', $visitor->id) }}" method="post">
        @csrf
        @method('PUT')
        Ip <br>
        <input type="string" name="ip" value="{{ $visitor->ip }}"> <br>
        Country <br>
        <input type="string" name="country" value="{{ $visitor->country }}"> <br>
        Total <br>
        <input type="string" name="total" value="{{ $visitor->total }}"> <br>
        <button type="submit"> Simpan</button>
        <a href="{{ url('visitor') }}">Kembali</a>
    </form>
</body>
</html>