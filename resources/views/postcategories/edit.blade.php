<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit postcategories</title>
</head>
<body>
    <h3>Edit Postcategories</h3>
    <br>
    <form action="{{ route('postcategories.update', $postcategories->id) }}" method="post">
        @csrf
        @method('PUT')
        Name <br>
        <input type="string" name="name" value="{{ $postcategories->name }}"> <br>
        Slug <br>
        <input type="string" name="slug" value="{{ $postcategories->slug }}"> <br>
        Status <br>
        <input type="string" name="status" value="{{ $postcategories->status }}"> <br>
        <button type="submit"> Simpan</button>
        <a href="{{ url('postcategories') }}">Kembali</a>
    </form>
</body>
</html>