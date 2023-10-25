<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Setting</title>
</head>
<body>
    <h3>create Setting</h3>
    <br>
    <form action="{{ route('setting.store')}}" method="post">
    @csrf
    @method('POST')
    Key <br>
    <input type="text" name="key"> <br>
    Value <br>
    <textarea name="value"></textarea> <br>
    <button type="submit"> Simpan </button>
    <a href=" {{url('setting') }}">Kembali</a>
    </form>
</body>
</html>