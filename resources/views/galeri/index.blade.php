<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galeri</title>
</head>
<body>
    <h3>Read Galeri</h3>
    <br>
    <br>
    <a href="{{ route('galeri.create') }}">Create Galeri</a>
    <table>
        <thead>
            <th>#</th>
            <th>Id</th>
            <th>Type</th>
            <th>Caption</th>
            <th>Slug</th>
            <th>Link</th>
            <th>Tags</th>
            <th>Description</th>
            <th>Read</th>
            <th>Featured</th>
            <th>Status</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach($galeri as $index => $item)
                <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->type }}</td>
                <td>{{ $item->caption }}</td>
                <td>{{ $item->slug }}</td>
                <td>{{ $item->link }}</td>
                <td>{{ $item->tags}}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->read }}</td>
                <td>{{ $item->featured }}</td>
                <td>{{ $item->status }}</td>
                <td>
                    <a href="{{ route('galeri.edit', $item->id ) }}">Edit</a>
                    <form action=" {{ route('galeri.destroy', $item->id)}}" method='post'>
                        @csrf
                        @method('DELETE')
                     <button type="submit">Delete</a>
                </form>
               </td>
             </tr>
             @endforeach
        </body>
    </table>
</body>
</html>
    