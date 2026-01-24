<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Create Student</h2>
    <form action="/studentStore" method="POST">
        @csrf
        <label for="name">Name : </label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="gender">Gender</label><br>
        <select name="gender" id="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br><br>
        <button type="submit">Save</button>
    </form>
    <h3>
        Student List
    </h3>
    @foreach ($students as $student)
        <ul>
            <li>ID : {{ $student->id }}</li>
            <li>ID : {{ $student->name }}</li>
            <li>ID : {{ $student->gender }}</li>
        </ul>
    @endforeach
</body>
</html>