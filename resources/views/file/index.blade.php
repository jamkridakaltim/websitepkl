<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File</title>
</head>
<body>
    <h3>Read File</h3>
    <br>
    <a href="{{ url('file/create') }}">Create File</a>
    <br>

    <table>
        <head>
            <th></th>
            <th>name</th>
            <th>type</th>
            <th>path</th>
            <th>disk</th>
            <th>fileable_type</th>
            <th>fileable_id</th>
            <th>field</th>
            <th>meta</th>
            <th>aksi</th>

    </head>
    <body>
        @foreach($file as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->type }}</td>
            <td>{{ $item->path }}</td>
            <td>{{ $item->disk }}</td>
            <td>{{ $item->fileable_type }}</td>
            <td>{{ $item->fileable_id }}</td>
            <td>{{ $item->field }}</td>
            <td>{{ $item->meta }}</td>
            <td>
                <a href="{{ route('file.edit', $item->id) }}"> Edit</a>
                <form action="{{ route('file.destroy', $item->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </body>
</table>
</body>
</html>