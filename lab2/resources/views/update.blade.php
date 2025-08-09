<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
    <h1>Update Book</h1>
    <form action="/postUpdate" method="post">
        @csrf
        <div>
            ID: <input type="text" name="id" readonly value="{{$book->id}}">
        </div>
        <div>
            Title: <input type="text" name="title" required value="{{$book->title}}">
        </div>
        <div>
            Price: <input type="text" name="price" required value="{{$book->price}}">
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>