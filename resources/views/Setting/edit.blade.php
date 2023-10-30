<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Setting</title>
</head>
<body>
    <h3>Edit Setting</h3>
    <br>
    <form action="{{ route('setting.update', $setting->id )}}" method="post">
        @csrf
        @method('PUT')
        Key <br>
        <input type="text" name="key" value="{{ $setting->key }}"> <br>
        Value <br>
        <input type="text" name="value" value="{{ $setting->value }}"> <br>
        <button type="submit"> Simpan </button>
        <a href=" {{url('menu') }}">Kembali</a>
        </form>
</body>
</html>