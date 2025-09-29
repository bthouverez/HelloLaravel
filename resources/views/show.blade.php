<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Un seul student</title>
    <style></style>
</head>
<body>
<ul>
    <li>{{ $student->id }}</li>
    <li>{{ $student->name }}</li>
    <li>{{ $student->price }}</li>
    <li>{{ $student->image }}</li>
    <li>{{ $student->description }}</li>
    <li>{{ $student->created_at }}</li>
    <li>{{ $student->updated_at }}</li>
</ul>
</body>
</html>
