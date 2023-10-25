<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Agenda</title>
</head>
<body>
    <h3>Edit Agenda</h3>
    <br>
    <form action="{{ route('agenda.update', $agenda->id) }}" method="post">
        @csrf
        @method('PUT')
        Date <br>
        <input type="date" name="date" value="{{ $agenda->date }}"> <br>
        Time <br>
        <input type="time" name="time" value="{{ $agenda->time }}"><br>
        Caption <br>
        <input type="string" name="caption" value="{{ $agenda->caption }}"> <br>
        Deskripsi <br>
        <input type="text" name="deskripsi" value="{{ $agenda->deskripsi }}"> <br>
        Lokasi <br>
        <input type="string" name="lokasi" value="{{ $agenda->lokasi }}"> <br>
        <button type="submit"> Simpan</button>
        <a href="{{ url('agenda') }}">Kembali</a>
    </form>
</body>
</html>