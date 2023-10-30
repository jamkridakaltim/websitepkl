<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Polling</title>
</head>
<body>
    <h3>Read Polling</h3>
    <br>
    <a href="{{ url('polling/create') }}">Create Polling</a>
    <br>
    
    <table>
        <thead>
            <th></th>
            <th>Type</th>
            <th>parent</th>
            <th>Content</th>
            <th>Score</th>
            <th>Status</th>
            <th>Aksi</th>

        </thead>
        <body>
            @foreach($polling as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->type }}</td>
                <td>{{ $item->parent }}</td>
                <td>{{ $item->content }}</td>
                <td>{{ $item->score }}</td>
                <td>{{ $item->status }}</td>
                <td>
                    <a href="{{ route('polling.edit', $item->id) }}"> Edit</a>
                    <form action="{{ route('polling.destroy', $item->id)}}" method="post">
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