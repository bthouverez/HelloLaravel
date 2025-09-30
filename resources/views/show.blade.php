<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Un seul student</title>
    <style>
        section {
            border: 1px solid black;
            border-radius: 8px;
            max-width: 300px;
            text-align: center;
            margin: auto;
        }
        nav {
            border: 1px solid black;
            border-radius: 8px;
            max-width: 300px;
            margin: 8px auto;
            text-align: center;
        }
        nav button {
            padding: 5px;
            margin: 8px;
        }
        img {
            max-width: 300px;
            border-radius: 8px 8px 0 0;
        }
    </style>
</head>
<body>
    <nav>
        <a href="/students/{{ $student->id }}/edit"><button>Éditer</button></a>
        <form method="post" action="/students/{{ $student->id }}">
            @method('DELETE')
            @csrf
            <button>Supprimer</button>
        </form>
    </nav>

    <section>
        <img src="{{ $student->picture }}" alt="photo" />
        <h1>{{ $student->name }}</h1>
        <strong>{{ $student->price / 100 }} €</strong>
        <p>{{ $student->description }}</p>
        <p>Créé le {{ \Carbon\Carbon::parse($student->created_at)->format('d/m/Y à H\hi') }}</p>
        <p>Mis à jour le {{ \Carbon\Carbon::parse($student->updated_at)->format('d/m/Y à H\hi') }}</p>
    </section>
</body>
</html>
