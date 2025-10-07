@extends('layout_neural_glass')

@section('title', 'Tous les étudiants')

@section('mainSection')
@if($students->count())
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Nom
                </th>
                <th scope="col" class="px-6 py-3">
                    Prix
                </th>
                <th scope="col" class="px-6 py-3">
                    Détails
                </th>
                <th scope="col" class="px-6 py-3">
                    Supprimer
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $s)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $s->id }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $s->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $s->price / 100 }}€
                    </td>
                    <td class="px-6 py-4">
                        <a href="/students/{{ $s->id }}">
                            <button class="cursor-pointer bg-green-500 hover:bg-green-600 active:bg-green-700 px-4 py-2 rounded text-white">Voir</button>
                        </a>
                    </td>
                    <td class="px-6 py-4">
                        <form  method="post" action="/students/{{ $s->id }}">
                            @method('DELETE')
                            @csrf
                            <button class="cursor-pointer bg-red-500 hover:bg-red-600 active:bg-red-700 px-4 py-2 rounded text-white">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@else
    Aucun étudiant enregistré
@endif
@endsection
