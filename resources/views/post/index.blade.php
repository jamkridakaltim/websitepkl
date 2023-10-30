<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>
<body>
    <h3>Read Post</h3>
    <br>
    <a href="{{ route('post.create') }}">Create Post</a>
    </br>
    <table>
        <thead>
            <th>#</th>
            <th>CATEGORY_ID</th>
            <th>TITLE</th>
            <th>SLUG</th>
            <th>TAGS</th>
            <th>CONTENT</th>
            <th>TYPE</th>
            <th>TYPE_ID</th>
            <th>READ</th>
            <th>STATUS</th>
            <th>PUBLISHED_AT</th>
            <th>USER_ID</th>
            <th>AKSI</th>

        </thead>
        <tbody>
            @foreach($post as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->category_id }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->slug }}</td>
                <td>{{ $item->tags }}</td>
                <td>{{ $item->content }}</td>
                <td>{{ $item->type }}</td>
                <td>{{ $item->type_id }}</td>
                <td>{{ $item->read }}</td>
                <td>{{ $item->status }}</td>
                <td>{{ $item->published_at }}</td>
                <td>{{ $item->user_id }}</td>

                <td>
                    <a href="{{ route('post.edit',$item->id) }}">Edit</a>
                    <form action="{{ route('post.destroy', $item->id) }}" method="post">
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