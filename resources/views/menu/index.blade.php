<!DOCTYPE html>
<html lang="en">
    @vite('resources/css/app.css')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
</head>
<body>
    <h3>Menu</h3>
    <br>
    <button>
        <a href="{{route('menu.create')}}">Create</a>
        {{-- <a href="{{ route('contact.create') }}">Create Contact</a> --}}
    <button>
    <a href=" {{url('contact') }}">contact</a>
    </button>
    <table>
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Link</th>
            <th>Icon</th>
            <th>Parent_id</th>
            <th>position</th>
            <th>order</th>
            <th>status</th>
            <th>lock</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach ( $menu as $index => $item)
                
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->slug}}</td>
                <td>{{ $item->link }}</td>
                <td>{{ $item->parent_id }}</td>
                <td>{{ $item->position }}</td>
                <td>{{ $item->order }}</td>
                <td>{{ $item->status }}</td>
                <td>{{ $item->lock }}</td>
                <td>{{ $item->icon }}</td>
                <td>
                    </button>
                    <button>
                    <a href="{{ route('menu.edit', $item->id) }}">Edit</a>
                    </button>
                    <form action="{{ route('menu.destroy', $item->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit"> Delete </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>