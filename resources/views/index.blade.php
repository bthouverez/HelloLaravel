@extends('layout_neural_glass')

@section('title', 'Tous les étudiants')

@section('mainSection')
@if($students->count())
    <div class="relative overflow-x-auto">
        <table class="w-full text-center">
            <thead class="">
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
                    Propriétaire
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
                <tr class="">
                    <th scope="row" class="">
                        {{ $s->id }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $s->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $s->price / 100 }}€
                    </td>
                    <td class="px-6 py-4">
                        {{ $s->user->name }}
                    </td>
                    <td class="px-6 py-4">
                        <p class="text-center">
                            <a href="/students/{{ $s->id }}" class="cta-button">
                                Voir
                            </a>
                        </p>
                    </td>
                    <td class="px-6 py-4">
                        <form  method="post" action="/students/{{ $s->id }}">
                            @method('DELETE')
                            @csrf
                            <p class="text-center">
                                <button class="cta-button cursor-pointer">
                                    Supprimer
                                </button>
                            </p>
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
