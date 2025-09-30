<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Création d'un student</title>
    <style></style>
</head>
<body>
<form method="post" action="/students">
    @csrf

    <table>
        <tr>
            <td><label for="name">Nom : </label></td>
            <td>
                <input @error('name') style="border: 2px solid red" @enderror
                id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Nom" /><br>
                @error('name')
                <p style="color: red">{{ $message }}</p>
                @enderror
            </td>
        </tr>
        <tr>
            <td><label for="price">Prix : </label></td>
            <td>
                <input @error('price') style="border: 2px solid red" @enderror
                id="price" type="text" name="price" value="{{ old('price') }}" placeholder="Prix" /><br>
                @error('price')
                <p style="color: red">{{ $message }}</p>
                @enderror
            </td>
        </tr>
        <tr>
            <td><label for="picture">Image : </label></td>
            <td>
                <input @error('picture') style="border: 2px solid red" @enderror
                id="picture" type="text" name="picture" value="{{ old('picture') }}" placeholder="Image" /><br>
                @error('picture')
                <p style="color: red">{{ $message }}</p>
                @enderror
            </td>
        </tr>
        <tr>
            <td><label for="description">Description : </label></td>
            <td>
                   <textarea id="description" @error('description') style="border: 2px solid red" @enderror
                   name="description">{{ old('description') }}</textarea><br>
                @error('description')
                <p style="color: red">{{ $message }}</p>
                @enderror
            </td>
        </tr>
    </table>
    <button name="btnCreate">Créer</button>
</form>
</body>
</html>
