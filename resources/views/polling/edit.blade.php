<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Polling</title>
</head>
<body>
    <h3>Edit Polling</h3>
    <br>
    <form action="{{ route('polling.update', $polling->id) }}" method="post">
        @csrf 
        @method('PUT')
        Type <br>
        <input type="string" name="type" value="{{ $polling->type }}"> <br>
        Parent <br>
        <input type="string" name="parent" value="{{ $polling->parent }}"><br>
        Content <br>
        <input type="string" name="content" value="{{ $polling->content }}"> <br>
        Score <br>
        <input type="string" name="score" value="{{ $polling->score }}"> <br>
        Status <br>
        <input type="string" name="status" value="{{ $polling->status }}"> <br>
        <button type="submit"> Simpan</button>
        <a href="{{ url('polling') }}">Kembali</a>
    </form>
</body>
</html>