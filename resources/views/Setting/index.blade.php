<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Setting</title>
</head>
<body>
    <h3>Setting</h3>
    <br>
    <button>
        <a href="{{'setting/create'}}">Create</a>
        </button>
    <table>
        <thead>
            <th>#</th>
            <th>key</th>
            <th>Value</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach ( $setting as $index => $item)
                
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->key }}</td>
                <td>{{ $item->value}}</td>
                <td>
                    
                    <button>
                    <a href="{{ route('setting.edit', $item->id) }}">Edit</a>
                    </button>
                    <form action="{{ route('setting.destroy', $item->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit"> Delete </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href=" {{url('menu') }}">Kembali</a>
    
</body>
</html>