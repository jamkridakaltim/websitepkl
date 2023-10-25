<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Link</title>
</head>
<body>
    <h3>Read Link</h3>
    <br>
    <a href="{{ route('link.create') }}">Create Link</a>
    </br>
    <table>
        <thead>
            <th>#</th>
            <th>CATEGORY</th>
            <th>NAME</th>
            <th>LINK</th>
            <th>ICON</th>
            <th>ORDER</th>
            <th>STATUS</th>
            <th>LOCK</th>
            <th>AKSI</th>

        </thead>
        </tbody>
            @foreach($link as $index => $item)
            <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item->category }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->link }}</td>
            <td>{{ $item->icon }}</td>
            <td>{{ $item->order }}</td>
            <td>{{ $item->status}}</td>
            <td>{{ $item->lock }}</td>
            <td>
                    <a href="{{ route('link.edit',$item->id) }}">Edit</a>
                    <form action="{{ route('link.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>