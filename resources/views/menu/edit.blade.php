<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Menu</title>
</head>
<body>
    <h3>Edit Menu</h3>
    <br>
    <form action="{{ route('menu.update', $menu->id )}}" method="post">
        @csrf
        @method('PUT')
        Nama <br>
        <input type="text" name="name" value="{{ $menu->name }}"> <br>
        Slug <br>
        <input type="text" name="slug" value="{{ $menu->slug }}"> <br>
        Link <br>
        <input type="text" name="link" value="{{ $menu->link }}"> <br>
        Icon <br>
        <input type="text" name="icon" value="{{ $menu->icon }}"> <br>
        Parent Id <br>
        <input type="text" name="parent_id" value="{{ $menu->parent_id }}"> <br>
        Position <br>
        <input type="text" name="position" value="{{ $menu->position}}"> <br>
        Order <br>
        <input type="text" name="order" value="{{ $menu->order }}"> <br>
        Status <br>
        <input type="text" name="status" value="{{ $menu->status }}"> <br>
        Lock<br>
        <input type="text" name="lock" value="{{ $menu->lock }}"> <br>
        <button type="submit"> Simpan </button>
        <a href=" {{url('menu') }}">Kembali</a>
        </form>
</body>
</html>