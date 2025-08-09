<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book List</title>
</head>
<body>
    <h1>Book List</h1>
    <a href="/create">Add New Book</a>

    {{-- search --}}
    <form action="/search" style="margin: 20px" method="get">
        <input type="text" name="searchText"> 
        <input type="submit" value="Search">
    </form>
    {{-- end search --}}

    <table>
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Price</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($bookList as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->price}}</td>
                <td>
                    <a href="/update/{{$book->id}}">Edit</a> |
                    <a href="/delete/{{$book->id}}" onclick="return confirm('Are you sure you want to delete this book?')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>