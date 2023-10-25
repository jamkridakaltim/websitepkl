<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Menu</title>
</head>
<body>
    <h3>create menu</h3>
    <br>
    <form action="{{ route('menu.store')}}" method="post">
    @csrf
    @method('POST')
    Name <br>
    <input type="text" name="name"> <br>
    Slug <br>
    <input type="text" name="slug"> <br>
    Link <br>
    <input type="text" name="link"> <br>
    Icon <br>
    <input type="text" name="icon"> <br>
    Parent_id <br>
    <input type="text" name="parent_id"> <br>
    Position <br>
    <input type="text" name="position"> <br>
    Order <br>
    <input type="text" name="order"> <br>
    Status <br>
    <input type="text" name="status"> <br>
    Lock <br>
    <input type="text" name="lock"> <br>
    
    <button type="submit"> Simpan </button>
    <a href=" {{url('menu') }}">Kembali</a>
    </form>
</body>
</html>