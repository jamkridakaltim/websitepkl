<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
    <h3>Contact</h3>
    <br>
    {{-- <a href="{{ route('contact.create') }}">Create Contact</a> --}}
    <table>
        <thead>
            <th>#</th>
            <th>Nama</th>
            <th>No hp</th>
            <th>Email</th>
            <th>Kritik/Saran</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach ( $contact as $index => $item)
                
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->no_hp}}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->saran }}</td>
                <td>
                    <button>
                    <a href="{{'contact/create'}}">Create</a>
                    </button>
                    <button>
                    <a href="{{ route('contact.edit', $item->id) }}">Edit</a>
                    </button>
                    <form action="{{ route('contact.destroy', $item->id)}}" method="post">
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