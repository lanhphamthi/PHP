<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <h1>Add New Book</h1>
    <form action="/postCreate" method="post">
        @csrf
        <div>
            Title: <input type="text" name="title" required>
        </div>
        <div>
            Price: <input type="text" name="price" required>
        </div>
        <div>
            <input type="submit" value="Add">
        </div>
    </form>
</body>
</html>