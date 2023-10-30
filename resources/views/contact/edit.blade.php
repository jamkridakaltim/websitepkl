<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Contact</title>
</head>
<body>
    <h3>Edit Contact</h3>
    <br>
    <form action="{{ route('contact.update', $contact->id )}}" method="post">
        @csrf
        @method('PUT')
        Nama <br>
        <input type="text" name="nama" value="{{ $contact->nama }}"> <br>
        No HP <br>
        <input type="text" name="no_hp" value="{{ $contact->no_hp }}"> <br>
        Email <br>
        <input type="text" name="email" value="{{ $contact->email }}"> <br>
        Saran <br>
        <textarea name="saran"> {{ $contact->saran }}</textarea> <br>
        <button type="submit"> Simpan </button>
        <a href=" {{url('contact') }}">Kembali</a>
        </form>
</body>
</html>