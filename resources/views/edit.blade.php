@extends('layout_neural_glass')

@section('title', 'Modifier l\'étudiant : '. $student->name)

@section('mainSection')
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
    @csrf
    @method('PATCH')
    <div class="contact-form glass">
        <div class="form-group">
            <input @error('name') style="border: 2px solid red" @enderror
            id="name" type="text" name="name" value="{{ $student->name }}" placeholder="Nom"/><br>
            @error('name')
            <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <input @error('price') style="border: 2px solid red" @enderror
            id="price" type="text" name="price" value="{{ $student->price / 100 }}" placeholder="Prix"/><br>
            @error('price')
            <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <input @error('picture') style="border: 2px solid red" @enderror
            id="picture" type="text" name="picture" value="{{ $student->picture }}" placeholder="Image"/><br>
            @error('picture')
            <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
               <textarea id="description" @error('description') style="border: 2px solid red"
                         @enderror
                         name="description">{{ $student->description }}</textarea><br>
            @error('description')
            <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <button name="btnCreate" class="submit-btn">Mettre à jour</button>
    </div>
</form>
@endsection
