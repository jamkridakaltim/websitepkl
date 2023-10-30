<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit galeri</title>
</head>
<body>
    <h3>Edit Galeri</h3>
    <br>
    <form action="{{ route('galeri.update', $galeri->id) }}" method="post">
        @csrf
        @method('PUT')
        Type <br>
        <input type="string" name="type" value="{{ $galeri->type }}"> <br>
        Caption <br>
        <input type="string" name="caption" value="{{ $galeri->caption }}"> <br>
        Slug <br>
        <input type="string" name="slug" value="{{ $galeri->slug }}"> <br>
        Link <br>
        <input type="string" name="link" value="{{ $galeri->link }}"> <br>
        Tags <br>
        <input type="string" name="tags" value="{{ $galeri->tags }}"> <br>
        Description <br>
        <input type="text" name="description" value="{{ $galeri->description }}"> <br>
        Read <br>
        <input type="string" name="read" value="{{ $galeri->read }}"> <br>
        Featured <br>
        <input type="string" name="featured" value="{{ $galeri->featured }}"> <br>
        Status <br>
        <input type="string" name="status" value="{{ $galeri->status }}"> <br>
        <button type="submit"> Simpan</button>
        <a href="{{ url('galeri') }}">Kembali</a>
    </form>
</body>
</html>