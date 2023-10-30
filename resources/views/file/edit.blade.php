<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit File</title>
</head>
<body>
    <h3>Create File</h3>
    <br>
    <form action="{{ route('file.update', $file->id) }}" method="post">
        @csrf 
        @method('PUT')
        Name <br>
        <input type="string" name="name" value="{{ $file->name }}"> <br>
        Type <br>
        <input type="string" name="type" value="{{ $file->type }}"> <br>
        Path <br>
        <input type="string" name="path" value="{{ $file->path }}"> <br>
        Disk <br>
        <input type="string" name="disk" value="{{ $file->disk }}"> <br>
        Fileable_type <br>
        <input type="string" name="fileable_type" value="{{ $file->fileable_type }}"> <br>
        Fileable_id <br>
        <input type="string" name="fileable_id" value="{{ $file->fileable_id }}"> <br>
        Field <br>
        <input type="string" name="field" value="{{ $file->field }}"> <br>
        Meta <br>
        <input type="text" name="meta" value="{{ $file->meta}}"> <br>
        <button type="submit"> Simpan</button>
        <a href="{{ url('file') }}">Kembali</a>
    </form>
</body>
</html>