<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postcategories</title>
</head>
<body>
    <h3>Read Postcategories</h3>
    <br>
    <a href="{{ route('postcategories.create') }}">Create Postcategories</a>
    <br>
    <table>
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Status</th>
        <thead>
        <tbody>
            @foreach($postcategories as $index => $item)
            <tr>
                 <td>{{ $index + 1 }}</td>
                 <td>{{ $item->name}}</td>
                 <td>{{ $item->slug }}</td>
                 <td>{{ $item->status }}</td>
                 <td>
                    <a href="{{ route('postcategories.edit', $item->id ) }}">Edit</a>
                    <form action=" {{ route('postcategories.destroy', $item->id)}}" method='post'>
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
    
                 