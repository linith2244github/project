<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Student List</h1>
    @foreach($students as $key => $value)
        <ul>
            <li>ID : {{ $value["id"] }}</li>
            <li>Name : {{ $value["name"] }}</li>
            <li>Gender : {{ $value["gender"] }}</li>
        </ul>
    @endforeach
</body>
</html>