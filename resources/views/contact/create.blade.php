<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Contact</title>
</head>
<body>
    <h3>create contact</h3>
    <br>
    <form action="{{ route('contact.store')}}" method="post">
    @csrf
    @method('POST')
    Nama <br>
    <input type="text" name="nama"> <br>
    No HP <br>
    <input type="text" name="no_hp"> <br>
    Email <br>
    <input type="text" name="email"> <br>
    Saran <br>
    <textarea name="saran"></textarea> <br>
    <button type="submit"> Simpan </button>
    <a href=" {{url('contact') }}">Kembali</a>
    </form>
</body>
</html>