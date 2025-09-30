<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modifier le student numéro {{ $student->id }}</title>
    <style></style>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="post" action="/students/{{ $student->id }}">
        @method('PATCH')
        @csrf
        <input type="text" name="name" value="{{ $student->name }}">
        <input type="text" name="price" value="{{ $student->price }}">
        <textarea name="description">{{ $student->description }}</textarea>
        <input type="text" name="picture" value="{{ $student->picture }}">
        <button>Enregistrer</button>
    </form>

</body>
</html>
