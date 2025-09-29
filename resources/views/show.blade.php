<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Un seul student</title>
    <style></style>
</head>
<body>
<img src="{{ $student->picture }}" alt="photo" width="150" />
<ul>
    <li>{{ $student->id }}</li>
    <li>{{ $student->name }}</li>
    <li>{{ $student->price / 100 }}€</li>
    <li>{{ $student->description }}</li>
    <li>{{ $student->created_at }}</li>
    <li>{{ $student->updated_at }}</li>
</ul>
</body>
</html>
