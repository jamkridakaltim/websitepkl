<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda</title>
</head>
<body>
    <h3>Read Agenda</h3>
    <br>
    <a href="{{ url('agenda/create') }}">Create Agenda</a>
    <br>

    <table>
        <thead>
            <th></th>
            <th>date</th>
            <th>time</th>
            <th>caption</th>
            <th>deskripsi</th>
            <th>lokasi</th>
            <th>aksi</th>

        </thead>
        <body>
            @foreach($agenda as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->date }}</td>
                <td>{{ $item->time }}</td>
                <td>{{ $item->caption }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>{{ $item->lokasi }}</td>
                <td>
                    <a href="{{ route('agenda.edit', $item->id) }}"> Edit</a>
                    <form action="{{ route('agenda.destroy', $item->id)}}" method="post">
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