<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tous les students</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<a href="/students/create"><button>Créer</button></a>
<br>
<br>
@if($students->count())
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ number_format($student->price / 100, 2) }} €</td>
                    <td><a href="/students/{{ $student->id }}"><button>Détails</button></a></td>
                    <td>
                        <form method="post" action="/students/{{ $student->id }}">
                            @method('DELETE')
                            @csrf
                            <button>Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Aucun étudiant enregistré</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    @else
        Aucun étudiant enregistré
    @endif
</body>
</html>
