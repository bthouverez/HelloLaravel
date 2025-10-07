@extends('layout_neural_glass')

@section('title', 'Créer un étudiant')

@section('mainSection')

    <form method="post" action="/students">
        @csrf
        <div class="contact-form glass">
            <div class="form-group">
                <input @error('name') style="border: 2px solid red" @enderror
                id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Nom"/><br>
                @error('name')
                <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <input @error('price') style="border: 2px solid red" @enderror
                id="price" type="text" name="price" value="{{ old('price') }}" placeholder="Prix"/><br>
                @error('price')
                <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <input @error('picture') style="border: 2px solid red" @enderror
                id="picture" type="text" name="picture" value="{{ old('picture') }}" placeholder="Image"/><br>
                @error('picture')
                <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
               <textarea id="description" @error('description') style="border: 2px solid red"
                         @enderror
                         name="description">{{ old('description') }}</textarea><br>
                @error('description')
                <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <button name="btnCreate" class="submit-btn">Créer</button>
        </div>
    </form>

@endsection
