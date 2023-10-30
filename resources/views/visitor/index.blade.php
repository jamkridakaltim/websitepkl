<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor</title>
</head>
<body>
    <h3>Read Visitor</h3>
    <br>
    <a href="{{ route('visitor.create') }}">Create Visitor</a>
    <br>
    <table>
        <thead>
            <th>#</th>
            <th>Ip</th>
            <th>Country</th>
            <th>Total</th>
        <thead>
        <tbody>
            @foreach($visitor as $index => $item)
            <tr>
                 <td>{{ $index + 1 }}</td>
                 <td>{{ $item->ip }}</td>
                 <td>{{ $item->country }}</td>
                 <td>{{ $item->total }}</td>
                 <td>
                    <a href="{{ route('visitor.edit', $item->id ) }}">Edit</a>
                    <form action=" {{ route('visitor.destroy', $item->id)}}" method='post'>
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
    
                 