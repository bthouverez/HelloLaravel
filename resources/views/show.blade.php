@extends('layout_neural_glass')

@section('title', 'Etudiant : '. $student->name)

@section('mainSection')

                <div class="feature-row">
                    <div class="feature-content glass">
                        <div><img src="{{ $student->picture ?? '/default_avatar.jpg' }}" alt="photo" width="100"/></div>
                        <nav class="mt-4 flex gap-2 mb-4">
                            <a href="/students/{{ $student->id }}/edit"><button class="cursor-pointer bg-green-500 hover:bg-green-600 active:bg-green-700 px-4 py-2 rounded">Éditer</button></a>
                            <form  method="post" action="/students/{{ $student->id }}">
                                @method('DELETE')
                                @csrf
                                <button class="cursor-pointer bg-red-500 hover:bg-red-600 active:bg-red-700 px-4 py-2 rounded">Supprimer</button>
                            </form>
                        </nav>
                        <h3>{{ $student->name }}</h3>
                        <p>{{ $student->price / 100}}€</p>
                        <p>{{ $student->description }}</p>
                    </div>
                    <div class="feature-visual glass"></div>
                </div>
@endsection
